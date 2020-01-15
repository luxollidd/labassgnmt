<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Owner;

class OwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owners = [
            ['name' => 'Tony Stark','email' => 'ironman@avangers.com' ],
            ['name' => 'Captain America','email' => 'ironman@avangers.com'],
            ['name' => 'Tony Stark','email' => 'ironman@avangers.com'],
            ['name' => 'Captain America','email' => 'captain@avangers.com'],
            ['name' => 'David Bruce Banner','email' => 'hulk@avangers.com'],
        ];

        DB::table('owners')->insert($owners);

            $cars= [
                ['RegNum' => 'WWW888','Manufacturer'=>'Ferari','Model'=> 'F30','YearMade' => 1998,'owner_id' => 1],
                ['RegNum' => 'AAA1234','Manufacturer'=>'Volvo','Model'=> '940T','YearMade' => 1997,'owner_id' => 1],
                ['RegNum' => 'BCD9999','Manufacturer'=>'Proton','Model'=> 'Saga','YearMade' => 2000,'owner_id' => 2],
            ];
        
        DB::table('cars')->insert($cars);

    }
}
