@extends('layout.index')

@section('content')
    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Blog</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->

    <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span8">
                @yield('articles')
            </div>
            <aside class="span4">
                <div class="widget search">
                    <form action="{{route('search')}}" method="get">
                        <input type="text" class="input-block-level" name="search" placeholder="Search">
                    </form>
                </div>
                <!-- /.search -->

                <div class="widget ads">
                    <div class="row-fluid">
                        <div class="span6">
                            {{--<a href="#"><img src="{{asset('images')}}/ads/ad1.png" alt=""></a>--}}
                        </div>

                        <div class="span6">
                            {{--<a href="#"><img src="{{asset('images')}}/ads/ad2.png" alt=""></a>--}}
                        </div>
                    </div>
                    <p> </p>
                    <div class="row-fluid">
                        <div class="span6">
                            {{--<a href="#"><img src="{{asset('images')}}/ads/ad3.png" alt=""></a>--}}
                        </div>

                        <div class="span6">
                            {{--<a href="#"><img src="{{asset('images')}}/ads/ad4.png" alt=""></a>--}}
                        </div>
                    </div>
                </div>
                <!-- /.ads -->

                <div class="widget widget-popular">
                    <h3>Popular Posts</h3>
                    <div class="widget-blog-items">
                        @foreach($popular_post as $post)
                            <div class="widget-blog-item media">
                                <div class="pull-left">
                                    <div class="date">
                                        <span class="month"> {{\Carbon\Carbon::parse($post->updated_at)->format('M')}} </span>
                                        <span class="day">{{\Carbon\Carbon::parse($post->updated_at)->day}}</span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <a href="{{route('blog.index')}}/{{$post->id}}"><h5>{{$post->title}}</h5></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- End Popular Posts -->

                <div class="widget">
                    <h3>Blog Categories</h3>
                    <div>
                        <div class="row-fluid">
                            <div class="span6">
                                <ul class="unstyled">
                                    @foreach($categories as $category)
                                        <li><a href="{{url('blog?category='.$category->name)}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Category Widget -->

                <div class="widget">
                    <h3>Tag Cloud</h3>
                    <ul class="tag-cloud unstyled">
                        @foreach($tags as $tag)
                            <li><a class="btn btn-mini btn-primary" href="{{url('blog?tag='.$tag->name)}}">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- End Tag Cloud Widget -->

                <div class="widget">
                    <h3>Archive</h3>
                    <ul class="archive arrow">
                        @foreach($archive as $item)
                            <li><a href="{{url('blog?archive='.mb_strtolower(\Carbon\Carbon::parse($item->totalDate.'-01 00:00:00')->format('F-Y')))}}">{{\Carbon\Carbon::parse($item->totalDate.'-01 00:00:00')->format('F Y') }} ({{$item->totalCount}})</a></li>
                            @endforeach
                    </ul>
                </div>
                <!-- End Archive Widget -->

            </aside>
        </div>

    </section>
@endsection