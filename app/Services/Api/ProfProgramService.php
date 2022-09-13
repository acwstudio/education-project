<?php

declare(strict_types=1);


namespace App\Services\Api;

use App\Repositories\Api\ProfProgramRepository;
use Spatie\QueryBuilder\QueryBuilder;

final class ProfProgramService
{
    /**
     * @var \App\Repositories\Api\ProfProgramRepository
     */
    public ProfProgramRepository $profProgramRepository;

    /**
     * @param \App\Repositories\Api\ProfProgramRepository $profProgramRepository
     */
    public function __construct(ProfProgramRepository $profProgramRepository)
    {
        $this->profProgramRepository = $profProgramRepository;
    }

    /**
     * @return QueryBuilder
     */
    public function index(): QueryBuilder
    {
        return $this->profProgramRepository->index();
    }
}
