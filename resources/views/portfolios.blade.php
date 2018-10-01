@extends('layout.index')

@section('content')
    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Portfolio</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->

    <section id="portfolio" class="container main">
        <ul class="gallery col-4">
            @foreach($portfolios as $portfolio)
                <li>
                    <div class="preview">
                        <img alt=" " src="images/portfolio/thumb/{{ json_decode($portfolio->img)->thumb }}">
                        <div class="overlay">
                        </div>
                        <div class="links">
                            <a data-toggle="modal" href="#modal-{{$portfolio->id}}"><i class="icon-eye-open"></i></a><a href="http://nova.loc/images/portfolio/full/{{ json_decode($portfolio->img)->full }}" target="_blank"><i class="icon-link"></i></a>
                        </div>
                    </div>
                    <div class="desc">
                        <h5>{{$portfolio->title}}</h5>
                        <small>{{$portfolio->description}}</small>
                    </div>
                    <div id="modal-{{$portfolio->id}}" class="modal hide fade">
                        <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                        <div class="modal-body">
                            <img src="images/portfolio/full/{{ json_decode($portfolio->img)->full }}" alt=" " width="100%" style="max-height:400px">
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

    </section>
@endsection