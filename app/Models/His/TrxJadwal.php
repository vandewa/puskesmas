<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use App\Models\ComCode;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxJadwal
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string dr_cd
 * @property string medunit_cd
 * @property string day_tp
 * @property time time_start
 * @property time time_end
 * @property string note
 * @property string rs_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property integer max_pasien
 */
class TrxJadwal extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_jadwal';
    protected $primaryKey = 'seq_no';

    public $fillable = [
        'dr_cd',
        'medunit_cd',
        'day_tp',
        'time_start',
        'time_end',
        'note',
        'rs_cd',
        'modi_id',
        'modi_datetime',
        'max_pasien'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dr_cd' => 'string',
        'medunit_cd' => 'string',
        'day_tp' => 'string',
        'note' => 'string',
        'rs_cd' => 'string',
        'modi_id' => 'string',
        'max_pasien' => 'integer'
    ];

    protected static $logAttributes = [
        'dr_cd',
        'medunit_cd',
        'day_tp',
        'time_start',
        'time_end',
        'note',
        'rs_cd',
        'modi_id',
        'modi_datetime',
        'max_pasien'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function hari(){
        return $this->belongsTo(ComCode::class, 'day_tp');
    }

    public function poli(){
        return $this->belongsTo(TrxUnitMedis::class, 'medunit_cd');
    }

    public function dokter(){
        return $this->belongsTo(TrxDokter::class, 'dr_cd');
    }


}
