<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\{
    User, 
    Role,
    Permission
};
Route::get('/', function () {
// admin
    // $admin =  User::whereName('Admin')->with('roles')->first();
    // $admin_role = Role::whereName('admin')->first();

    // $admin->roles()->attach($admin_role);

    // if($admin->hasRole('admin')){
    //  dd('yes this user has admin role');
//  return "This is admin";   
// }

    // dd($admin->toArray());


    // user
    // $user =  User::whereName('user')->with('roles')->first();
    // $user_role = Role::whereName('user')->first();

    // $user->roles()->attach($user_role);

    // if($user->hasRole('user')){
    //     dd('yes this user has user role');
    // }

    // dd($user->toArray());

    // permissions

    // $view_user_permission = Permission::where('name', 'view_user')->first();
    // // dd($add_user_permission);
    // $admin_role = Role::whereName('admin')->with('permissions')->first();

    // $admin_role->permissions()->attach($view_user_permission);
    // dd($admin_role->permissions);

    $view_user_permission = Permission::where('name', 'view_user')->first();

if ($view_user_permission) {
    $admin_role = Role::whereName('admin')->first();

    if ($admin_role) {
        // Attach the permission to the role
        $admin_role->permissions()->attach($view_user_permission);
        
        // Retrieve the permissions associated with the role
        $permissions = $admin_role->permissions()->get();

        // Dump the retrieved permissions
        dd($permissions);
    } else {
        // Handle case where admin role is not found
        dd("Admin role not found");
    }
} else {
    // Handle case where view_user permission is not found
    dd("view_user permission not found");
}

    
});
