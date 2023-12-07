<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function getAllAdmins()
    {
        $admins = User::where('is_admin', 1)->get();
        return view("allAdmins")->with("admins", $admins);
    }

    public function createAdmin()
    {
        return view("createAdmin");
    }

    public function updateAdmin(Request $request, $id)
    {


        $admin = User::find($id);
        $input = $request->all();

        if ($input[ "admin"] == "super"){
            DB::table('users')
                ->where('id', $id)
                ->update(['is_super_admin' => 1]);
        }else{
            DB::table('users')
                ->where('id', $id)
                ->update(['is_super_admin' => 0]);
        }



        $admin->update($input);
        return redirect()->route("admin.manage")->with('flash_message', 'student Updated!');
    }

    public function AdminPost(\Illuminate\Http\Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'contact' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'password' => 'required|min:6|confirmed',
            'agree' => 'accepted',
        ]);


        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['contact'] = $request->contact;
        $data['address'] = $request->address;
        $data['password'] = $request->password;
        $data['postal_code'] = $request->postal_code;
        $data['agree'] = $request->has('agree');

        if ($request->admin == "super") {
            $data['is_admin'] = 1;
            $data['is_super_admin'] = 1;
        } else {
            $data['is_admin'] = 1;
            $data['is_super_admin'] = 0;
        }

        $user = User::create($data);


        if (!$user) {
            return redirect(route('admin.manage'))->with('fail', 'Registration failed!');
        }
        return redirect(route('admin.manage'))->with('success', 'Registered Successfully!');
    }

    function getAllUsers()
    {
        $users = User::where('is_admin', 0)->get();
        return view("manageUsers", ['users' => $users]);
    }

    public function editAdmin($id)
    {
        $admins = User::find($id);
        return view("EditAdmin")->with("admins", $admins);
    }

}
