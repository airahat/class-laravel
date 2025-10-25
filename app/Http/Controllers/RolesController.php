<?php 
namespace App\Http\Controllers;
use App\Models\Roles;

class RolesController extends Controller
{

    public function index() {  
        $roles = Roles::all();
        return view('pages.roles.index', compact('roles'));
    
    }
    public function show($id) {  
        $role = Roles::find($id);
        return view('pages.roles.show', compact('role'));
    }




}