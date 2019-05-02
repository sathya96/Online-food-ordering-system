<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function usersAccount() {

        $users = User::get();
        return view('user_account')->with('users', $users);
    }
    public function adminsAccount() {
        $admins = Admin::get();
        return view('admin_account')->with('admins', $admins);
    }
    public function staffsAccount() {
        return view('staff_account');
    }
    public function adminProduct() {
        return view('admin_product');
    }

    public function viewEditUser($userId) {

        $user = User::where('id', '=', $userId)->get();
        return view('view_edit_user')->with('user', $user);
    }
    public function viewEditAdmin($adminId) {

        $admin = Admin::where('id', '=', $adminId)->get();
        return view('view_edit_admin')->with('admin', $admin);
    }

    public function editUser (Request $req){
        $user = User::where('id', '=', $req->input('id'))->first();
        $user->email = $req->input('email'); ;
        $user->name = $req->input('name');;
        $user->save();
        echo '<script type="text/javascript">'; 
    echo 'alert("Users Data Have been Updated!");'; 
    echo 'window.location.href = "/usersaccount";';
    echo '</script>';
    
    }
    public function editAdmin (Request $req){
        $admin = Admin::where('id', '=', $req->input('id'))->first();
        $admin->email = $req->input('email'); ;
        $admin->name = $req->input('name');;
        $admin->save();
        echo '<script type="text/javascript">'; 
    echo 'alert("Admin Data Have been Updated!");';
    echo 'window.location.href = "/adminsaccount";';
    echo '</script>';
    
    }
    public function deleteUser ($userId){
        $user = User::find($userId);
        $user->delete();
        echo '<script type="text/javascript">'; 
    echo 'alert("User Data have been Deleted");'; 
    echo 'window.location.href = "/usersaccount";';
    echo '</script>';
    
    }
    public function deleteAdmin ($adminId){
        $admin = Admin::find($adminId);
        $admin->delete();
        echo '<script type="text/javascript">'; 
    echo 'alert("User Data have been Deleted");'; 
    echo 'window.location.href = "/adminsaccount";';
    echo '</script>';
    
    }
}
