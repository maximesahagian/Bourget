<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class NewsletterController extends Controller
{
    public function __construct(){

    }

    public function insert(){
        $email = Input::get('email');
            DB::table('newsletter')->insert(
                ['email'=> $email]
            );


        return Redirect::back()->withMessage('Vous avez bien été ajouté à la newsletter');
    }
}
