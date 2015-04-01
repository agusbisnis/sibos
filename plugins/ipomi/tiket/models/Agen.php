<?php namespace Ipomi\Tiket\Models;

use Model;

/**
 * Agen Model
 */
class Agen extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ipomi_tiket_agens';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
   public $belongsTo = [
        'kota' => ['Ipomi\Tiket\Models\Kota'],
        'po' => ['Ipomi\Tiket\Models\Po'],
        'user' => ['Rainlab\User\Models\User']
    ];

    public $attachOne = [
        'photo' => ['System\Models\File']
    ];
}