<?php

namespace App\Http\Controllers\Api\ProfGroups;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfClassifiers\ProfClassifierCollection;
use App\Models\ProfGroup;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfGroupProfClassifiersRelatedController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return (new ProfClassifierCollection(ProfGroup::findOrFail($id)->profClassifiers))->response();
    }
}
