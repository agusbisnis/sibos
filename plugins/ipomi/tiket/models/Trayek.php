<?php namespace Ipomi\Tiket\Models;

use Model;

/**
 * Trayek Model
 */
class Trayek extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ipomi_tiket_trayeks';

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
        
        'bus' => ['Ipomi\Tiket\Models\Bus']
    ];

}