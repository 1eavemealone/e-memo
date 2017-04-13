@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form method="post" action="{{ URL::to('message') }}">
                        {!! csrf_field() !!}
                        Message:
                        <textarea class="form-control" name="message"></textarea>
                        <button class="btn btn-success" type="submit">Post Message</button>
                   	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@section('custom_scripts')
@stop
@stop
