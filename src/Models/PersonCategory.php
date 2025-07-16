<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use RectitudeOpen\FilamentPeople\Database\Factories\PersonCategoryFactory;
use SolutionForest\FilamentTree\Concern\ModelTree;

class PersonCategory extends Model
{
    use HasFactory;
    use ModelTree;
    use SoftDeletes;

    protected $table = 'person_categories';

    protected $fillable = ['title', 'parent_id', 'weight'];

    public function people(): BelongsToMany
    {
        return $this->belongsToMany(Person::class, 'pivot_person_categories', 'category_id', 'people_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(static::class, 'parent_id');
    }

    public function childrenWithPeople(): HasMany
    {
        return $this->children()
            ->with(['people' => fn ($query) => $query->published()->ordered()])
            ->with('childrenWithPeople');
    }

    public function getAllDescendantIds(): array
    {
        $descendantIds = [];
        foreach ($this->children as $child) {
            $descendantIds[] = $child->id;
            $descendantIds = array_merge($descendantIds, $child->getAllDescendantIds());
        }

        return $descendantIds;
    }

    protected static function booted()
    {
        static::forceDeleted(function ($peopleCategory) {
            $peopleCategory->people()->detach();
        });
    }

    protected static function newFactory()
    {
        return PersonCategoryFactory::new();
    }
}
