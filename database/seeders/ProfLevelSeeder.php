<?php

namespace Database\Seeders;

use App\Models\ProfLevel;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prof_levels')->truncate();

        $levels = config('data-seed.prof-levels');
        
        foreach ($levels as $key=>$level) {
            DB::table('prof_levels')->insert([
                'name'        => $level['name'],
                'description' => $level['description'],
                'slug'        => SlugService::createSlug(ProfLevel::class, 'slug', $level['name']),
                'code'        => $level['code'],
                'created_at'  => now(),
            ]);
        }
    }
}
