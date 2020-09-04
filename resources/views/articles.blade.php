@extends('layout')

@section ('article-content')

<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="body-content mt-4  "> 
            <h1 class="header-name">Articles</h1>
            <p class="mt-4">Over the years I’ve published a few dozen articles — some more noteworthy than others.  </p>
            <p>Here are some of my personal favorites.</p>
            <ul class="allpages-body">
                @foreach($articles as $article)
                    <h4 class="mt-5"><a href="">{{$article->title}}</a></h4>
                    <p>{{$article->body}}</p>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection