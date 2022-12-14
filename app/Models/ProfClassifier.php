<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
     * @return BelongsTo
     */
    public function profLevel(): BelongsTo
    {
        return $this->belongsTo(ProfLevel::class);
    }

    /**
     * @return BelongsTo
     */
    public function profGroup(): BelongsTo
    {
        return $this->belongsTo(ProfGroup::class);
    }

    /**
     * @return HasMany
     */
    public function profPrograms(): HasMany
    {
        return $this->hasMany(ProfProgram::class);
    }

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
