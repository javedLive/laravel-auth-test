@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Hello Everyone
                    Wanna Create Course??
                 {{--BOTH ARE CORRECT YOU CAN USE BOTH ROUTE OR ASSET--}}
                <a href="{{Route('course.index')}}" class="btn btn-warning">Click Here </a> 
                <a href="{{asset('course')}}" class="btn btn-warning">Click Here </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
