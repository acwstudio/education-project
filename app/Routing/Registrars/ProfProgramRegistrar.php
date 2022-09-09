<?php

declare(strict_types=1);

namespace App\Routing\Registrars;

use App\Http\Controllers\Api\ProfClassifiers\ProfClassifierController;
use App\Http\Controllers\Api\ProfClassifiers\ProfClassifierProfProgramsRelatedController;
use App\Http\Controllers\Api\ProfClassifiers\ProfClassifierProfProgramsRelationshipsController;
use App\Http\Controllers\Api\ProfClassifiers\ProfClassifiersProfGroupRelatedController;
use App\Http\Controllers\Api\ProfClassifiers\ProfClassifiersProfGroupRelationshipsController;
use App\Http\Controllers\Api\ProfClassifiers\ProfClassifiersProfLevelRelatedController;
use App\Http\Controllers\Api\ProfClassifiers\ProfClassifiersProfLevelRelationshipsController;
use App\Http\Controllers\Api\ProfGroups\ProfGroupChildrenRelatedController;
use App\Http\Controllers\Api\ProfGroups\ProfGroupChildrenRelationshipsController;
use App\Http\Controllers\Api\ProfGroups\ProfGroupController;
use App\Http\Controllers\Api\ProfGroups\ProfGroupParentRelatedController;
use App\Http\Controllers\Api\ProfGroups\ProfGroupParentRelationshipsController;
use App\Http\Controllers\Api\ProfGroups\ProfGroupProfClassifiersRelatedController;
use App\Http\Controllers\Api\ProfGroups\ProfGroupProfClassifiersRelationshipsController;
use App\Http\Controllers\Api\ProfLevels\ProfLevelController;
use App\Http\Controllers\Api\ProfLevels\ProfLevelProfClassifiersRelatedController;
use App\Http\Controllers\Api\ProfLevels\ProfLevelProfClassifiersRelationshipsController;
use App\Http\Controllers\Api\ProfPrograms\ProfProgramController;
use App\Routing\Contracts\RouteRegistrar;
use Illuminate\Contracts\Routing\Registrar;

final class ProfProgramRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar): void
    {
        $registrar->group(['prefix' => 'api/v1', 'middleware' => 'api'], function (Registrar $registrar) {

            $registrar->resource('prof-levels', ProfLevelController::class);

            $registrar->get('prof-levels/{id}/relationships/prof-classifiers', [ProfLevelProfClassifiersRelationshipsController::class, 'index'])
                ->name('prof-level.relationships.prof-classifiers');
            $registrar->patch('prof-levels/{id}/prof-classifiers', [ProfLevelProfClassifiersRelationshipsController::class, 'update'])
                ->name('prof-level.relationships.prof-classifiers');
            $registrar->get('prof-levels/{id}/prof-classifiers', [ProfLevelProfClassifiersRelatedController::class, 'index'])
                ->name('prof-level.prof-classifiers');


            $registrar->resource('prof-groups', ProfGroupController::class);

            $registrar->get('prof-groups/{id}/relationships/prof-classifiers', [ProfGroupProfClassifiersRelationshipsController::class, 'index'])
                ->name('prof-group.relationships.prof-classifiers');
            $registrar->patch('prof-groups/{id}/relationships/prof-classifiers', [ProfGroupProfClassifiersRelationshipsController::class, 'update'])
                ->name('prof-group.relationships.prof-classifiers');
            $registrar->get('prof-groups/{id}/prof-classifiers', [ProfGroupProfClassifiersRelatedController::class, 'index'])
                ->name('prof-group.prof-classifiers');

            $registrar->get('prof-groups/{id}/relationships/parent', [ProfGroupParentRelationshipsController::class, 'index'])
                ->name('prof-group.relationships.parent');
            $registrar->patch('prof-groups/{id}/relationships/parent', [ProfGroupParentRelationshipsController::class, 'update'])
                ->name('prof-group.relationships.parent');
            $registrar->get('prof-groups/{id}/parent', [ProfGroupParentRelatedController::class, 'index'])
                ->name('prof-group.parent');

            $registrar->get('prof-groups/{id}/relationships/children', [ProfGroupChildrenRelationshipsController::class, 'index'])
                ->name('prof-group.relationships.children');
            $registrar->patch('prof-groups/{id}/relationships/children', [ProfGroupChildrenRelationshipsController::class, 'update'])
                ->name('prof-group.relationships.children');
            $registrar->get('prof-groups/{id}/children', [ProfGroupChildrenRelatedController::class, 'index'])
                ->name('prof-group.children');


            $registrar->resource('prof-programs', ProfProgramController::class);



            $registrar->resource('prof-classifiers', ProfClassifierController::class);

            $registrar->get('prof-classifiers/{id}/relationships/prof-level', [ProfClassifiersProfLevelRelationshipsController::class, 'index'])
                ->name('prof-classifiers.relationships.prof-level');
            $registrar->patch('prof-classifiers/{id}/relationships/prof-level', [ProfClassifiersProfLevelRelationshipsController::class, 'update'])
                ->name('prof-classifiers.relationships/prof-level');
            $registrar->get('prof-classifiers/{id}/prof-level', [ProfClassifiersProfLevelRelatedController::class, 'index'])
                ->name('prof-classifiers.prof-level');

            $registrar->get('prof-classifiers/{id}/relationships/prof-group', [ProfClassifiersProfGroupRelationshipsController::class, 'index'])
                ->name('prof-classifiers.relationships.prof-group');
            $registrar->patch('prof-classifiers/{id}/relationships/prof-group', [ProfClassifiersProfGroupRelationshipsController::class, 'index'])
                ->name('prof-classifiers.relationships.prof-group');
            $registrar->get('prof-classifiers/{id}/prof-group', [ProfClassifiersProfGroupRelatedController::class, 'index'])
                ->name('prof-classifiers.prof-group');

            $registrar->get('prof-classifiers/{id}/relationships/prof-programs', [ProfClassifierProfProgramsRelationshipsController::class, 'index'])
                ->name('prof-classifier.relationships.prof-programs');
            $registrar->patch('prof-classifiers/{id}/relationships/prof-programs', [ProfClassifierProfProgramsRelationshipsController::class, 'update'])
                ->name('prof-classifier.relationships.prof-programs');
            $registrar->get('prof-classifiers/{id}/prof-programs', [ProfClassifierProfProgramsRelatedController::class, 'index'])
                ->name('prof-classifier.prof-programs');
        });


    }
}
