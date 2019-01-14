@extends('blog')

@section('articles')
    <div class="blog">
        <div class="blog-item well">
            <h2>{{$article->title}}</h2>
            <div class="blog-meta clearfix">
                <p class="pull-left">
                    <i class="icon-user"></i> by <a href="#">{{$article->user->name}}</a> | <i class="icon-folder-close"></i> Category <a href="category?category={{$article->category->name}}">{{$article->category->name}}</a> | <i class="icon-calendar"></i> {{\Carbon\Carbon::parse($article->updated_at)->format('F jS, Y')}} | <i class="icon-eye-open"></i> <b>{{$article->views}}</b> Views
                </p>
                <p class="pull-right"><i class="icon-comment pull"></i> <a href="#comments">{{$article->comments_count}} Comments</a></p>
            </div>
            <p><img src="{{asset('images')}}/sample/blog1.jpg" width="100%" alt="" /></p>
            <p>{{$article->text}}</p>

            <div class="tag">
                @if($article->tags)
                    Tags :
                    @foreach($article->tags as $tag)
                        <a href="{{url('blog?tag='.$tag->name)}}"><span class="label label-success">{{$tag->name}}</span></a>
                    @endforeach
                @endif
            </div>

            <div class="user-info media box">
                <div class="pull-left">
                    <img src="{{asset('images')}}/sample/{{$article->user->avatar}}" alt="" />
                </div>
                <div class="media-body">
                    <h5 style="margin-top: 0">{{$article->user->name}}</h5>
                    <p>{{$article->user->description}}</p>
                    <div class="author-meta">
                        <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>

            <div id="comments" class="comments">

                <h4>{{$article->comments_count}} Comments</h4>
                <div class="comments-list">
                    @foreach($article->comments as $comment)
                        <div class="comment media">
                            <div class="pull-left">
                                <img class="avatar" src="{{asset('images')}}/sample/{{$comment->avatar}}" alt="" />
                            </div>

                            <div class="media-body">
                                <strong>Posted by <a href="#">{{$comment->name}}</a></strong><br>
                                <small>{{\Carbon\Carbon::parse($comment->updated_at)->format('l jS, F Y H:i')}}</small><br>
                                <p>{{$comment->message}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Start Comment Form -->
                <div class="comment-form">
                    <h4>Leave a Comment</h4>
                    <p class="muted">Make sure you enter the (*) required information where indicated. HTML code is not allowed.</p>
                    <form name="comment-form" id="comment-form">
                        <div class="row-fluid">
                            <div class="span4">
                                <input type="text" name="name" required="required" class="input-block-level" placeholder="Name" />
                            </div>
                            <div class="span4">
                                <input type="email" name="email" required="required" class="input-block-level" placeholder="Email" />
                            </div>
                            <div class="span4">
                                <input type="url" name="website" class="input-block-level" placeholder="Website" />
                            </div>
                        </div>
                        <textarea rows="10" name="message" id="message" required="required" class="input-block-level" placeholder="Message"></textarea>
                        <input type="submit" value="Submit Comment" class="btn btn-large btn-primary" />
                    </form>
                </div>
                <!-- End Comment Form -->

            </div>

        </div>
        <!-- End Blog Item -->

    </div>

@endsection