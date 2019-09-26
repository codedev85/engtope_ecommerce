<?php

namespace App\Repositories;

use App\Models\CategorySub;
use App\Repositories\BaseRepository;

/**
 * Class CategorySubRepository
 * @package App\Repositories
 * @version September 18, 2019, 10:37 am UTC
*/

class CategorySubRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'category_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CategorySub::class;
    }
}
