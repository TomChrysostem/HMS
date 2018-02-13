@extends('admin.layouts.app')
@section('content')
  <a href="{{route('staff.create')}}">Create Staff</a>
 <table class="table custom-table">
    <thead>
      <tr>
        <th>Staff_Name</th>
        <th>Position</th>
        <th>Email</th>
        <th>Department</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($staffs as $staff)
      <tr>
        <td>{{$staff->name}}</td>
        <td>{{$staff->position}}</td>
        <td>{{$staff->email}}</td>
        <td>{{$staff->department}}</td>
        <td><a href="{{route('staff.view',$staff->id)}}">view</a>
            <a href="{{route('staff.edit',$staff->id)}}">Edit</a>
            <a href="{{route('staff.delete',$staff->id)}}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection