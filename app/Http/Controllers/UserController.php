<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = User::with('userAddresses')->get();

        return view('users.index')->with([
            'data' => $data
        ]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(REQUEST $request)
    {
        $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();

        $userAddress = new UserAddress();
            $userAddress->user_id = $user->id;
            $userAddress->house_number = $request->house_number;
            $userAddress->city = $request->city;
            $userAddress->street = $request->street;
            $userAddress->country_code = $request->country_code;
            $userAddress->save();
        

        return redirect()->route('users.index');
    }

    public function show($user){
        $data = User::where('id', $user)->with('userAddresses')->first();

        return view('users.show')->with([
            'data' => $data
        ]);
    }

    public function edit($user){
        $data = User::where('id', $user)->with('userAddresses')->first();

        return view('users.edit')->with([
            'data' => $data
        ]);
    }

    public function update(REQUEST $request, $user){
        $user = User::where('id', $user)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        /* $user->userAddresses->house_number = $request->house_number;
        $user->userAddresses->city = $request->city; */
        $user->save();

        $address = UserAddress::where('id', $user->id)->first();
        $address->house_number = $request->house_number;
        $address->city = $request->city;
        $address->save();

        return redirect()->route('users.index');
    }

    public function destroy($user){
        User::where('id', $user)->delete();
        UserAddress::where('id', $user)->delete();

        return redirect()->route('users.index');
    }
}

