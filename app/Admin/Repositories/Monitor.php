<?php

namespace App\Admin\Repositories;

use App\Models\Monitor as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Monitor extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
