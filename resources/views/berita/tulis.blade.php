@extends('layouts.main')
@section('berita')
    {{ Form::open() }}
    <div class="form-group spasi">
        {{ Form::label('judul', 'Judul') }}
        {{ Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'tulis judul berita']) }}
        {{ Form::textarea('isi', null, ['class' => 'form-control', 'placeholder' => 'tulis judul berita', 'id' => 'ckeditor']) }}
    </div>
    {{ Form::close() }}
@endsection

@section('script')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        });
    </script>
@endsection