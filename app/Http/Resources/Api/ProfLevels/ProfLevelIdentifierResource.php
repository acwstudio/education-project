<?php

namespace App\Http\Resources\Api\ProfLevels;

use App\Models\ProfLevel;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin ProfLevel
 */
class ProfLevelIdentifierResource extends JsonResource
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
            'type' => ProfLevel::TYPE_RESOURCE
        ];
    }
}
