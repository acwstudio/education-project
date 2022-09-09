<?php

namespace Database\Seeders;

use App\Models\ProfClassifier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $product = DB::connection('mysql_2')->table('products')->find(500);
        $product = DB::connection('mysql_2')
            ->table('organization_categories')
            ->join('organizations','organization_categories.id', '=', 'organizations.organization_category_id')
            ->select('*')->where('organization_categories.id', '15')->count();

        $product2 = DB::connection('mysql_2')
            ->table('organizations as o')
            ->join('organization_categories as oc','o.id', '=', 'oc.id')
            ->where('oc.id', '=', '11')
            ->select('*')->get();

        $product3 = DB::connection('mysql_2')
            ->select('select name,id from organization_categories where id = ?',[2]);

        dd($product2);

    }
}

