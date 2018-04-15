<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 15.04.18
 * Time: 14:09
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Candidate
 * @package App\Models
 *
 * @property int      $id
 * @property int|null $service_partner_id
 * @property string   $name
 *
 *
 * @method static Candidate create($value)
 * @method static Candidate find($value)
 * @method static Candidate findOrFail($value)
 * @method static Candidate whereCreatedAt($value)
 * @method static Candidate whereId($value)
 * @method static Candidate whereName($value)
 * @method static Candidate whereServicePartnerId($value)
 * @method static Candidate whereUpdatedAt($value)
 * @method static Candidate whereHas($relation, \Closure $callback = null, $operator = '>=', $count = 1)
 * @method static Candidate where($column, $operator = null, $value = null, $boolean = 'and')
 */

class Candidate extends Model
{
    public $timestamps = false;

    protected $fillable = ['vorname', 'nachname', 'firma', 'aktuelle_position'];
}