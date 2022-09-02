<?php

declare(strict_types=1);


namespace App\Repositories;

use App\Models\ProfClassifier;
use Spatie\QueryBuilder\QueryBuilder;

final class ProfClassifierRepository
{
    /**
     * @return QueryBuilder
     */
    public function index(): QueryBuilder
    {
        return QueryBuilder::for(ProfClassifier::class)
            ->allowedIncludes([''])
            ->allowedFilters([''])
            ->allowedSorts(['']);
    }
}
