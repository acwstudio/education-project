<?php

namespace App\Http\Resources\Api\ProfLevels;

use App\Models\ProfLevel;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin ProfLevel
 */
class ProfLevelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'type'       => ProfLevel::TYPE_RESOURCE,
            'attributes' => [
                'name'        => $this->name,
                'description' => $this->description,
                'slug'        => $this->slug,
                'code'        => $this->code,
                'active'      => $this->active,
                'created_at'  => $this->created_at,
                'update_at'  => $this->updated_at,
            ],
            'relationships' => [
                'profClassifiers' => [
                    'links' => [
                        'self' => '',
                        'related' => '',
                    ],
                    'data' => ''
                ]
            ]
        ];
    }
}
