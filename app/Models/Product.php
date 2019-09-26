<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version September 18, 2019, 10:35 am UTC
 *
 * @property string name
 * @property string description
 * @property string image
 * @property number amount
 * @property integer category_sub_id
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'image',
        'amount',
        'category_sub_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'image' => 'string',
        'amount' => 'float',
        'category_sub_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        // 'image' => 'required',
        'category_sub_id' => 'required'
    ];

    public function subcategory(){
        return $this->belongsTo('App\Models\CategorySub','category_sub_id');
    }
    
    
}
