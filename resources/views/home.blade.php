@extends('layouts.app')
@section('title','home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! <a href="{{ url('/users') }}"> Users </a>
                </div>
               
            </div>
        </div>
    </div>
    
</div>
@endsection
