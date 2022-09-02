<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfLevels\ProfLevelCollection;
use App\Services\ProfLevelService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfLevelController extends Controller
{
    /**
     * @var ProfLevelService
     */
    private ProfLevelService $profLevelService;

    /**
     * @param ProfLevelService $profLevelService
     */
    public function __construct(ProfLevelService $profLevelService)
    {
        $this->profLevelService = $profLevelService;
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

        $profLevel = $this->profLevelService->index()->paginate($perPage);

        return (new ProfLevelCollection($profLevel))->response();
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
