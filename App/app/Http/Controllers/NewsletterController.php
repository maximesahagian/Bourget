<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{

    public function __construct()
    {

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
