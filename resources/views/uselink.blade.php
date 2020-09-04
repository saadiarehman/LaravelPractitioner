

@extends('layout')

@section ('uselink-content')

<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="body-content mt-4  "> 
            <h1 class="header-name">Uses</h1>
            <p class="mt-4">I get a lot of questions about the tools I use for different parts of my work, so inspired by my friend Wes Bos, I've put together this "uses" page that covers every part of my setup.</p>
            <p>A few of the links below are affiliate links which means I get paid or rewarded in some way if you use them to purchase, but rest assured these are all tools and services I actually use.</p>
            <ul class="allpages-body">
                @foreach($uselinks as $uselink)
                    <h3 class="mt-5 ">{{$uselink->name}}</h3>
                    <li ><a href="">{{$uselink->title}}</a></li>
                    <p>{{$uselink->body}}{{$uselink->body}}</p>
                    
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection