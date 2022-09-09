<?php

namespace App\Http\Controllers\Api\ProfGroups;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfGroups\ProfGroupIdentifierResource;
use App\Models\ProfGroup;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfGroupParentRelationshipsController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        $parent = ProfGroup::findOrFail($id)->parent;
//        dd($parent);
        return $parent ? (new ProfGroupIdentifierResource($parent))->response() : response()->json(null, 204);
    }

    public function update(int $id)
    {

    }
}
