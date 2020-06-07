<?php

namespace App\Models;

/**
 * Class Attribute
 * @package App\Models
 */
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model {
    /**
     * @var string
     */

    protected $table = 'attributes';

    /**
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'frontend_type', 'is_filterable', 'is_required'
    ];

    /**
     * @var array
     */
    protected $casts  = [
        'is_filterable' =>  'boolean',
        'is_required'   =>  'boolean',
    ];
}
