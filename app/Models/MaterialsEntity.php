<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class MaterialsEntity extends Model
{
    protected $table = 'materials';
    protected $primaryKey = 'ID';
    protected $guarded = ['ID'];

    public $timestamps = true;
    use SoftDeletes; //https://laravel.tw/docs/5.0/eloquent
    protected $dates = ['deleted_at'];

    //// constant ////
    public const ATTR_PRECIOUS = 1;
    public const ATTR_GENERAL = 2;
    public const ATTR_CONSUMABLE = 3;



    public function status()
    {
        return $this->belongsTo('App\Models\M_StatusEntity');
    }
    public function type()
    {
        return $this->belongsTo('App\Models\M_TypeEntity');
    }
    public function check()
    {
        return $this->belongsTo('App\Models\M_CheckEntity');
    }
    public function attribute()
    {
        return $this->belongsTo('App\Models\M_AttrEntity');
    }


    public static function get_m_col_data()
    {
        return $data = DB::table('materials')
                        ->join('m_attribute', 'materials.ATTRIBUTE', '=', 'm_attribute.ID')
                        ->select('materials.*',
                                'm_attribute.ATTR_NAME',
                                DB::raw("DATE_FORMAT(materials.updated_at, '%Y-%m-%d') as updated_at")
                                )
                        ->orderBy('materials.ID')
                        ->whereNull('deleted_at')
                        ->get();
    }

    public static function get_m_col_data_by_id($attr_id)
    {
        return $data = DB::table('materials')
                        ->join('m_attribute', 'materials.ATTRIBUTE', '=', 'm_attribute.ID')
                        ->select('materials.*',
                                'm_attribute.ATTR_NAME',
                                DB::raw("DATE_FORMAT(materials.updated_at, '%Y-%m-%d') as updated_at")
                                )
                        ->orderBy('materials.ID')
                        ->where('materials.ATTRIBUTE', '=', $attr_id)
                        ->whereNull('deleted_at')
                        ->get();
    }

    public static function get_m_attr_count($attr_id)
    {
        $m_attr_items = DB::table('materials')
                        ->where('ATTRIBUTE', '=', $attr_id)
                        ->whereNull('deleted_at')
                        ->get();

        return count($m_attr_items);
    }
    
}