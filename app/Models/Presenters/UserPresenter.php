<?php

namespace App\Models\Presenters;

use App\Models\Presenters\Presenter;

class UserPresenter extends Presenter
{
    /**
     * Display the name of the user.
     *
     * @return mixed|string
     */
    public function name()
    {
        if (is_null($this->entity->name)) {
            return '—';
        }

        return $this->entity->name;
    }

    /**
     * Display the first name of the user capitalized.
     *
     * @return mixed|string
     */
    public function username()
    {
        return ucwords(strtolower(strtok($this->entity->name, ' ')));
    }

    /**
     * @return string
     */
    public function created_at()
    {
        if ($this->entity->created_at != null) {
            return ucfirst($this->entity->created_at->format('F j, Y'));
        }

        return 'n/a';
    }

    /**
     * @return string
     */
    public function deleted_at()
    {
        if (is_null($this->entity->deleted_at)) {
            return '—';
        }

        return ucfirst($this->entity->created_at->format('F j, Y'));
    }

    /**
     * @return string
     */
    public function deleted_by()
    {
        if ($this->entity->isActive()) {
            return '—';
        }

        if ($this->entity->deleted_by == $this->entity->id) {
            return 'Cuenta propia';
        }

        if (is_null($this->entity->who_deleted_it)) {
            return 'Usuario desconocido';
        }

        $id = $this->entity->deleted_by;
        $name = ucwords(strtolower($this->entity->who_deleted_it->name));

        return $name.', usuario con ID #'.$id;
    }

    /**
     * @return string
     */
    public function first_login()
    {
        if (is_null($this->entity->first_login)) {
            return 'Nunca';
        }

        return ucfirst($this->entity->first_login->format('F j, Y H:i'));
    }

    /**
     * @return string
     */
    public function last_login()
    {
        if (is_null($this->entity->last_login)) {
            return 'Nunca';
        }

        return ucfirst($this->entity->last_login->format('F j, Y H:i'));
    }

    /**
     * @return string
     */
    public function status()
    {
        switch (true) {
            case $this->entity->isActive(): return 'Activo';
            case ! is_null($this->entity->deleted_at): return 'Baja';
            default: return 'Inactivo';
        }
    }
}
