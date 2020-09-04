@extends('layout')

@section ('podcast-content')

<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="body-content mt-4  "> 
            <h1 class="header-name">Podcast</h1>
            <p class="mt-4">In 2014, I started Full Stack Radio — a podcast where I talk to people in the software industry about everything from user experience and product design to unit testing and system administration.</p>
            <p>Here are a few of my favorite conversations.</p>
            <ul class="allpages-body">
                @foreach($podcasts as $podcast)
                    <h4 class="mt-5"><a href="">{{$podcast->title}}</a></h4>
                    <p>{{$podcast->body}}</p>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection