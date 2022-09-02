<?php

namespace App\Http\Resources\Api\ProfGroups;

use App\Models\ProfGroup;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin ProfGroup
 */
class ProfGroupResource extends JsonResource
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
                        'self' => '', //route('category.relationships.parent', ['id' => $this->id]),
                        'related' => '', // route('category.parent', ['id' => $this->id])
                    ],
                    'data' => new ProfGroupIdentifierResource($this->whenLoaded('parent'))
                ],
                'children' => [
                    'links' => [
                        'self' => '', //route('category.relationships.children', ['id' => $this->id]),
                        'related' => '' //route('category.children', ['id' => $this->id])
                    ],
                    'data' => ProfGroupIdentifierResource::collection($this->whenLoaded('children'))
                ]
            ]
        ];
    }
}
