@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bonjour</div>

                <div class="panel-body">
                    Voilà la page Home
                    {!! Form::open(array('action' => 'HomeController@insert', 'method' => 'post')) !!}
                    {!! Form::text('email') !!}
                    {!! Form::submit() !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
