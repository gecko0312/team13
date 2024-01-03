<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user=new User();
        $user->password= Hash::make('1234');
        $user->email='admin@example.com';
        $user->name='Admin';
        $user->role=User::role_admin;
        $user->save();

        $user=new User();
        $user->password= Hash::make('1234');
        $user->email='manager@example.com';
        $user->name='Manager';
        $user->role=User::role_manager;
        $user->save();

        $user=new User();
        $user->password= Hash::make('1234');
        $user->email='user@example.com';
        $user->name='User';
        $user->role=User::role_user;
        $user->save();


        $this->call(MonitorsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);

    }
}
