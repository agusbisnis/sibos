<?php namespace Ipomi\Tiket\Models;

use Model;

/**
 * Po Model
 */
class Po extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ipomi_tiket_pos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    
    public $belongsTo = [
    'user' => ['Rainlab\User\Models\User']
    ];
    

}