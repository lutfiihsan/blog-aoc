@extends('Layout.Backend.dashcode')
@section('content')
    {{-- Button Back on left, button publish or draft on right --}}
    <div class="flex justify-between">
        <a href="{{ url('admin/blogs') }}"
            class="btn inline-flex justify-center btn-warning shadow-base2">
            Back
        </a>
        <div class="flex space-x-3">
            <button class="btn inline-flex justify-center btn-primary shadow-base2">
                Save
            </button>
        </div>
    </div>
    <div class="grid xl:grid-cols-4 grid-cols-1 gap-3">
        <div class="card xl:col-span-1">
            <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">Edit Blog</div>
                    </div>
                </header>
                <div class="card-text" id="data-create-blog">
                    <div class="space-y-4">
                        <div class="input-area relative">
                            <label for="titleBlog" class="form-label">Judul Blog</label>
                            <input type="text" class="form-control" placeholder="Instalasi Laravel 10" name="titleBlog"
                                id="titleBlog">
                        </div>
                        <div class="input-area relative">
                            <label for="multiSelect" class="form-label">Kategori</label>
                            <select name="multiSelect" id="multiSelect" class="select2 form-control w-full mt-2 py-2"
                                multiple="multiple">
                                <option value="option1"
                                    class=" inline-block font-Inter font-normal text-sm text-slate-600 dark:text-white">
                                    Option 1
                                </option>
                                <option value="option2"
                                    class=" inline-block font-Inter font-normal text-sm text-slate-600 dark:text-white">
                                    Option 2
                                </option>
                                <option value="option3"
                                    class=" inline-block font-Inter font-normal text-sm text-slate-600 dark:text-white">
                                    Option 3</option>
                                <option value="option4"
                                    class=" inline-block font-Inter font-normal text-sm text-slate-600 dark:text-white">
                                    Option 4
                                </option>
                                <option value="option5"
                                    class=" inline-block font-Inter font-normal text-sm text-slate-600 dark:text-white">
                                    Option 5</option>
                            </select>
                        </div>
                        <div class="input-area relative">
                            <label for="largeInput" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" placeholder="instalasi-laravel-10-1360x768.jpg">
                            <div class="mt-3">
                                <img src="{{ asset('images/no-image.png') }}" alt="Thumbnail"
                                    class="w-40 h-40 object-cover rounded-lg mx-auto" id="thumbnail">
                            </div>
                        </div>
                        <script>
                            const file = document.querySelector('input[type="file"]');
                            file.addEventListener('change', function() {
                                const [file] = this.files;
                                if (file) {
                                    thumbnail.src = URL.createObjectURL(file);
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="card xl:col-span-3">
            <div class="card-body flex flex-col p-6">
                <div class="card-text h-full flex flex-col">
                    <div class="space-y-4 flex-grow">
                        <div id="editor">
                            <p>Hello World!</p>
                            <p>Some initial <strong>bold</strong> text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var quill = new Quill('#editor', {
            modules: {
                toolbar: [
                    [{
                        'font': []
                    }],
                    [{
                        'size': []
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        'color': []
                    }, {
                        'background': []
                    }],
                    [{
                        'script': 'super'
                    }, {
                        'script': 'sub'
                    }],
                    [{
                        'header': [1, 2, 3, 4, 5, 6, false]
                    }],
                    [{
                        'align': []
                    }],
                    ['clean'],
                    ['link', 'image', 'video'],
                    ['code-block']
                ],
                syntax: true,
            },
            theme: 'snow'
        });

        const dataCreateBlog = document.getElementById('data-create-blog');
        const editorContainer = document.getElementById('editor');

        const resizeObserver = new ResizeObserver(entries => {
            for (let entry of entries) {
                if (entry.target === dataCreateBlog) {
                    editorContainer.style.height = `${entry.contentRect.height + 25}px`;
                }
            }
        });

        resizeObserver.observe(dataCreateBlog);
    </script>
@endsection
