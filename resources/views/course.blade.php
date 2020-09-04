@extends('layout')

@section ('course-content')

<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="body-content mt-4  "> 
            <h1 class="header-name">Courses</h1>
            <p class="mt-4">I started authoring books and courses to help other developers build awesome software in 2016, and these days it's how I make my full-time living.</p>
            <p>Here are the products I've released so far.</p>
            <ul class="allpages-body">
                @foreach($courses as $course)
                    <h4 class="mt-5"><a href="">{{$course->title}}</a></h4>
                    <p>{{$course->body}}</p>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection