<?php

namespace App\Http\Controllers\Api\ProfGroups;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfGroups\ProfGroupCollection;
use App\Models\ProfGroup;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfGroupChildrenRelatedController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return (new ProfGroupCollection(ProfGroup::findOrFail($id)->children))->response();
    }
}
