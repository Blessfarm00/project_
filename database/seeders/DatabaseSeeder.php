<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Account;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(10)->create();

        Jurusan::create([
           'nama'=>'Teknologi Informasi'
        ]);
        Jurusan::create([
            'nama'=>'Bahasa Inggris'
        ]);
        
        Kategori::create([
          'nama' =>'Account'
        ]);
        
        Kategori::create([
          'nama' => 'Top-up'
        ]);

        Mahasiswa::factory(20)->create();
        Berita::Factory(10)->create();
        Account::factory(20)->create();

        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
