<?php

namespace App\Http\Controllers\Api\ProfLevels;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfClassifiers\ProfClassifierCollection;
use App\Models\ProfClassifier;
use App\Models\ProfLevel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfLevelProfClassifiersRelatedController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return (new ProfClassifierCollection(ProfLevel::findOrFail($id)->profClassifiers))->response();
    }
}
