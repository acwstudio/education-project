<?php

namespace App\Imports;

use App\Models\ProfClassifier;
use App\Models\ProfGroup;
use App\Models\ProfLevel;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ClassifierImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        $prepareCollection = $this->prepareCollection($collection);
        $areaCollection = $this->getAreaCollection($collection);
        $groupCollection = $this->getGroupCollection($prepareCollection);
        $classifierCollection = $this->getClassifierCollection($prepareCollection);

        foreach ($areaCollection as $item) {

            ProfGroup::create([
                'name' => $item[1],
                'description' => 'Область образования, установленная Порядком формирования перечней
                профессий, специальностей и направлений подготовки, утвержденным приказом Министерства
                образования и науки Российской Федерации от 12 сентября 2013 г. N1059',
                'code' => $item[0],
                'slug' => SlugService::createSlug(ProfGroup::class, 'slug', $item[1]),
                'active' => true,
                'created_at' => now()
            ]);
        }

        foreach ($groupCollection as $item) {

            $area = ProfGroup::where('code', substr($item[0], 0, 1));

            ProfGroup::create([
                'parent_id' => $area->first()->id,
                'name' => $item[1],
                'description' => 'укрупненная группа, установленная приказами Министерства образования
                и науки Российской Федерации от 12 сентября 2013 г. N 1061 "Об утверждении перечней
                специальностей и направлений подготовки высшего образования" и от 29октября 2013 г.
                N 1199 "Об утверждении перечней профессий и специальностей среднего профессионального
                образования"',
                'code' => $item[0],
                'slug' => SlugService::createSlug(ProfGroup::class, 'slug', $item[1]),
                'active' => true,
                'created_at' => now()
            ]);
        }

        foreach ($classifierCollection as $item) {

            $group = ProfGroup::where('code', substr($item[0], 0, 4) . '.00.00');
            $level = ProfLevel::where('code', $item['code-level']);

            ProfClassifier::create([
                'prof_group_id' => $group->first()->id,
                'prof_level_id' => $level->first()->id,
                'name' => $item['name'],
                'description' => $level->first()->description,
                'slug' => SlugService::createSlug(ProfClassifier::class, 'slug', $item[1]),
                'code' => $item['code'],
                'isce-2011' => $item['isce-2011'],
                'isce-2013' => $item['isce-2013'],
                'active' => true,
                'created_at' => now()
            ]);

        }
    }

    private function prepareCollection(Collection $collection): Collection
    {
        $preparedCollection = $collection->filter(function ($item) {
            return !is_null($item[0]);
        })
            ->filter(function ($item) {
                return strlen($item[0]) > 1;
            });

        $preparedCollection->map(function ($item, $key) {

            $codeArr = explode('.', $item[0]);

            $item['code'] = $item[0];
            $item['name'] = $item[1];
            $item['isce-2011'] = $item[2];
            $item['isce-2013'] = $item[3];
            $item['code-area'] = $codeArr[0];
            $item['code-group'] = $codeArr[1];
            $item['code-level'] = $codeArr[2];
            $item['code-item'] = $codeArr[3];

        });

        return $preparedCollection;
    }

    private function getAreaCollection(Collection $collection): Collection
    {
        $areaCollection = $collection->filter(function ($item) {
            return strlen($item[0]) === 1;
        })->unique()->sort();

        return $areaCollection;
    }

    private function getGroupCollection(Collection $collection)
    {
        $groupCollection = $collection->filter(function ($item) {
            return substr_compare($item[0], '.00.00', 4,) === 0;
        })->unique();

        return $groupCollection;
    }

    private function getClassifierCollection(Collection $collection)
    {
        $classifierCollection = $collection->filter(function ($item) {
            return substr_compare($item[0], '.00.00', 4,) !== 0;
        });

        return $classifierCollection;
    }

}
