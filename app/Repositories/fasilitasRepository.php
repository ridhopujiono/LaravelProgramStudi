<?php

namespace App\Repositories;

use App\Models\fasilitas;
use App\Repositories\BaseRepository;

/**
 * Class fasilitasRepository
 * @package App\Repositories
 * @version July 27, 2022, 11:00 am UTC
*/

class fasilitasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_fasilitas',
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
        return fasilitas::class;
    }
}
