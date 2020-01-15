<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Driver;

class DriverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $driver = [
            ['name' => 'Tony Stark','icno' => '12312312', 'hpno' => '011234123', 'drivinglicenseno'=>'1231', 'expirydate' => '2019/1/1'],
            ['name' => 'Captain America','icno' => '23423441', 'hpno' => '011234123',  'drivinglicenseno'=>'14323', 'expirydate' => '2019/1/1'],
            ['name' => 'Good Old','icno' => '23457689', 'hpno' => '011234123',  'drivinglicenseno'=>'4554', 'expirydate' => '2019/1/1'],
            ['name' => 'GoodNew','icno' => '43614578', 'hpno' => '011234123',  'drivinglicenseno'=>'3232', 'expirydate' => '2019/1/1'],
            ['name' => 'David Bruce Banner','icno' => '98766565', 'hpno' => '011234123' ,'drivinglicenseno'=>'7675', 'expirydate' => '2019/1/1'],
        ];

        DB::table('drivers')->insert($driver);
    }
}
