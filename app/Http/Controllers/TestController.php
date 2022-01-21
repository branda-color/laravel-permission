<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class TestController extends Controller
{
    public function test()
    {
        // $a = Role::create(['name' => 'writer']);
        Permission::create(['name' => 'edit articles']);
    }
}
