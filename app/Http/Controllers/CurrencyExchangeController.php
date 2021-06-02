<?php

namespace App\Http\Controllers;

use App\Model\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\CurrencyExchangeResources;

/**
 * Class CurrencyExchange
 * @package App\Http\Controllers
 */
class CurrencyExchangeController extends Controller
{

    /**
     * @param Request $req
     * @options uid
     * @options charCode
     * @return JsonResponse
     */
    public function get(Request $req): JsonResponse
    {
        $uid = $req->get('uid');
        $collection = new CurrencyExchangeResources(ExchangeRate::findOrFail($uid));
        return response()->json($collection);
    }

    /**
     * @param Request $req
     * @options array
     * @return JsonResponse
     */
    public function save(Request $req): JsonResponse
    {
        $collection = $req->all();
        $date = '';
        $codes = [];
        foreach ($collection as $key => $item) {
            $uid = $key;
            $codes = $item;
            $bdate = str_split(base64_decode($key), 2);
            $date = "{$bdate[2]}{$bdate[3]}-{$bdate[1]}-{$bdate[0]}";
        }
        $m = new ExchangeRate();
        return response()->json(['result' => $m->saveCollection($codes, $date, $uid)]);
    }


    /**
     * @param Request $req
     * @return JsonResponse
     */
    public function saveComment(Request $req): JsonResponse
    {
        $uid = $req->get('uid');
        $comment = $req->get('comment');
        $res = ExchangeRate::where('uid', '=', $uid)->update(['comment' => $comment]);
        return response()->json(['result' => $res]);
    }

}
