<?php

namespace App\Domains\Auth\Http\Controllers\Backend\Field;

use App\Domains\Auth\Services\FieldService;
use App\Domains\Auth\Services\PermissionService;

class FieldController
{
    protected $fieldService;

    /**
     * @var PermissionService
     */
    protected $permissionService;

    /**
     * RoleController constructor.
     *
     * @param  FieldService  $fieldService
     * @param  PermissionService  $permissionService
     */
    public function __construct(FieldService $fieldService, PermissionService $permissionService)
    {
        $this->fieldService = $fieldService;
        $this->permissionService = $permissionService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.auth.field.index');
    }
}
