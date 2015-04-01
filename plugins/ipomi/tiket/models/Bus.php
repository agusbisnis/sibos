<?php namespace Ipomi\Tiket\Models;

use Model;

/**
 * Bus Model
 */
class Bus extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ipomi_tiket_buses';

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
        'po' => ['Ipomi\Tiket\Models\Po'],
        
    ];
}