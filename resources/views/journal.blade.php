@extends('layout')

@section ('journal-content')

<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="body-content mt-4  "> 
            <h1 class="header-name">Work Journal</h1>
            <p class="mt-4">Something new I'm starting for 2019 — every week or two I write about what I've been working on, problems I've solved, and things I'm still trying to figure out. </p>
            <p >If you're interested in following along,<a href="">subscribe to the RSS feed</a>. </p>
            <ul class="allpages-body">
                @foreach($journals as $journal)
                    <p class="mt-5">{{$journal->created_at}}</p>
                    <h4 ><a href="">{{$journal->title}}</a></h4>
                    
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection