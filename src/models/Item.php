<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Database\Eloquent\Model;



class Item extends Model{
    protected $table = 'item';
    protected $primaryKey = 'id' ;
    //public $timestamps = false;
}