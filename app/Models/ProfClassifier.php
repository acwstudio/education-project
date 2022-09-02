<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfClassifier extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    const TYPE_RESOURCE = 'profClassifier';

    protected $fillable = [
        'prof_group_id','prof_level_id','prof_classifier_id','name','description','slug',
        'isce-2011','code','active',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
