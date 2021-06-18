<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

/**
 * Class ExchangeRate
 * @package App\Model
 */
class ExchangeRate extends Model
{

    protected $table = 'exchange';
    protected $primaryKey = 'uid';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['comment'];

    /**
     * @param array $bundle
     * @param string $date
     * @param string $uid
     * @return bool
     */
    public function saveCollection(array $bundle, string $date, string $uid): bool
    {
        $d = DB::table($this->table)->select('uid')->where('uid', '=', $uid)->get();
        if (count($d) == 1) {
            DB::table($this->table)
                ->where('uid', '=', $uid)
                ->update(['codes' => json_encode($bundle)]);
            return true;
        }
        $params = [
            'date' => $date,
            'uid' => $uid,
            'codes' => json_encode($bundle)
        ];
        try {
            DB::table($this->table)->insert([$params]);
        } catch (QueryException $e) {
            return false;
        }
        return true;
    }

}
