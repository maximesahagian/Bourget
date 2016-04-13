<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Uploaded extends Controller
{
    public function upload() {
        $file = array('image' => Input::file('image'));
        // setting up rules
        $rules = array('image' => 'required',);
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            return Redirect::to('jeu/profile')->withInput()->withErrors($validator);
        }
        else {
            // checking file is valid.
            if (Input::file('image')->isValid()) {
                $destinationPath = public_path()."/img/profile_pictures";
                $extension = Input::file('image')->getClientOriginalExtension();
                $idAuth = Auth::user()->id;
                $fileName = $idAuth.'.'.$extension;
                if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){
                    Input::file('image')->move($destinationPath, $fileName);
                    Session::flash('success', "L'upload est bien effectué");
                    DB::table('users')
                        ->where('id', $idAuth)
                        ->update(array('imgLink' => $idAuth.".png"));
                    return Redirect::to('jeu/profile');
                }

                else{
                    Session::flash('error', 'Le fichier est invalide, extension incorrecte');
                    return Redirect::to('jeu/profile');
                }

            }
            else {
                Session::flash('error', 'Le fichier est invalide');
                return Redirect::to('jeu/profile');
            }
        }
    }
}
