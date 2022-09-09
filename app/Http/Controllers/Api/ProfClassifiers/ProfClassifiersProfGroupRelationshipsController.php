<?php

namespace App\Http\Controllers\Api\ProfClassifiers;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfGroups\ProfGroupIdentifierResource;
use App\Models\ProfClassifier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfClassifiersProfGroupRelationshipsController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return (new ProfGroupIdentifierResource(ProfClassifier::findOrFail($id)->profGroup))->response();
    }

    public function update()
    {

    }
}
