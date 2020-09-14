@extends('students.layout')


@section('title',"homepage")



@section('content')


<div class="container">
            <div class="row">
                <div class="col l9">
                    <div class="card grey lighten-4 z-depth-0">
                        <div class="card-content">
                        <h4 class="roboto text-capitalize">{{ $c->title }}</h4>
                        <p class="roboto" style="font-weight: 300">{{ $c->description }}</p>

                        <h6>Created By: {{ $c->instructor }}</h6>

                        <div class="row">
                            <div class="col">
                            <p class="small"><i class="material-icons">access_time</i> {{ $c->updated_at }}</p>
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                        </div>
                        </div>
                    </div>
                </div>

                
                <div class="col l3">
                    <div class="card grey lighten-4 z-depth-0">
                        <div class="card-image">
                        <img src="{{ asset("course/" . $c->cover_image )}}" alt="">
                        </div>
                        <div class="card-content">

                        </div>
                    </div>
                </div>
            </div>
</div>


@endsection()