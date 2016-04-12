<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{

public $email;
    public function __construct($email){
        $this->email = $email;
        DB::table('newsletter')->insert(
          array("email" => $email)
        );
    }


}