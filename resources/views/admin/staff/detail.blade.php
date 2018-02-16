@extends('admin.layouts.app')

@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Staff</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('staff.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $staff->name}}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Position:</strong>

                {{ $staff->position}}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                {{ $staff->email}}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Department:</strong>

                {{ $staff->department}}

            </div>

        </div>

    </div>
@endsection