<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function getUsers() {
        echo json_encode(Users::all());
    }

    
    public function addUser(Request $request) {
        $insertedData = Users::create(
            [
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role' => $request->input('role')
            ]
        );
        echo json_encode(
            [
                'status_code' => 200,
                'inserted_data' => $insertedData
            ]
        );
    }


    public function deleteUser(Request $request) {
        $status = Users::find($request->input('user_id'))->delete();
        if($status) {
            echo json_encode([
                'status_code' => 200
            ]);
        }
    }

    public function updateUser(Request $request) {
        $status = Users::find($request->input('user_id'))->update($request->input());
        echo json_encode(
            [
                'status_code' => 200
            ]
        );
    }

}
