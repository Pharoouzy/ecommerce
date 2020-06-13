<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\AttributeContract;
use App\Http\Controllers\BaseController;

/**
 * Class AttributeController
 * @package App\Http\Controllers\Admin
 */
class AttributeController extends BaseController
{
    protected $attributeRepository;

    public function __construct(AttributeContract $attributeRepository) {
        $this->attributeRepository = $attributeRepository;
    }
}
