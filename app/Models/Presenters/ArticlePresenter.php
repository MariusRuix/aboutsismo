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
}
