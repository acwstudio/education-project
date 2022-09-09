<?php

namespace App\Http\Controllers\Api\ProfClassifiers;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfPrograms\ProfProgramCollection;
use App\Models\ProfClassifier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfClassifierProfProgramsRelatedController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(int $id): JsonResponse
    {
        return (new ProfProgramCollection(ProfClassifier::findOrFail($id)->profPrograms))->response();
    }
}
