<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class CreateAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        	'name' => 'admin',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('password')
        ]);
    }
}
