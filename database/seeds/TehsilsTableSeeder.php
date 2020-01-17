<?php

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class TehsilsTableSeeder extends SpreadsheetSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->file = '/database/seeds/files/districts.xlsx'; 
        
        $this->tablename = 'tehsils';
        $timestamps = TRUE; 
        
        $this->worksheetTableMapping = ['tehsils' => 'tehsils'];
    }

    public function run()
    {
        DB::disableQueryLog();
	    parent::run();
    }
}
