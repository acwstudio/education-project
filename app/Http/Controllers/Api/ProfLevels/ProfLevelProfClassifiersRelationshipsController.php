<?php

namespace App\Http\Controllers\Api\ProfLevels;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfClassifiers\ProfClassifierIdentifierResource;
use App\Models\ProfLevel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfLevelProfClassifiersRelationshipsController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return (ProfClassifierIdentifierResource::collection(ProfLevel::findOrFail($id)->profClassifiers))->response();
    }

    public function update()
    {

    }
}
