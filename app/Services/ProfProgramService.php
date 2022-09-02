<?php

declare(strict_types=1);


namespace App\Services;

use App\Repositories\ProfProgramRepository;
use Spatie\QueryBuilder\QueryBuilder;

final class ProfProgramService
{
    /**
     * @var ProfProgramRepository
     */
    public ProfProgramRepository $profProgramRepository;

    /**
     * @param ProfProgramRepository $profProgramRepository
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
