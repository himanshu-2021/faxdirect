<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Super Admin',
               'email'=>'superadmin@faxdirect.com',
                'role'=>'1',
               'password'=> bcrypt('123456'),
            ],
            // [
            //    'name'=>'User',
            //    'email'=>'user@itsolutionstuff.com',
            //     'is_admin'=>'0',
            //    'password'=> bcrypt('123456'),
            // ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
