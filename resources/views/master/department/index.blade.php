@extends('master.layouts.app')
@section('content')
  <a href="#">Create Department</a>
 <table class="table custom-table">
    <thead>
      <tr>
        <th>Department Name</th>
        <th>Department Head</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($departments as $department)
      <tr>
        <td>{{$department->name}}</td>
        <td>{{$department->position}}</td>
        <td>{{$department->email}}</td>
        <td>{{$department->department}}</td>
        <td><a href="#">view</a>
            <a href="#">Edit</a>
            <a href="#">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection