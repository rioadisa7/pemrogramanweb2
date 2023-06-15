<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// import model member
use App\Models\Member;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat data sampel
        Member::create([
            'name' => 'Rio Adi',
            'email' => 'rioadi07@gmail.com',
            'gender' => 'Pria',
            'status' => 'Mahasiswa',
            'address' => 'Depok',
        ]);
    }
}
