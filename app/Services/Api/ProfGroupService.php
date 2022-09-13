<?php

declare(strict_types=1);


namespace App\Services\Api;

use App\Repositories\Api\ProfGroupRepository;
use Spatie\QueryBuilder\QueryBuilder;

final class ProfGroupService
{
    /**
     * @var \App\Repositories\Api\ProfGroupRepository
     */
    public ProfGroupRepository $profGroupRepository;

    /**
     * @param \App\Repositories\Api\ProfGroupRepository $profGroupRepository
     */
    public function __construct(ProfGroupRepository $profGroupRepository)
    {
        $this->profGroupRepository = $profGroupRepository;
    }

    /**
     * @return QueryBuilder
     */
    public function index(): QueryBuilder
    {
        return $this->profGroupRepository->index();
    }
}
