<?php

namespace RectitudeOpen\FilamentPeople\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RectitudeOpen\FilamentPeople\Database\Factories\PeopleFactory;
use Awcodes\Curator\Models\Media;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Overtrue\LaravelVersionable\Versionable;
use Overtrue\LaravelVersionable\VersionStrategy;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

/**
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $tagline
 * @property string $email
 * @property string $bio
 * @property string $sidebar
 * @property bool $is_published
 * @property int $display_order
 * @property int $avatar_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \RectitudeOpen\FilamentPeople\Models\PeopleCategory> $categories
 * @property-read int|null $categories_count
 */
class People extends Model
{
    use HasFactory;
    use HasSEO;
    use Sluggable;
    use SoftDeletes;
    use Versionable;

    protected $fillable = [
        'name',
        'title',
        'tagline',
        'email',
        'bio',
        'sidebar',
        'is_published',
        'display_order',
        'avatar_id',
        'created_at',
    ];

    protected $versionable = [
        'name',
        'title',
        'tagline',
        'email',
        'bio',
        'sidebar',
        'is_published',
        'display_order',
        'avatar_id',
        'created_at',
    ];

    protected $versionStrategy = VersionStrategy::SNAPSHOT;

    public function categories()
    {
        return $this->belongsToMany(PeopleCategory::class, 'pivot_people_categories', 'people_id', 'category_id');
    }

    protected static function booted()
    {
        static::forceDeleted(function ($people) {
            $people->categories()->detach();
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function avatar(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'avatar_id', 'id');
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function withSlug(Builder $query, string $slug): void
    {
        $query->where('slug', $slug);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    public function active(Builder $query): void
    {
        $query->where('is_published', 1);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    public function suspended(Builder $query): void
    {
        $query->where('is_published', 0);
    }

    protected static function newFactory()
    {
        return PeopleFactory::new();
    }
}
