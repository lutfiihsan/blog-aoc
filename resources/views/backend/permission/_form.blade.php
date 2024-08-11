<div class="space-y-4">
    <div class="input-area">
        <label for="name" class="form-label">{{ __('Nama Permission') }}</label>
        <input required name="name" type="text" value="{{ old('name', $permission->name) }}"
            class="form-control @error('name') !border-danger-500 is-invalid @enderror" placeholder="Nama Role">
        @error('name')
            <span class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="input-area">
        <label for="guard_name" class="form-label">{{ __('Guard Name') }}</label>
        <input required name="guard_name" type="text" value="{{ old('guard_name', $permission->guard_name) }}"
            class="form-control @error('guard_name') !border-danger-500 is-invalid @enderror" value="web" readonly>
        @error('guard_name')
            <span class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                {{ $message }}
            </span>
        @enderror
    </div>
</div>
