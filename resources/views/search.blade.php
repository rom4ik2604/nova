@extends('blog')

@section('articles')
    @if($search->isEmpty())
        <h2>Empty result</h2>
    @endif
    <div class="blog">
        @foreach($search as $article)
            <div class="blog-item well">
                <a href="{{route('blog.index')}}/{{$article->id}}"><h2>{{$article->title}}</h2></a>
                <p><img src="images/sample/blog1.jpg" width="100%" alt="" /></p>
                <p>{{mb_substr($article->text,0,500)}}...</p>
                <a class="btn btn-link" href="#">Read More <i class="icon-angle-right"></i></a>
            </div>
        @endforeach
    </div>
@endsection