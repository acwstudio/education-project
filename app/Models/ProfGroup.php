<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfGroup extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['name','code','description','active','slug'];

    const TYPE_RESOURCE = 'profGroup';

    /**
     * @return HasMany
     */
    public function profClassifiers(): HasMany
    {
        return $this->hasMany(ProfClassifier::class);
    }

    /**
     * @return HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany(ProfGroup::class, 'parent_id', 'id');
    }

    /**
     * @return hasOne
     */
    public function parent(): hasOne
    {
        return $this->hasOne(ProfGroup::class,'id', 'parent_id');
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
