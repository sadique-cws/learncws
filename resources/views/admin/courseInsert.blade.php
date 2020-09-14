@extends('admin.adminlayout')



@section('courses')

<div class="container">
<div class="row">
<h4>Add Course</h4>
    <form action="{{url('/admin/courses')}}" method="post" class="col s9" enctype="multipart/form-data">
      @csrf
      @if (count($errors))
        @foreach($errors->all() as $error)
          <span style="color:red">{{ $error }}</span>
        @endforeach
      @endif      
      <div class="row">
        <div class="input-field col s12">
          <input id="title" type="text" name="title" class="validate" value="{{ old('title')}}">
          <label for="title">Title</label>
        </div>
      </div>

      <div class="row">
      <div class="input-field col s6">
          <input id="price" type="text" name="price" class="validate">
          <label for="price">Price</label>
        </div>
        <div class="input-field col s6">
          <input id="discount_price" type="text" name="discount_price" class="validate">
          <label for="discount_price">Discounted Price</label>
        </div>
      </div>

      <div class="row">
      <div class="input-field col s6">
          <input id="duration" type="text" name="duration" class="validate">
          <label for="price">Duration</label>
        </div>
        <div class="input-field col s6">
          <input id="instructor" type="text" name="instructor" class="validate">
          <label for="instructor">Instructor</label>
        </div>
      </div>

      <div class="row">
      <div class="input-field col s6">
          <input id="lang" type="text" name="lang" class="validate">
          <label for="lang">Language</label>
        </div>
        <div class="file-field input-field col s6">
          <div class="btn">
            <span>Cover Image</span>
            <input type="file" name="cover_image">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
          <label for="description">Description</label>
        </div>
      </div>

      <div class="row">
        <div class="col s12">
        <input type="submit" class="btn waves-effect waves-light">
        </div>
      </div>
      
      </div>
    </form>
  </div>

  <br>

@endsection()