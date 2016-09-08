@extends('index')

@section('content')

@include('_common._form')

<hr>

<div class="text-right"><b>All messages:</b> <i class="badge">0</i></div><br>

<div class="messages">
    <div class="panel panel-default">

        <div class="panel-heading">
            <h3 class="panel-title">
                <span>Carlson</span>
                <span class="pull-right label label-info">17:15:00 / 03.07.2015</span>
            </h3>
        </div>

        <div class="panel-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus blanditiis culpa doloribus ea eaque eius ipsam libero maxime molestias nisi, numquam officia officiis omnis provident quo sit veniam voluptatem voluptatibus.<hr>
            <div class="pull-right">
                <a href="#" class="btn btn-info">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
                <button class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i>
                </button>
            </div>
        </div>

    </div>
</div>

@stop