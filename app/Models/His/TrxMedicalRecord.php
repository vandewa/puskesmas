<?php

namespace App\Models\His;

use App\Models\General;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalRecord
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string pasien_cd
 * @property string icd_cd
 * @property string medical_cd
 * @property string dr_cd
 * @property string|\Carbon\Carbon datetime_record
 * @property string anamnesa
 * @property string medical_data
 * @property string rm_tp
 * @property string case_tp
 * @property string info_01
 * @property string info_02
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxMedicalRecord extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_record';
    protected $primaryKey = 'medical_record_seqno';

    protected $guarded = [];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function jenisKasus()
    {
        return $this->belongsTo(ComCode::class, 'case_tp');
    }

    public function jenisDiagnosa()
    {
        return $this->belongsTo(ComCode::class, 'rm_tp');
    }

    public function dokter()
    {
        return $this->belongsTo(TrxDokter::class, 'dr_cd');
    }

    public function icd()
    {
        return $this->belongsTo(TrxIcd::class, 'icd_cd');
    }
    public function pasien()
    {
        return $this->belongsTo(TrxPasien::class, 'pasien_cd');
    }
    public function medical()
    {
        return $this->belongsTo(TrxPasien::class, 'medical_cd');
    }

    public function scopeCari($query, $s)
    {
        if ($s) {
            return $query->where('paramedis_cd', 'ilike', "%$s%")->orWhere('paramedis_nm', 'ilike', "%$s%");
        }
    }

    public function rmGeneral()
    {
        return $this->hasOne(General::class, 'medical_record_seqno');
    }


}
