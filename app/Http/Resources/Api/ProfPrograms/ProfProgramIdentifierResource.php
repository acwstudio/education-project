<?php

namespace App\Http\Resources\Api\ProfPrograms;

use App\Models\ProfProgram;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin ProfProgram
 */
class ProfProgramIdentifierResource extends JsonResource
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
            'type' => ProfProgram::TYPE_RESOURCE
        ];
    }
}
