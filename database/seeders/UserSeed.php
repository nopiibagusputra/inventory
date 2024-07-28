<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        //buat user admin
        User::truncate();
        User::create([
            'username'      => 'admin@admin.com',
            'password'      => bcrypt('admin'),
            'level_user'    => 'admin',
            'nama_karyawan' => 'Reiki',
            'active'        => 1
        ]);
        User::create([
            'username'      => 'owner@owner.com',
            'password'      => bcrypt('owner'),
            'level_user'    => 'owner',
            'nama_karyawan' => 'Toddi',
            'active'        => 1
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
