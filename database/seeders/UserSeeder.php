<?php

namespace Database\Seeders;

use App\Models\User;
use Laravolt\Avatar\Avatar;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $avatar = new Avatar();
        // $image = time() . ".png";
        // $avatar->create('Budi Rahmat')->save(storage_path('app/public/profile_images/' . $image));
        // $saveImage = "profile_images/" . $image;
        $user = User::create([
            'name' => 'AOC Master',
            'email' => 'aocmaster@example.com',
            'password' => Hash::make('aocmaster@example.com'),
            'image' => null//$saveImage
        ]);
        $role = Role::where('name', 'Super Admin')->first();
        $permissions = Permission::all()->pluck('name')->toArray();
        
        $role->syncPermissions($permissions);
        $user->assignRole($role->id);
    }
}
