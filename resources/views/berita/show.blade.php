@extends('layouts.main')
@section('berita')
    <div class="text-justify">
        <h2>{{ $berita->judul }}</h2>
        <p>{{ $berita->isi }}</p>
        <div class="komentar">
            <h4>Komentar :</h4>
            @foreach($komentar as $komen)
                <p>{{ $komen->isi }}</p>
            @endforeach
        </div>
        <h4>Komentar Anda :</h4>
        @if(Auth::check())
            {{ Form::open(['route' => ['post.komentar', $berita->id]]) }}
            <div class="form-group">
                {{ Form::textarea('komentar', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Kirim', ['class' => 'form-control btn btn-primary']) }}
            </div>
            @else
            <p>Jika Anda anggota Serikat Pekerja BPJS Ketenagakerjaan, silahkan login untuk dapat menulis komentar Anda</p>
            {{ Form::close() }}
        @endif
    </div>
@endsection