<?php

namespace App\Http\Resources\Api\ProfClassifiers;

use App\Models\ProfClassifier;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin ProfClassifier
 */
class ProfClassifierIdentifierResource extends JsonResource
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
            'type' => ProfClassifier::TYPE_RESOURCE
        ];
    }
}
