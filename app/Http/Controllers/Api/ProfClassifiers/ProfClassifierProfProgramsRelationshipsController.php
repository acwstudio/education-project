<?php

namespace App\Http\Controllers\Api\ProfClassifiers;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfPrograms\ProfProgramIdentifierResource;
use App\Models\ProfClassifier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfClassifierProfProgramsRelationshipsController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return (ProfProgramIdentifierResource::collection(ProfClassifier::findOrFail($id)->profPrograms))->response();
    }

    public function update($id)
    {

    }
}
