@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Classement</div>

                    <div class="panel-body">
                            {{\App::call('App\Http\Controllers\ClassementController@readScore')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
