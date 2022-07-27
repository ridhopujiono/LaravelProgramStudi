<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class fasilitas
 * @package App\Models
 * @version July 27, 2022, 11:00 am UTC
 *
 * @property string $nama_fasilitas
 * @property string $foto
 */
class fasilitas extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'fasilitas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_fasilitas',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_fasilitas' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_fasilitas' => 'required',
        'foto' => 'required'
    ];

    
}
