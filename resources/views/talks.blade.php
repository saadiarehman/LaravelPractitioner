@extends('layout')

@section ('talks-content')

<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="body-content mt-4  "> 
            <h1 class="header-name">Talks</h1>
            <p class="mt-4">I gave my first conference talk in 2013 and have spoken at a handful of conferences each year ever since.</p>
            <p>Most of my talks are really just narrated live-coding sessions and don't have many traditional slides. Scary, but it's more fun that way.</p>
            <ul class="allpages-body">
                @foreach($talks as $talk)
                    <h4 class="mt-5"><a href="">{{$talk->title}}</a></h4>
                    <p>{{$talk->body}}</p>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection