@extends('layouts.main')
@section('slider')
    @include('layouts.carousel')
    <hr>
@endsection
@section('berita')
    <ul class="nav nav-tabs">
        <li><a href="/">Berita Publik</a> </li>
        <li class="active"><a href="#">Berita Internal</a></li>
    </ul>
    <div class="tab-content">
        <div id="berita" class="tab-pane fade">
            <p>&nbsp;</p>
        </div>
        <div id="internal" class="text-justify tab-pane fade in active">
            @if(Auth::check())

                <div class="row" style="padding-right: 20px; padding-left: 20px">

                    @foreach($berita as $news)
                        <div class="col-md-4">
                            <h2><a href="berita/{{ $news->id }}">{{ $news->judul }}</a></h2>
                            <p>{!!  $news->isi !!}</p>
                        </div>
                    @endforeach
                </div>
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

