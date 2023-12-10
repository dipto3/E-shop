<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Admin::where('email','diptoguho4@gmail.com')->first();
        if(is_null($user)){
            $user = new Admin();
            $user->name = "Piyal Guho Dipto";
            $user->email = "diptoguho4@gmail.com";
            $user->password = Hash::make('12345678');
            
            $user->save();
        }
    }
}
