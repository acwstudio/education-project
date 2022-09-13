<?php

declare(strict_types=1);

namespace App\Services\Api;

use App\Repositories\Api\ProfLevelRepository;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;

final class ProfLevelService
{
    /**
     * @var ProfLevelRepository
     */
    public ProfLevelRepository $profLevelRepository;

    /**
     * @param \App\Repositories\Api\ProfLevelRepository $profLevelRepository
     */
    public function __construct(ProfLevelRepository $profLevelRepository)
    {
        $this->profLevelRepository = $profLevelRepository;
    }

    /**
     * @return QueryBuilder
     */
    public function index(): QueryBuilder
    {
        return $this->profLevelRepository->index();
    }
}
