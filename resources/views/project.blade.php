@extends('layout')

@section ('project-content')

<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="body-content mt-4  "> 
            <h1 class="header-name">Projects</h1>
            <p class="mt-4">My main focus these days is Tailwind CSS — an open-source utility-first CSS framework for rapidly building custom user interfaces. </p>
            <p>I made the decision to work on it full-time beginning in 2019, and have a lot of plans for continuing to improve the framework, grow the community, and expand the ecosystem. </p>
            <p>Here are some of the other projects I've worked on in the past — some still actively maintained, and others retired or on pause.</p>
            <ul class="allpages-body">
                @foreach($projects as $project)
                    <h4 class="mt-5"><a href="">{{$project->title}}</a></h4>
                    <p>{{$project->body}}</p>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection