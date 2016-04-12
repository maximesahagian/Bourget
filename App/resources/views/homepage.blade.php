{!! Form::open(array('action' => 'NewsletterController@insert', 'method' => 'post')) !!}
{!! Form::text('email') !!}
{!! Form::submit() !!}
{!! Form::close() !!}