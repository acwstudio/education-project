<?php

namespace App\Http\Resources\Api\ProfClassifiers;

use App\Http\Resources\Api\ProfGroups\ProfGroupResource;
use App\Http\Resources\Api\ProfLevels\ProfLevelResource;
use App\Http\Resources\Api\ProfPrograms\ProfProgramCollection;
use App\Models\ProfClassifier;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin ProfClassifier
 */
class ProfClassifierResource extends JsonResource
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
            'type'       => ProfClassifier::TYPE_RESOURCE,
            'attributes' => [
                'prof_group_id' => $this->prof_group_id,
                'prof_level_id' => $this->prof_level_id,
                'name'          => $this->name,
                'description'   => $this->description,
                'slug'          => $this->slug,
                'code'          => $this->code,
                'isce_2011'     => $this->isce_2011,
                'isce_2013'     => $this->isce_2013,
                'active'        => $this->active,
                'created_at'    => $this->created_at,
                'updated_at'    => $this->updated_at,
            ],
            'relationships' => [
                'profGroup' => [
                    'links' => [
                        'self' => '',
                        'related' => ''
                    ],
                    'data' => new ProfGroupResource($this->whenLoaded('profGroup'))
                ],
                'profLevel' => [
                    'links' => [
                        'self' => '',
                        'related' => ''
                    ],
                    'data' => new ProfLevelResource($this->whenLoaded('profLevel'))
                ],
                'profProgams' => [
                    'links' => [
                        'self' => '',
                        'related' => ''
                    ],
                    'data' => new ProfProgramCollection($this->whenLoaded('profPrograms'))
                ]
            ]
        ];
    }
}
