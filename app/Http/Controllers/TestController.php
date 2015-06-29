<?php namespace Infiniti\Http\Controllers;

use Infiniti\Http\Controllers\Controller;
use Kodeine\Acl\Models\Eloquent\Role;
use Kodeine\Acl\Models\Eloquent\Permission;
use Infiniti\User;

class TestController extends Controller
{

    public function test()
    {
        echo "hello<br>";
$user = User::first();

// create crud permissions
// create.user, view.user, update.user, delete.user
// returns false if alias exists.
$user->addPermission('user');
        echo "Done!!";
    }
}