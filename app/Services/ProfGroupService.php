<?php

declare(strict_types=1);


namespace App\Services;

use App\Repositories\ProfGroupRepository;
use Spatie\QueryBuilder\QueryBuilder;

final class ProfGroupService
{
    /**
     * @var ProfGroupRepository
     */
    public ProfGroupRepository $profGroupRepository;

    /**
     * @param ProfGroupRepository $profGroupRepository
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
