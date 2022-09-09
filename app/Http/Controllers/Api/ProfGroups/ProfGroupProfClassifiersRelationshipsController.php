<?php

namespace App\Http\Controllers\Api\ProfGroups;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfClassifiers\ProfClassifierIdentifierResource;
use App\Models\ProfGroup;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfGroupProfClassifiersRelationshipsController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return (ProfClassifierIdentifierResource::collection(ProfGroup::findOrFail($id)->profClassifiers))->response();
    }

    public function update(int $id)
    {

    }
}
