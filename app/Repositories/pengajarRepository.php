<?php

namespace App\Repositories;

use App\Models\pengajar;
use App\Repositories\BaseRepository;

/**
 * Class pengajarRepository
 * @package App\Repositories
 * @version July 27, 2022, 10:32 am UTC
*/

class pengajarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_pengajar',
        'foto'
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
        return pengajar::class;
    }
}
