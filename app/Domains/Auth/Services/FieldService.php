<?php

namespace App\Domains\Auth\Services;

use App\Models\Field;
use App\Services\BaseService;

class FieldService extends BaseService
{
    public function __construct(Field $field)
    {
        $this->model = $field;
    }

}
