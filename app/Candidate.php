<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 15.04.18
 * Time: 14:09
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = ['vorname', 'nachname', 'firma', 'aktuelle_position'];
}