<?php
// Prevent direct access from other domains (CORS) by not setting open headers.
// Only the same domain can call this script via AJAX/fetch.

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// Ensure the request is POST and contains JSON
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

$inputJSON = file_get_contents('php://input');
$data = json_decode($inputJSON, true);

if (!$data) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid JSON payload"]);
    exit;
}

// ---------------------------------------------------------
// DIRECT SMTP CONFIGURATION
// ---------------------------------------------------------
$smtpHost = "cloud184.hostgator.com"; // Your HostGator SMTP server
$smtpPort = 465;                      // You confirmed port 465
$smtpUser = "concierge@zetanova.lk";  // Your provided email
$smtpPass = "Concierge@2026";        // Password provided

$toEmail = "yashithasahan@gmail.com"; // Where to send the quotes (updated as requested)
$rawSubject = $data['subject'] ?? "New Quote Request";
// SECURITY: Strip newlines from subject to prevent Email Header Injection
$subject = str_replace(["\r", "\n"], '', $rawSubject); 
$body = $data['body'] ?? "No details provided.";

// ---------------------------------------------------------
// LIGHTWEIGHT SMTP SENDER (No external libraries needed)
// ---------------------------------------------------------
function send_smtp_email($host, $port, $user, $pass, $to, $subject, $body) {
    $log = "";
    
    $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
    $socket = stream_socket_client("ssl://".$host.":".$port, $errno, $errstr, 15, STREAM_CLIENT_CONNECT, $context);
    
    if (!$socket) {
        return ["success" => false, "log" => "Connection failed: $errno $errstr"];
    }

    // Helper to read and log server response
    $server_parse = function($socket, $expected_response) use (&$log) {
        $server_response = '';
        while (substr($server_response, 3, 1) != ' ') {
            if (!($server_response = fgets($socket, 256))) {
                $log .= "Read Error\n";
                return false;
            }
        }
        $log .= "S: " . trim($server_response) . "\n";
        return (substr($server_response, 0, 3) == $expected_response);
    };

    // Helper to send command and log
    $send_cmd = function($cmd) use (&$socket, &$log) {
        $log .= "C: " . trim($cmd) . "\n";
        fwrite($socket, $cmd . "\r\n");
    };

    if (!$server_parse($socket, "220")) return ["success" => false, "log" => $log];

    $send_cmd("EHLO " . $host);
    if (!$server_parse($socket, "250")) return ["success" => false, "log" => $log];

    $send_cmd("AUTH LOGIN");
    if (!$server_parse($socket, "334")) return ["success" => false, "log" => $log];

    $send_cmd(base64_encode($user));
    if (!$server_parse($socket, "334")) return ["success" => false, "log" => $log];

    $send_cmd(base64_encode($pass)); // Log will show base64, relatively safe
    if (!$server_parse($socket, "235")) return ["success" => false, "log" => $log];

    $send_cmd("MAIL FROM: <" . $user . ">");
    if (!$server_parse($socket, "250")) return ["success" => false, "log" => $log];

    $send_cmd("RCPT TO: <" . $to . ">");
    if (!$server_parse($socket, "250")) return ["success" => false, "log" => $log];

    $send_cmd("DATA");
    if (!$server_parse($socket, "354")) return ["success" => false, "log" => $log];

    $headers = "From: Zetanova Console <" . $user . ">\r\n";
    $headers .= "Reply-To: " . $user . "\r\n";
    $headers .= "Subject: " . $subject . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";

    $log .= "C: [Sending Headers and Body...]\n";
    fwrite($socket, $headers . $body . "\r\n.\r\n");
    
    $success = $server_parse($socket, "250");

    $send_cmd("QUIT");
    fclose($socket);

    return ["success" => $success, "log" => $log];
}

$result = send_smtp_email($smtpHost, $smtpPort, $smtpUser, $smtpPass, $toEmail, $subject, $body);

// Also write log to a file for easy inspection on the server
file_put_contents('smtp_log.txt', date('Y-m-d H:i:s') . "\n" . $result['log'] . "\n\n", FILE_APPEND);

if ($result['success']) {
    http_response_code(200);
    echo json_encode(["success" => true, "message" => "Quote sent successfully!"]);
} else {
    http_response_code(500);
    // Returning the log in the error so you can see it in the browser Console/Network tab
    echo json_encode(["error" => "SMTP Authentication failed.", "log" => $result['log']]);
}
?>
