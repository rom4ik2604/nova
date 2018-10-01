@extends('layout.index')

@section('content')
    <!-- Services Title -->
    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Services</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a> <span class="divider">/</span></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->

    <section class="services">
        <div class="container">
            <div class="row-fluid">
            @foreach($services as $service)
                    <div class="span4">
                        <div class="center">
                            <i style="font-size: 48px" class="{{ $service->icon }} icon-large"></i>
                            <p> </p>
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                @if($service->id%3 == 0)
                </div>
                <div class="row-fluid">
                @endif
            @endforeach
                </div>
            <hr>

            <div class="center">
                <a class="btn btn-primary btn-large" href="#">Request a free quote</a>
            </div>
            <p>&nbsp;</p>

        </div>
    </section>
@endsection