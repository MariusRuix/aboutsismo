<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Presenters\ArticlePresenter;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\{ Presentable, Sluggable };
use Illuminate\Database\Eloquent\Relations\ { BelongsTo, HasMany };

class Article extends Model
{
    use Presentable,
        Sluggable,
        SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'video',
        'body',
    ];

    /**
     * The model presenter full class path.
     *
     * @var string
     */
    protected $presenter = ArticlePresenter::class;

    /**
     * Define the sluggable model-specific configurations.
     *
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'title',
        'save_to' => 'slug',
    ];

    /*
    |--------------------------------------------------------------------------
    | Eloquent Model Relationships
    |--------------------------------------------------------------------------
    */

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
