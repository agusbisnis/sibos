<?php namespace Ipomi\Tiket\Models;

use Model;

/**
 * DetailUser Model
 */
class DetailUser extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ipomi_tiket_detail_users';

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
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}