@extends('layouts.app')


@section('welcome')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>

<div>
</div>

@endsection 

@include('auth.login')
@include('auth.register')


















