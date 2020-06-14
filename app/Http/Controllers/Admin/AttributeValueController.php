<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AttributeValue;
use App\Contracts\AttributeContract;
use App\Http\Controllers\Controller;

/**
 * Class AttributeValueController
 * @package App\Http\Controllers\Admin
 */
class AttributeValueController extends Controller
{
    /**
     * @var AttributeContract
     */
    protected $attributeRepository;

    /**
     * AttributeValueController constructor.
     * @param AttributeContract $attributeRepository
     */
    public function __construct(AttributeContract $attributeRepository) {
        $this->attributeRepository = $attributeRepository;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getValues(Request $request) {
        $attributeId = $request->id;

        $attribute = $this->attributeRepository->findAttributeById($attributeId);

        $values = $attribute->values;

        return response()->json($values);
    }
}
