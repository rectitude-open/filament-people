<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RectitudeOpen\FilamentPeople\Database\Factories\PeopleCategoryFactory;
use SolutionForest\FilamentTree\Concern\ModelTree;

class PeopleCategory extends Model
{
    use HasFactory;
    use ModelTree;
    use SoftDeletes;

    protected $fillable = ['title', 'parent_id', 'weight'];

    public function people()
    {
        return $this->belongsToMany(People::class, 'pivot_people_categories', 'category_id', 'people_id');
    }

    protected static function booted()
    {
        static::forceDeleted(function ($peopleCategory) {
            $peopleCategory->people()->detach();
        });
    }

    protected static function newFactory()
    {
        return PeopleCategoryFactory::new();
    }
}
