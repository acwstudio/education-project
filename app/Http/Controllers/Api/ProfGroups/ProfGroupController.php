<?php

namespace App\Http\Controllers\Api\ProfGroups;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfGroups\ProfGroupCollection;
use App\Models\ProfGroup;
use App\Services\ProfGroupService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfGroupController extends Controller
{
    /**
     * @var ProfGroupService
     */
    private ProfGroupService $profGroupService;

    /**
     * @param ProfGroupService $profGroupService
     */
    public function __construct(ProfGroupService $profGroupService)
    {
        $this->profGroupService = $profGroupService;
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

        $profGroup = $this->profGroupService->index()->paginate($perPage);

        return (new ProfGroupCollection($profGroup))->response();
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
