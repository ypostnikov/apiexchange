<?php

namespace App\Http\Controllers;

use App\Model\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/*use App\Foundation\Exchange\Exchange;
use App\Foundation\Transport\Transport;
use DateTime;*/

/**
 * Class CurrencyExchange
 * @package App\Http\Controllers
 */
class CurrencyExchangeController extends Controller
{

    /**
     * @param string $uid
     * @param string $charCodeCurrency
     * @return JsonResponse
     */
    public function get(string $uid, string $charCodeCurrency = ''): JsonResponse
    {
        $collection = ExchangeRate::where('uid', '=', $uid)->get()->toArray();
        foreach ($collection as &$item) {
            $item['codes'] = json_decode($item['codes']);
            if (!empty($charCodeCurrency)) {
                foreach ($item['codes'] as $currency) {
                    if ($charCodeCurrency === $currency->charCode) {
                        $item['codes'] = $currency;
                    }
                }
            }
        }
        return response()->json($collection);
    }

    /**
     * @param Request $req
     * @options array 'data'
     * @return JsonResponse
     */
    public function save(Request $req): JsonResponse
    {
        $collection = json_decode($req->get('data'));
        /* example.
         $currency = '';
         $data = ((new DateTime())->format(config('cbrprovider')['dateFormat']));
         $transport = new Transport();
         $exChange = new Exchange($transport);
         $encodedCollection = json_encode($exChange->handle($data, $currency));
         $collection = json_decode($encodedCollection);*/
        $uid = '';
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