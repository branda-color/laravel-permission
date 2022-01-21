<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

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
        /**
         * 創建permission和role
         */
        // Role::create(['name' => 'writer']);
        // $permission = Permission::create(['name' => 'edit post']);
        // $role = Role::findById(1);
        // $permission = Permission::findById(2);

        /**
         * 測試用roles
         */
        // Role::create(['name' => 'editor']);
        // Role::create(['name' => 'publisher']);
        // Role::create(['name' => 'admin']);


        /**
         * 測試用permission
         */

        // $permission = Permission::create(['name' => 'write post']);
        // $permission = Permission::create(['name' => 'edit post']);
        // $permission = Permission::create(['name' => 'publish post']);


        /**
         * 讓role和permission產生連結
         */
        // $role->givePermissionTo($permission);


        /**
         * 測試的role和permission間的關係(詳見google表單)
         * roles_has_permission>>1=1/2=2/3=3/1=4,2=4,3=4
         */

        // $role = Role::findById(4);
        // $permission = Permission::findById(3);
        // $role->givePermissionTo($permission);



        /**
         * 刪除role和permission連結
         */
        // $permission->removeRole($role);

        // $permission->revokePermissionTo($permission);>>這個用不了不知為啥

        /**
         * 在model_has_permission增加資料(對應model)
         */
        // auth()->user()->givePermissionTo('edit post');


        /**
         * 在model_has_roles增加資料(對應model)
         */
        // auth()->user()->assignRole('writer');
        // auth()->user()->assignRole('admin');


        /**
         * 能顯示目前登入用戶的權限
         */
        // return auth()->user()->permissions;
        // return auth()->user()->getDirectpermissions();
        // return auth()->user()->getPermissionsViaRoles();
        // return auth()->user()->getAllpermissions();

        // return User::role('writer')->get();
        // return User::permission('write post')->get();

        /**
         * 刪除單獨用戶的權限
         */

        // return auth()->user()->revokePermissionTo('edit post');
        // return auth()->user()->removeRole('writer');

        return view('home');
    }
}
