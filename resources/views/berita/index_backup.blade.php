@extends('layouts.main_backup')
@section('slider')
    @include('layouts.carousel')
@endsection
@section('berita')
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">Berita Publik</a> </li>
        <li><a href="/internal">Berita Internal</a></li>
    </ul>
    <div class="tab-content">
        <div id="berita" class="text-justify tab-pane fade in active">
            <p>&nbsp;</p>
            @foreach($berita as $news)
                <h2><a href="berita/{{ $news->id }}">{{ $news->judul }}</a></h2>
                <p>{!!  $news->isi !!}</p>
            @endforeach
        </div>
        <div id="internal" class="tab-pane fade">
        @if(Auth::check())
                <p>Akses granted</p>
            @else
                <p>Halaman ini hanya dapat diakses oleh anggota serikat pekerja BPJS Ketenagakerjaan. Silahkan login menggunakan email korporat untuk dapat
                    mengakses halaman ini.</p>
            @endif
        </div>
    </div>
    {{ $berita->links() }}

@endsection

@section('panel')
    @include('layouts.panel.agenda')

    @include('layouts.panel.berita')
@endsection

@section('script')
    {{--<script>
        $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
            $('.nav-tabs a').on('shown.bs.tab', function(event){
                var x = $(event.target).text();         // active tab
                var y = $(event.relatedTarget).text();  // previous tab
                $(".act span").text(x);
                $(".prev span").text(y);
            });
        });
    </script>--}}
@endsection



