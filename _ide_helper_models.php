<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ProfClassifier
 *
 * @property int $id
 * @property int $prof_group_id
 * @property int $prof_level_id
 * @property string $name
 * @property string|null $description
 * @property string $slug
 * @property string $code
 * @property string|null $isce_2011
 * @property string|null $isce_2013
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProfGroup|null $profGroup
 * @property-read \App\Models\ProfLevel|null $profLevel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProfProgram[] $profPrograms
 * @property-read int|null $prof_programs_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProfClassifier onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereIsce2011($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereIsce2013($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereProfGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereProfLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProfClassifier withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Query\Builder|ProfClassifier withoutTrashed()
 */
	class ProfClassifier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProfGroup
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property string|null $description
 * @property string $slug
 * @property string $code
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|ProfGroup[] $children
 * @property-read int|null $children_count
 * @property-read ProfGroup|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProfClassifier[] $profClassifiers
 * @property-read int|null $prof_classifiers_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProfGroup onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProfGroup withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfGroup withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Query\Builder|ProfGroup withoutTrashed()
 */
	class ProfGroup extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProfLevel
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $slug
 * @property string $code
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProfClassifier[] $profClassifiers
 * @property-read int|null $prof_classifiers_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProfLevel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProfLevel withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Query\Builder|ProfLevel withoutTrashed()
 */
	class ProfLevel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProfProgram
 *
 * @property string $id
 * @property string $organization_id
 * @property int $prof_classifier_id
 * @property int $is_moderated
 * @property int $is_published
 * @property string $name
 * @property string $description
 * @property string $slug
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProfProgram onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereIsModerated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereProfClassifierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfProgram whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProfProgram withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProfProgram withoutTrashed()
 */
	class ProfProgram extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

