<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class pengajar
 * @package App\Models
 * @version July 27, 2022, 10:32 am UTC
 *
 * @property string $nama_pengajar
 * @property string $foto
 */
class pengajar extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pengajars';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_pengajar',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_pengajar' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_pengajar' => 'required',
        'foto' => 'required'
    ];

    
}
