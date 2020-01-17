<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class TehsilTableSeeder extends SpreadsheetSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/files/districts.xlsx'; 
        
        $this->table = 'districts';
        $timestamps = TRUE; 
        
        $this->worksheetTableMapping = ['Sheet1' => 'tehsils'];
    }

    public function run()
    {
        DB::disableQueryLog();
	    parent::run();
    }
}
