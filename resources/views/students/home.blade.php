@extends('students.layout')


@section('title',"homepage")



@section('content')


<div class="container mt-5">
    <div class="row">
    @foreach($courses as $c)
        <div class="col l3">
            <div class="card z-depth-0">
                <div class="card-image" style="border:1px solid #ddd">
                    <a href="{{ route("single_course",["course_id"=>$c->id])}}" class="stretched-link">
                        <img src={{ asset("course/". $c->cover_image) }}>
                    </a>
                </div>
                <div class="card-content p-2">
                    <div class="small font-weight-bold">{{$c->title}}</div>
                    <p class="small">{{$c->instructor}}</p>
                    <p class="font-weight-bold small mt-1">{{$c->discount_price}} <del class="grey-text">{{$c->price}}</del></p>
                    <span class="badge green darken-3 mt-1 white-text">New</span>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>


@endsection()