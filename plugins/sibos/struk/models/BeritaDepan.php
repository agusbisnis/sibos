<?php namespace Sibos\Struk\Models;

use Model;

/**
 * BeritaDepan Model
 */
class BeritaDepan extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sibos_struk_berita_depans';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

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