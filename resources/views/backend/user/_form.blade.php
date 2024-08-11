<div class="space-y-4">
    <div class="input-area">
        <label for="name" class="form-label">{{ __('Nama Lengkap') }}</label>
        <input required name="name" type="text" value="{{ old('name', $user->name) }}"
            class="form-control @error('name') !border-danger-500 is-invalid @enderror" placeholder="Nama Lengkap">
        @error('name')
            <span class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="input-area">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input required name="email" type="text" value="{{ old('email', $user->email) }}"
            class="form-control @error('email') !border-danger-500 is-invalid @enderror" placeholder="Email">
        @error('email')
            <span class="font-Inter text-xs text-white bg-danger-500 rounded px-2 py-1 mt-2 inline-block">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="input-area">
        <label for="role" class="form-label">{{ __('Role Pengguna') }}</label>
        <div class="space-y-3">
            @foreach ($roles as $role)
            <div class="checkbox-area">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="hidden" value="{{ $role->id }}" name="roles[]" {{ (in_array($role->id, $user->roles->pluck('id')->toArray())) ? 'checked' : '' }}>
                    <span
                        class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                        <img src="{{ asset('dashcode') }}/images/icon/ck-white.svg" alt=""
                            class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">
                        {{ $role->name }}
                    </span>
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>
