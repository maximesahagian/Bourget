<?php
$email = $name = $request->email;

$emailAdd = new App\Http\Controllers\NewsletterController($email);