<?php

namespace App\Models\Presenters;

use Illuminate\Support\Str;
use Laracasts\Presenter\Presenter as LaracastsPresenter;

abstract class Presenter extends LaracastsPresenter
{
    /**
     * @var string
     */
    protected $published_at = 'F d, Y';

    /**
     * @var string
     */
    protected $datetime = 'h:i A';

    /**
     * @return string
     */
        public function published_at()
    {
        return ucfirst($this->entity->published_at->format($this->published_at));
    }

    /**
     * Limit the number of characters in a string.
     *
     * @param  string  $value
     * @param  int     $limit
     * @param  string  $end
     * @return string
     */
    public function limit($value, $limit = 120, $end = '...')
    {
        return Str::limit($value, $limit, $end);
    }

    /**
     * @return string
     */
    public function excerpt()
    {
        if (empty($this->entity->excerpt)) {
            return strip_tags($this->limit($this->entity->body), '<br><br/>');
        }

        return strip_tags($this->entity->excerpt, '<br><br/>');
    }
}
