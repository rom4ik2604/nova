@extends('blog')

@section('articles')
    <div class="blog">
        @if(isset($tag))
            <h2>Tag - {{$tag}}</h2>
            @elseif(isset($category))
            <h2>Category - {{$category}}</h2>
            @elseif(isset($date))
            <h2>Archive - {{\Carbon\Carbon::parse($date)->format('F Y')}}</h2>
            @endif
        @foreach($articles as $article)
            <div class="blog-item well">
                <a href="{{route('blog.index')}}/{{$article->id}}"><h2>{{$article->title}}</h2></a>
                <div class="blog-meta clearfix">
                    <p class="pull-left">
                        <i class="icon-user"></i> by <a href="#">{{$article->user->name}}</a> | <i class="icon-folder-close"></i> Category <a href="{{url('blog?category='.$article->category->name)}}">{{$article->category->name}}</a> | <i class="icon-calendar"></i> {{\Carbon\Carbon::parse($article->updated_at)->format('F jS, Y')}} | <i class="icon-eye-open"></i> <b>{{$article->views}}</b> Views
                    </p>
                    <p class="pull-right"><i class="icon-comment pull"></i> <a href="blog-item.html#comments">{{$article->comments_count}} Comments</a></p>
                </div>
                <p><img src="images/sample/blog1.jpg" width="100%" alt="" /></p>
                <p>{{mb_substr($article->text,0,500)}}...</p>
                <a class="btn btn-link" href="#">Read More <i class="icon-angle-right"></i></a>
            </div>
        @endforeach
        <div class="gap"></div>
        <div class="pagination">
            @if(method_exists($articles,'links'))
                {{ $articles->links() }}
                @endif
        </div>
    </div>
@endsection