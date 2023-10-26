<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SqlController extends Controller
{
    public function deleteUsers(){
        $sql = User::where('name','!=', "")->delete();
        if($sql){
            echo "Success: All users has been deleted!";
        }
    }
    public function updateLightMode($userID, $mode){
        User::where('id', $userID)->update(['lightMode' => $mode]);
    }
}
