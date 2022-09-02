<?php

namespace App\Http\Resources\Api\ProfGroups;

use App\Models\ProfGroup;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin ProfGroup
 */
class ProfGroupIdentifierResource extends JsonResource
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
            'id' => $this->id,
            'type' => ProfGroup::TYPE_RESOURCE
        ];
    }
}
