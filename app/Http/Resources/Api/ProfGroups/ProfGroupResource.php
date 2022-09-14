<?php

namespace App\Http\Resources\Api\ProfGroups;

use App\Http\Resources\Api\ProfClassifiers\ProfClassifierCollection;
use App\Http\Resources\Api\ProfClassifiers\ProfClassifierIdentifierResource;
use App\Http\Resources\Api\ProfClassifiers\ProfClassifierResource;
use App\Http\Resources\Concerns\IncludeRelatedEntitiesResourceTrait;
use App\Models\ProfGroup;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin ProfGroup
 */
class ProfGroupResource extends JsonResource
{
    use IncludeRelatedEntitiesResourceTrait;

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
            'type'       => ProfGroup::TYPE_RESOURCE,
            'attributes' => [
                'parent_id'   => $this->parent_id,
                'name'        => $this->name,
                'description' => $this->description,
                'slug'        => $this->slug,
                'code'        => $this->code,
                'active'      => $this->avtive,
                'created_at'  => $this->created_at,
                'updated_at'  => $this->updated_at,
            ],
            'relationships' => [
                'parent' => [
                    'links' => [
                        'self' => route('prof-group.relationships.parent', ['id' => $this->id]),
                        'related' => route('prof-group.parent', ['id' => $this->id])
                    ],
                    'data' => new ProfGroupIdentifierResource($this->whenLoaded('parent'))
                ],
                'children' => [
                    'links' => [
                        'self' => route('prof-group.relationships.children', ['id' => $this->id]),
                        'related' => route('prof-group.children', ['id' => $this->id])
                    ],
                    'data' => ProfGroupIdentifierResource::collection($this->whenLoaded('children'))
                ],
                'classifiers' => [
                    'links' => [
                        'self' => route('prof-group.relationships.prof-classifiers', ['id' => $this->id]),
                        'related' => route('prof-group.prof-classifiers', ['id' => $this->id])
                    ],
                    'data' => ProfClassifierIdentifierResource::collection($this->whenLoaded('classifiers'))
                ]
            ]
        ];
    }

    protected function relations(): array
    {
        $relations = [
            ProfClassifierCollection::class   => $this->whenLoaded('profClassifiers'),
            ProfGroupResource::class          => $this->whenLoaded('parent'),
            ProfGroupCollection::class        => $this->whenLoaded('children'),
        ];

        return $relations;
    }
}
