<?php

namespace Database\Seeders;

use App\Imports\ClassifierImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ProfClassifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prof_groups')->truncate();
        DB::table('prof_classifiers')->truncate();

        Excel::import(new ClassifierImport, 'public/okso.xlsx');
    }
}
