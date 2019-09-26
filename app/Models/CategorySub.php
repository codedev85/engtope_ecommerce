<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CategorySub
 * @package App\Models
 * @version September 18, 2019, 10:37 am UTC
 *
 * @property string name
 * @property integer category_id
 */
class CategorySub extends Model
{
    use SoftDeletes;

    public $table = 'category_subs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        // 'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        // 'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        // 'category_id' => 'required'
    ];
    public function  category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function products(){
        return $this->hasMany('App\Models\Product');
    }
    
}
