<?php

namespace App\Http\Resources\Api\ProfPrograms;

use App\Models\ProfProgram;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin ProfProgram
 */
class ProfProgramResource extends JsonResource
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
            'type' => ProfProgram::TYPE_RESOURCE,
            'relationships' => [
                'organization_id' => $this->organization_id,
                'is_moderated' => $this->is_moderated,
                'is_published' => $this->is_published,
                'name' => $this->name,
                'description' => $this->description,
                'slug' => $this->slug,
                'price' => $this->price,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ]
        ];
    }
}
