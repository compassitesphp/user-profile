@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/emplist" class="btn btn-primary">List of Employee</a>
                    <a href="/dept" class="btn btn-primary">Department</a>
                    <a href="/tech" class="btn btn-primary">Technologies</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
