<?php

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class DistrictsTableSeeder extends SpreadsheetSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function __construct()
    {
        $this->file = '/database/seeds/files/districts.xlsx'; 
        
        $this->table = 'districts';
        $timestamps = TRUE; 
        
        $this->worksheetTableMapping = ['Sheet1' => 'districts'];
    }

    public function run()
    {
        DB::disableQueryLog();
	    parent::run();
    }
}
