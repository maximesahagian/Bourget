<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function __construct($email)
    {

        if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
            DB::table('newsletter')->insert(
                array("email" => $email)
            );
        } else {
            echo "faux";
        }
    }

    public function insert()
    {

        echo Input::post('emmail');

}

}
