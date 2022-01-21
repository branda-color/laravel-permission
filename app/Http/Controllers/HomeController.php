<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name' => 'poster']);
        // $permission = Permission::create(['name' => 'edit post']);
        $role = Role::findById(1);
        $permission = Permission::findById(1);

        /**
         * 讓role和permission產生連結
         */
        // $role->givePermissionTo($permission);


        /**
         * 刪除role和permission連結
         */
        // $permission->removeRole($role);

        // $permission->revokePermissionTo($permission);>>這個用不了不知為啥


        return view('home');
    }
}
