<?php

namespace App\Foundation\Exchange;

use App\Foundation\Transport\ITransport;
use App\Foundation\Sxe\Sxe;
use Illuminate\Support\Facades\Cache;

/**
 * Class Exchange
 * @package App\Foundation\Exchange
 */
class Exchange
{

    /**
     * Cache time limit.
     */
    const TTL = 10080;

    /**
     * @var ITransport
     */
    private ITransport $transport;


    /**
     * @var array
     */
    private array $bundle;

    /**
     * Exchange constructor.
     * @param ITransport $transport
     */
    public function __construct(ITransport $transport)
    {
        $this->transport = $transport;
    }

    /**
     * @param string $data
     * @param string $currency
     * @return array
     */
    public function handle(string $data, string $currency): array
    {
        $chunks = [];
        $key = base64_encode(str_replace("/", "", $data));
        if (Cache::has($key)) {
            $this->bundle[$key] = Cache::get($key);
        } else {
            $res = $this->transport->execute($data);
            $xml = simplexml_load_string($res);
            foreach ($xml->children() as $items) {
                $chunks [] = [
                    'id' => Sxe::getAttributes($items)['ID'],
                    'value' => (string)$items->{'Value'},
                    'charCode' => (string)$items->{'CharCode'}
                ];
            }
            $this->bundle[$key] = $chunks;
            Cache::put($key, $this->bundle[$key], self::TTL);
        }
        if (empty($currency)) {
            return $this->bundle;
        }
        $item = array_filter($this->bundle[$key], function ($item) use ($currency) {
            if ($item['charCode'] == $currency) {
                return $item;
            };
            return [];
        });
        return [$key => array_values($item)];
    }

}
