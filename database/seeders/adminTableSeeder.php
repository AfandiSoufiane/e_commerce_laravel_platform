<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


class adminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin1 = new User;

        $admin1->name = 'polat';
        $admin1->is_admin = 1;
        $admin1->avatar = 'avatar/polat.jpg';
        $admin1->email = 'polat@gmail.com';
        $admin1->phone = '0637978584';
        $admin1->location = 'Casablanca Morocco';
        $admin1->email_verified_at = now();
        $admin1->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $admin1->remember_token = Str::random(10);
        $admin1->save(); 
    }
}
