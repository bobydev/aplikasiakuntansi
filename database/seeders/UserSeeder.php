<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->username = "admin";
        $user->name = "Administrator";
        $user->email = "adminpa1@bsi.ac.id";
        $user->roles = json_encode(["ADMIN"]);
        $user->password = \Hash::make("admin");
        $user->phone = "081289199303";
        $user->address = "Jl. Raya Jatiwaringin No. 101";
        $user->status = "ACTIVE";
        $user->save();
        $this->command->info("User Admin berhasil di-insert");
    }
}
