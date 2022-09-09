<?php

namespace App\Http\Controllers\Api\ProfClassifiers;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfLevels\ProfLevelIdentifierResource;
use App\Http\Resources\Api\ProfLevels\ProfLevelResource;
use App\Models\ProfClassifier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfClassifiersProfLevelRelationshipsController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return (new ProfLevelIdentifierResource(ProfClassifier::findOrFail($id)->profLevel))->response();
    }

    public function update()
    {

    }
}
