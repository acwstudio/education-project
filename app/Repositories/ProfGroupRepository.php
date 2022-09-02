<?php

declare(strict_types=1);


namespace App\Repositories;

use App\Models\ProfGroup;
use Spatie\QueryBuilder\QueryBuilder;

final class ProfGroupRepository
{
    /**
     * @return QueryBuilder
     */
    public function index(): QueryBuilder
    {
        return QueryBuilder::for(ProfGroup::class)
            ->allowedIncludes([''])
            ->allowedFilters([''])
            ->allowedSorts(['']);
    }
}
