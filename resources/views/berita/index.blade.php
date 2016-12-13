@extends('layouts.main')
@section('slider')
    @include('layouts.carousel')
    <hr>
@endsection
@section('berita')
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">Berita Publik</a> </li>
        <li><a href="/internal">Berita Internal</a></li>
    </ul>
    <div class="tab-content">
        <div id="berita" class="text-justify tab-pane fade in active">
            <p>&nbsp;</p>
            <div class="row" style="padding-right: 20px; padding-left: 20px">

                @foreach($berita as $news)
                    <div class="col-md-4">
                        <h2><a href="berita/{{ $news->id }}">{{ $news->judul }}</a></h2>
                        <p>{!!  $news->isi !!}</p>
                    </div>
                @endforeach
            </div>
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
    <div class="col-md-12">

        {{ $berita->links() }}
    </div>

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



