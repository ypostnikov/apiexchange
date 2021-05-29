<?php

namespace App\Http\Controllers;

use App\Foundation\Exchange\Exchange;
use App\Foundation\Transport\Transport;
use Illuminate\Http\JsonResponse;
use DateTime;

/**
 * Class CbrProviderController
 * @package App\Http\Controllers
 */
class CbrProviderController extends Controller
{

    /**
     * @param string $data
     * @param string $charCodeCurrency
     * @return JsonResponse
     */
    public function get(string $data, string $charCodeCurrency = ''): JsonResponse
    {
        $idate = DateTime::createFromFormat(config('cbrprovider')['iDateFormat'], $data);
        $data = $idate->format(config('cbrprovider')['dateFormat']) ?? ((new DateTime())->format(config('cbrprovider')['dateFormat']));
        $currency = strtoupper(trim($charCodeCurrency)) ?? '';
        $transport = new Transport();
        $exChange = new Exchange($transport);
        $collection = $exChange->handle($data, $currency);
        return response()->json($collection);
    }

}
