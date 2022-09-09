<?php

namespace App\Http\Controllers\Api\ProfGroups;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfGroups\ProfGroupResource;
use App\Models\ProfGroup;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfGroupParentRelatedController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        $parent = ProfGroup::findOrFail($id)->parent;

        return $parent ? (new ProfGroupResource($parent))->response() : response()->json(null, 204);
    }
}
