<?php

declare(strict_types=1);


namespace App\Repositories;

use App\Models\ProfProgram;
use Spatie\QueryBuilder\QueryBuilder;

final class ProfProgramRepository
{
    /**
     * @return QueryBuilder
     */
    public function index(): QueryBuilder
    {
        return QueryBuilder::for(ProfProgram::class)
            ->allowedIncludes([''])
            ->allowedFilters([''])
            ->allowedSorts(['']);
    }
}
