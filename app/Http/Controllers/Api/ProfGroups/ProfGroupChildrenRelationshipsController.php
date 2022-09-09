<?php

namespace App\Http\Controllers\Api\ProfGroups;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfGroups\ProfGroupIdentifierResource;
use App\Models\ProfGroup;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfGroupChildrenRelationshipsController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return (ProfGroupIdentifierResource::collection(ProfGroup::findOrFail($id)->children))->response();
    }

    public function update(int $id)
    {

    }
}
