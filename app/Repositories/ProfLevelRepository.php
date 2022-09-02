<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\ProfLevel;
use Spatie\QueryBuilder\QueryBuilder;

final class ProfLevelRepository
{
    /**
     * @return QueryBuilder
     */
    public function index(): QueryBuilder
    {
        return QueryBuilder::for(ProfLevel::class)
            ->allowedIncludes(['profClassifiers'])
            ->allowedFilters(['name','code'])
            ->allowedSorts(['id','name','code']);
    }

    public function store()
    {

    }

    /**
     * @param int $id
     * @return QueryBuilder
     */
    public function show(int $id): QueryBuilder
    {
        return QueryBuilder::for(ProfLevel::class)
            ->where('id', $id)
            ->allowedIncludes(['profClassifiers']);
    }
}
