<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Form;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function insert()
    {
        $email = Input::get('email');
        if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
            DB::table('newsletter')->insert(
                array("email" => $email)
            );
        } else {
            echo "faux";
        }

        return redirect("/");


    }


}
