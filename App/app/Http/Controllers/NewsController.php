<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 12/04/2016
 * Time: 1:43 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class NewsController
{
    public function __construct()
    {
    }

    public function insert(){
        DB::table('newsletter')->insert(
            ['email' => "Salut"]
        );

        return redirect('/');
    }

}