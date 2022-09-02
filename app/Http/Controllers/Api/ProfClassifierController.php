<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfClassifiers\ProfClassifierCollection;
use App\Services\ProfClassifierService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfClassifierController extends Controller
{
    /**
     * @var ProfClassifierService
     */
    private ProfClassifierService $profClassifierService;

    /**
     * @param ProfClassifierService $profClassifierService
     */
    public function __construct(ProfClassifierService $profClassifierService)
    {
        $this->profClassifierService = $profClassifierService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $perPage = $request->get('per_page');

        $profClassifier = $this->profClassifierService->index()->paginate($perPage);

        return(new ProfClassifierCollection($profClassifier))->response();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}