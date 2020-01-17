<?php

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class CuisineFacilitiesTableSeeder extends SpreadsheetSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function __construct()
    {
        $this->file = '/database/seeds/files/districts.xlsx'; 
        
        //$this->tablename = 'tehsils';
        $timestamps = TRUE; 
        
        $this->worksheetTableMapping = ['facilities' => 'facilities',
                                        'cuisine'=> 'cuisine',
                                        'rcuisine' => 'rcuisine',
                                        'rfacilities'=> 'rfacilities'
        ];
    }

    public function run()
    {
        DB::disableQueryLog();
	    parent::run();
    }
}
