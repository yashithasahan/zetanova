<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <style>
        .img-uploader-zone {
            border: 2px dashed #d1d5db;
            border-radius: 16px;
            background: #f9fafb;
            transition: all 0.2s ease;
            cursor: pointer;
        }
        .img-uploader-zone:hover, .img-uploader-zone.drag-over {
            border-color: #6366f1;
            background: #eef2ff;
        }
        .img-tile {
            position: relative;
            flex-shrink: 0;
            width: 110px;
            height: 110px;
            border-radius: 12px;
            overflow: visible;
            animation: tile-pop 0.2s ease;
        }
        @keyframes tile-pop {
            from { transform: scale(0.8); opacity: 0; }
            to   { transform: scale(1);   opacity: 1; }
        }
        .img-tile img {
            width: 110px; height: 110px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid #e5e7eb;
            display: block;
        }
        .img-tile .remove-btn {
            position: absolute; top: -8px; right: -8px;
            width: 22px; height: 22px;
            background: #ef4444; color: white;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 13px; font-weight: bold; line-height: 1;
            cursor: pointer;
            border: 2px solid white;
            box-shadow: 0 1px 4px rgba(0,0,0,0.2);
            transition: background 0.15s;
            z-index: 10;
        }
        .img-tile .remove-btn:hover { background: #b91c1c; }
        .add-more-tile {
            flex-shrink: 0; width: 110px; height: 110px;
            border-radius: 12px;
            border: 2px dashed #d1d5db;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            cursor: pointer; gap: 4px; color: #9ca3af;
            transition: all 0.2s;
            font-size: 11px; font-weight: 500;
        }
        .add-more-tile:hover { border-color: #6366f1; color: #6366f1; background: #eef2ff; }
        .uploader-counter { font-size: 11px; color: #6b7280; margin-top: 6px; }
        .file-error { color: #ef4444; font-size: 12px; margin-top: 4px; }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('inventory.update', $inventory) }}" class="max-w-2xl" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Product Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $inventory->name)" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Images -->
                        <div class="mb-4">
                            <x-input-label :value="__('Product Images')" />

                            <!-- Drop Zone (only when 0 saved images AND 0 new) -->
                            <div id="large-dropzone" class="img-uploader-zone mt-2 py-10 flex-col items-center justify-center gap-2 {{ $inventory->images->count() > 0 ? 'hidden' : 'flex' }}">
                                <svg width="44" height="44" fill="none" viewBox="0 0 44 44" stroke="#9ca3af" stroke-width="1.5">
                                    <rect x="4" y="10" width="36" height="26" rx="5"/>
                                    <circle cx="15" cy="20" r="3"/>
                                    <path d="M4 32l9-8 6 6 5-5 8 7" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p class="text-sm text-gray-500 font-medium">Drag &amp; drop images here</p>
                                <p class="text-xs text-gray-400">or</p>
                                <button type="button" onclick="event.stopPropagation(); document.getElementById('images').click()" class="px-4 py-1.5 text-sm font-semibold text-indigo-600 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition-colors">Browse files</button>
                                <p class="text-xs text-gray-400 mt-1">JPG, PNG, WEBP &middot; Max 512KB each &middot; Up to 5 images</p>
                            </div>

                            <!-- Tile grid -->
                            <div id="image-grid" class="{{ $inventory->images->count() > 0 ? '' : 'hidden' }} mt-3">
                                <div id="tile-row" class="flex flex-wrap gap-3 items-start">

                                    <!-- Existing saved images -->
                                    @foreach($inventory->images as $img)
                                        <div class="img-tile" id="saved-tile-{{ $img->id }}">
                                            <img src="{{ Storage::url($img->image_path) }}" alt="Product image">
                                            <button type="button"
                                                class="remove-btn"
                                                onclick="deleteSavedImage({{ $img->id }}, this)"
                                                title="Remove">
                                                &times;
                                            </button>
                                        </div>
                                    @endforeach

                                    <!-- New JS tiles inserted here before add-more -->
                                    <div id="add-more-tile" class="add-more-tile" onclick="document.getElementById('images').click()">
                                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                                        </svg>
                                        <span>Add photo</span>
                                    </div>
                                </div>
                                <p class="uploader-counter" id="img-counter">{{ $inventory->images->count() }} / 5 photos</p>
                            </div>

                            <input type="file" id="images" name="images[]" multiple accept="image/*" class="hidden">
                            <div id="upload-errors"></div>
                            <x-input-error :messages="$errors->get('images')" class="mt-2" />
                            <x-input-error :messages="$errors->get('images.*')" class="mt-2" />
                        </div>

                        <!-- Category -->
                        <div class="mb-4">
                            <x-input-label for="category" :value="__('Category')" />
                            <x-text-input id="category" class="block mt-1 w-full" type="text" name="category" :value="old('category', $inventory->category)" />
                            <x-input-error :messages="$errors->get('category')" class="mt-2" />
                        </div>

                        <!-- Price -->
                        <div class="mb-4">
                            <x-input-label for="price" :value="__('Price (Rs.)')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" name="price" :value="old('price', $inventory->price)" required />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                        <!-- Quantity -->
                        <div class="mb-4">
                            <x-input-label for="quantity" :value="__('Stock Quantity')" />
                            <x-text-input id="quantity" class="block mt-1 w-full" type="number" name="quantity" :value="old('quantity', $inventory->quantity)" required />
                            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" rows="4" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('description', $inventory->description) }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4 mt-6">
                            <button type="submit" class="bg-gray-800 text-white px-5 py-2 rounded-lg hover:bg-gray-700 text-sm font-bold uppercase tracking-widest transition-colors">Update Product</button>
                            <a href="{{ route('inventory.index') }}" class="text-gray-500 hover:text-gray-900 text-sm">Cancel</a>
                        </div>
                    </form>

                    <!-- Hidden delete forms for saved images -->
                    @foreach($inventory->images as $img)
                        <form id="delete-img-form-{{ $img->id }}" action="{{ route('inventory.image.destroy', $img->id) }}" method="POST" class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        const fileInput   = document.getElementById('images');
        const dropzone    = document.getElementById('large-dropzone');
        const imageGrid   = document.getElementById('image-grid');
        const tileRow     = document.getElementById('tile-row');
        const addMoreTile = document.getElementById('add-more-tile');
        const counter     = document.getElementById('img-counter');
        const errorsDiv   = document.getElementById('upload-errors');
        const MAX = 5, MAX_KB = 512;
        let newFiles = [];
        let savedCount = {{ $inventory->images->count() }};

        // Drag & drop
        ['dragenter','dragover','dragleave','drop'].forEach(ev =>
            dropzone.addEventListener(ev, e => { e.preventDefault(); e.stopPropagation(); }));
        dropzone.addEventListener('dragenter', () => dropzone.classList.add('drag-over'));
        dropzone.addEventListener('dragover',  () => dropzone.classList.add('drag-over'));
        dropzone.addEventListener('dragleave', () => dropzone.classList.remove('drag-over'));
        dropzone.addEventListener('drop', e => { dropzone.classList.remove('drag-over'); addFiles(e.dataTransfer.files); });
        dropzone.addEventListener('click', () => fileInput.click());
        fileInput.addEventListener('change', () => { addFiles(fileInput.files); fileInput.value = ''; sync(); });

        function totalCount() { return savedCount + newFiles.length; }

        function addFiles(list) {
            errorsDiv.innerHTML = '';
            const errs = [];
            Array.from(list).forEach(f => {
                if (totalCount() >= MAX)          { errs.push(`Max ${MAX} images allowed.`); return; }
                if (f.size > MAX_KB * 1024)       { errs.push(`"${f.name}" is too large (max ${MAX_KB}KB).`); return; }
                if (!f.type.startsWith('image/')) { errs.push(`"${f.name}" is not a valid image.`); return; }
                newFiles.push(f);
            });
            if (errs.length) errorsDiv.innerHTML = errs.map(e => `<p class="file-error">&#9888; ${e}</p>`).join('');
            sync(); renderNewTiles(); updateUI();
        }

        function removeNewFile(i) {
            newFiles.splice(i, 1);
            sync(); renderNewTiles(); updateUI();
        }

        function deleteSavedImage(id, btn) {
            if (!confirm('Remove this image?')) return;
            document.getElementById('delete-img-form-' + id).submit();
        }

        function sync() {
            const dt = new DataTransfer();
            newFiles.forEach(f => dt.items.add(f));
            fileInput.files = dt.files;
        }

        function renderNewTiles() {
            tileRow.querySelectorAll('.js-new-tile').forEach(el => el.remove());
            newFiles.forEach((file, idx) => {
                const reader = new FileReader();
                reader.onload = ev => {
                    const tile = document.createElement('div');
                    tile.className = 'img-tile js-new-tile';
                    const img = document.createElement('img');
                    img.src = ev.target.result;
                    img.alt = file.name;
                    const btn = document.createElement('button');
                    btn.type = 'button'; btn.className = 'remove-btn'; btn.innerHTML = '&times;'; btn.title = 'Remove';
                    btn.addEventListener('click', e => { e.stopPropagation(); removeNewFile(idx); });
                    tile.appendChild(img); tile.appendChild(btn);
                    tileRow.insertBefore(tile, addMoreTile);
                };
                reader.readAsDataURL(file);
            });
        }

        function updateUI() {
            const total = totalCount();
            dropzone.classList.toggle('hidden', total > 0);
            imageGrid.classList.toggle('hidden', total === 0);
            addMoreTile.style.display = total >= MAX ? 'none' : 'flex';
            counter.textContent = `${total} / ${MAX} photos`;
        }

        updateUI();
    </script>
    @endpush
</x-app-layout>
