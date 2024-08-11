<div class="space-y-4">
    <div class="input-area">
        <label for="name" class="form-label">{{ __('Nama Kategori') }}</label>
        <input required name="name" type="text" value="{{ old('name', $category->name) }}"
            class="form-control @error('name') !border-danger-500 is-invalid @enderror" placeholder="Nama Kategori">
        @error('name')
            <span class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                {{ $message }}
            </span>
        @enderror
    </div>
</div>
