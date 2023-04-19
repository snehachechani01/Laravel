<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        
        DB::table('tasks')->insert([
            
            'Title'=>'Sneha',
            'Description'=>'Sneha.chechaniSigmainfo.net',
          

        ]);
    }
    
}
