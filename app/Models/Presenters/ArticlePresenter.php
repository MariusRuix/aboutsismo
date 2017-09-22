<?php

namespace App\Models\Presenters;

use App\Models\Presenters\Presenter;

class ArticlePresenter extends Presenter
{
    /**
     * Return the name of the associated author.
     *
     * @return string
     */
    public function author() : string
    {
        if (isset($this->entity->author)) {
            return $this->entity->author->name;
        }

        return 'Sin autor';
    }

    /**
     * @return mixed
     */
    public function featured_image()
    {
        $image = $this->entity->hasMedia('featured_image')
            ? $this->entity->getMedia('featured_image')->last()->getUrl()
            : 'http://via.placeholder.com/350x200';

        return $image;
    }
}
