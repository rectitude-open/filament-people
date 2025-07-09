<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Models;

use Awcodes\Curator\Models\Media;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Overtrue\LaravelVersionable\Versionable;
use Overtrue\LaravelVersionable\VersionStrategy;
use RalphJSmit\Laravel\SEO\Models\SEO;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RectitudeOpen\FilamentPeople\Database\Factories\PersonFactory;

/**
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $tagline
 * @property string $email
 * @property string $phone
 * @property string $bio
 * @property string $sidebar
 * @property bool $is_published
 * @property int $display_order
 * @property int $avatar_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \RectitudeOpen\FilamentPeople\Models\PersonCategory> $categories
 * @property-read int|null $categories_count
 * @property Media|null $avatar
 * @property SEO $seo
 *
 * @method static \Illuminate\Database\Eloquent\Builder|static ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|static withSlug(string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|static published()
 * @method static \Illuminate\Database\Eloquent\Builder|static draft()
 */
class Person extends Model
{
    use HasFactory;
    use HasSEO;
    use Sluggable;
    use SoftDeletes;
    use Versionable;

    protected $table = 'people';

    protected $fillable = [
        'name',
        'slug',
        'title',
        'tagline',
        'email',
        'phone',
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
        'phone',
        'bio',
        'sidebar',
        'is_published',
        'display_order',
        'avatar_id',
        'created_at',
    ];

    protected $versionStrategy = VersionStrategy::SNAPSHOT;

    protected $with = ['avatar'];

    public function categories()
    {
        return $this->belongsToMany(PersonCategory::class, 'pivot_person_categories', 'people_id', 'category_id');
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
    protected function published(Builder $query): void
    {
        $query->where('is_published', 1);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function draft(Builder $query): void
    {
        $query->where('is_published', 0);
    }

    // @phpstan-ignore-next-line
    #[Scope]
    protected function ordered(Builder $query): void
    {
        $query->orderBy('display_order', 'desc')
            ->orderBy('created_at', 'desc');
    }

    protected static function newFactory()
    {
        return PersonFactory::new();
    }
}
