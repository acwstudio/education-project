<?php

declare(strict_types=1);


namespace App\Services\Api;

use App\Repositories\Api\ProfClassifierRepository;
use Spatie\QueryBuilder\QueryBuilder;

final class ProfClassifierService
{
    /**
     * @var ProfClassifierRepository
     */
    public ProfClassifierRepository $profClassifierRepository;

    /**
     * @param ProfClassifierRepository $profClassifierRepository
     */
    public function __construct(ProfClassifierRepository $profClassifierRepository)
    {
        $this->profClassifierRepository = $profClassifierRepository;
    }

    /**
     * @return QueryBuilder
     */
    public function index(): QueryBuilder
    {
        return $this->profClassifierRepository->index();
    }
}
