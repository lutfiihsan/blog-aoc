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
            <h1 class="my-4">{{ $blog->title }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th class="w-25">Judul</th>
                                                <td>
                                                    <input type="text" 
                                                           name="title" 
                                                           class="form-control" 
                                                           value="{{ $blog->title }}" 
                                                           required="true" 
                                                           placeholder="Judul Blog" 
                                                           autocomplete="off" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Penulis</th>
                                                <td>
                                                    <input type="text" 
                                                           name="created_by" 
                                                           class="form-control" 
                                                           value="{{ Str::ucfirst($blog->created_by) }}" 
                                                           required="true" 
                                                           placeholder="Penulis Blog" 
                                                           autocomplete="off" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>
                                                    <select name="status" 
                                                            class="form-control" 
                                                            required="true" 
                                                            autocomplete="off">
                                                        <option value="published" {{ $blog->status == 'published' ? 'selected' : '' }}>Publish</option>
                                                        <option value="draft" {{ $blog->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                                        <option value="archived" {{ $blog->status == 'archived' ? 'selected' : '' }}>Archive</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>                                                <td colspan="2">
                                                    <textarea name="content"
                                                              id="content" 
                                                              class="form-control" 
                                                              required="true" 
                                                              placeholder="Isi Blog" 
                                                              autocomplete="off">{!! $blog->content !!}</textarea>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script>
        ClassicEditor.create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
