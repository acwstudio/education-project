<?php

namespace App\Http\Controllers\Api\ProfPrograms;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfPrograms\ProfProgramCollection;
use App\Services\ProfProgramService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfProgramController extends Controller
{
    /**
     * @var ProfProgramService
     */
    private ProfProgramService $profProgramService;

    /**
     * @param ProfProgramService $profProgramService
     */
    public function __construct(ProfProgramService $profProgramService)
    {
        $this->profProgramService = $profProgramService;
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

        $profProgram = $this->profProgramService->index()->paginate($perPage);

        return (new ProfProgramCollection($profProgram))->response();
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
