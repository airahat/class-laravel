<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\User;


class UserController extends Controller
{
            public function index() {
            $users = User::from("users as u")
            ->select("u.id", "u.first_name","u.email", "u.role_id", "r.name as role")
            ->join("roles as r", "u.role_id", "=", "r.id")
            
            ->orderBy("u.id", "desc")
            ->paginate(10);
            // dd($users);
            return view("admin.pages.users.index", compact("users"));
        }
        //     public function index() {
        //     $users = User::from("users as u")
        //     ->select("u.id", "u.first_name","u.email", "u.role_id", "r.name as role")
        //     ->join("roles as r", "u.role_id", "=", "r.id")
            
        //     ->orderBy("u.id", "desc")
        //     ->get();
        //     // dd($users);
        //     return view("admin.pages.users.index", compact("users"));
        // }
        //     public function index() {
        //     $users = User::select("users.id", "users.first_name", "users.role_id", "roles.name")
        //     ->join("roles", "users.role_id", "=", "roles.id")
        //     ->where("users.role_id", 3)
        //     ->orderBy("users.id", "desc")
        //     ->get();
        //     dd($users);
        // }
        //     public function index() {
        //     $users = DB::table("users as u")
        //     ->select("u.id", "u.first_name", "u.role_id", "r.name as role")
        //     ->join("roles as r", "u.role_id", "=", "r.id")
        //     ->where("u.role_id", 3)
        //     ->orderBy("u.id", "desc")
        //     ->get();
        //     dd($users);
        // }


        public function show($id) {
            // $user = User::find($id);
            $user = User::select("u.id", "u.first_name","u.email", "u.role_id", "r.name as role")
            ->from("users as u")
            ->join("roles as r", "u.role_id", "=", "r.id")
            ->where("u.id", $id)
            ->orderBy("u.id", "desc")
            ->first();
            return view('admin.pages.users.show', compact("user"));
            // return view('pages.about');
        }



}
