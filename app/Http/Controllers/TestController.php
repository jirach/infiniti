<?php namespace Infiniti\Http\Controllers;

use Infiniti\Http\Controllers\Controller;
use Kodeine\Acl\Models\Eloquent\Role;

class TestController extends Controller
{

    public function createFirstRole()
    {
        echo "hello";
        $roleAdmin = new Role();
        $roleAdmin->name = 'Admin';
        $roleAdmin->slug = 'administrator';
        $roleAdmin->description = 'INFINITI Wealth Connect admin';
        $roleAdmin->save();
        echo "Done!!";
    }
}