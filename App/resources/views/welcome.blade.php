<?php
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bonjour</div>

                <div class="panel-body">

                    <?
                    echo "<span class='label label-success'>".Session::get('message')."</span>";
                    ?>

                    <h2>Bienvenue sur la page Home</h2>


                    {!! Form::open(array('action' => 'NewsletterController@insert')) !!}
                    {!! Form::email('email') !!}
                    {!! Form::submit() !!}
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
