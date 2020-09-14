@extends('admin.adminlayout')



@section('courses')


  <div class="container">
  <h4>Available Courses</h4>
  <table>
        <thead>
          <tr>
              <th>Title</th>
              <th>Duration</th>
              <th>Price/Discount</th>
              <th>Lang</th>
              <th>Instructor</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
        @foreach($courses as $c)
          <tr>
            <td>{{$c->title}}</td>
            <td>{{$c->duration}}</td>
            <td>{{$c->price}} {{$c->discount_price}}</td>
            <td>{{$c->lang}}</td>
            <td>{{$c->instructor}}</td>
            <td><a class="waves-effect waves-light btn">Action</a></td>
          </tr>
          @endforeach()
        </tbody>
      </table>
          </div>  

@endsection()