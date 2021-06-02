<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CurrencyExchangeResources
 * @package App\Http\Resources
 */
class CurrencyExchangeResources extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $charCode = strtoupper(trim($request->get('charCode')));
        //@todo some bugs 'uid' => $this->uid,
        $collection = [
            'uid' => $request->get('uid'),
            'date' => $this->date,
            'codes' => json_decode($this->codes),
            'comment' => $this->comment,
        ];
        if (!empty($charCode)) {
            $chunk = [];
            foreach ($collection['codes'] as $item) {
                if ($charCode === $item->charCode) {
                    $chunk = $item;
                }
            }
            $collection ['codes'] = $chunk;
        }
        return $collection;
    }

}
