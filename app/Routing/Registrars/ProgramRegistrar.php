<?php

declare(strict_types=1);

namespace App\Routing\Registrars;

use App\Http\Controllers\Api\ProfClassifierController;
use App\Http\Controllers\Api\ProfGroupController;
use App\Http\Controllers\Api\ProfLevelController;
use App\Http\Controllers\Api\ProfProgramController;
use App\Routing\Contracts\RouteRegistrar;
use Illuminate\Contracts\Routing\Registrar;

final class ProgramRegistrar implements RouteRegistrar
{

    public function map(Registrar $registrar): void
    {
        $registrar->resource('prof-level', ProfLevelController::class);
        $registrar->resource('prof-group', ProfGroupController::class);
        $registrar->resource('prof-program', ProfProgramController::class);
        $registrar->resource('prof-classifier', ProfClassifierController::class);

    }
}
