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
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProfClassifier onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfClassifier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProfClassifier withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProfClassifier withoutTrashed()
 */
	class ProfClassifier extends \Eloquent {}
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
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProfLevel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProfLevel query()
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
 * App\Models\Program
 *
 * @property string $id
 * @property string $organization_id
 * @property int $is_moderated
 * @property int $is_published
 * @property string $name
 * @property string $description
 * @property string $slug
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Program newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program newQuery()
 * @method static \Illuminate\Database\Query\Builder|Program onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Program query()
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereIsModerated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Program withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Program withoutTrashed()
 */
	class Program extends \Eloquent {}
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

