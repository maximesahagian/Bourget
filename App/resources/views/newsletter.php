<?php
$email = \Illuminate\Support\Facades\Input::get('email');

$emailAdd = new \App\Http\Controllers\NewsletterController($email);