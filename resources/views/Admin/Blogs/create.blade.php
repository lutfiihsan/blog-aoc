@extends('Layout.BackEnd.app')
@section('title', 'Blogs')

@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <main>
        <div class="container-fluid px-4">
            <div class="my-3">
                @include('Layout.BackEnd.Components.blog-button-back')
            </div>
            <h1 class="my-4">Create Blog</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('admin/blogs') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="my-3">
                                            <button type="submit" class="btn btn-sm btn-success" value="publish">
                                                <fa class="fa fa-fw fa-paper-plane"></fa> Publish
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-secondary" value="draft">
                                                <fa class="fa fa-fw fa-archive"></fa> Simpan
                                            </button>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td>
                                                        {{-- Make Upload Thumbnail click div and show image upload --}}
                                                        <div id="thumbnail-img" class="d-flex justify-content-center align-items-center w-50 h-100 mx-auto" style="border:1px solid #ccc;">
                                                            <div class="upload-thumbnail card-body text-center">
                                                                <img src="{{ asset('images/upload-image.png') }}" class="img-fluid" />
                                                            </div>
                                                            <input type="file" name="thumbnail" class="d-none" />
                                                        </div>
                                                        <script>
                                                            // Vanilla JavaScript
                                                            document.querySelector('.upload-thumbnail').addEventListener('click', function () {
                                                                document.querySelector('input[name="thumbnail"]').click();
                                                            });

                                                            // Show image on .upload-thumbnail
                                                            document.querySelector('input[name="thumbnail"]').addEventListener('change', function () {
                                                                const file = this.files[0];
                                                                if (file) {
                                                                    const reader = new FileReader();
                                                                    reader.onload = function (e) {
                                                                        document.querySelector('.upload-thumbnail').innerHTML = `<img src="${e.target.result}" class="img-fluid" />`;
                                                                    }
                                                                    reader.readAsDataURL(file);

                                                                    // remove border
                                                                    document.querySelector('#thumbnail-img').style.border = 'none';
                                                                }
                                                            });
                                                        </script>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="title" class="form-control"
                                                            required="true" placeholder="Judul Blog" autocomplete="off" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <textarea name="content" id="content" class="form-control" required="true" autocomplete="off"></textarea>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload') . '?_token=' . csrf_token() }}",
                    options: {
                        removeFiles: true,
                        removeFilesConfirmation: true,
                        removeFilesUrl: "{{ route('ckeditor.remove') . '?_token=' . csrf_token() }}",
                    }
                },
                editorConfig: {
                    height: 500
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
