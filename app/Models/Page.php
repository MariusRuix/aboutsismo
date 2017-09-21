<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\{ Presentable, Sluggable };

class Page extends Model
{
    use Presentable, Sluggable;

    /**
     * Define the sluggable model-specific configurations.
     *
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
    ];

    /**
     * The model presenter full class path.
     *
     * @var string
     */
    //protected $presenter = PagesPresenter::class;
}
