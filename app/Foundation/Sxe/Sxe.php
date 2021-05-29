<?php

namespace App\Foundation\Sxe;

use SimpleXMLElement;

/**
 * Class Sxe
 * @package App\Foundation\Sxe
 */
class Sxe
{

    /**
     * @var SimpleXMLElement
     */
    private SimpleXMLElement $sxe;

    /**
     * Sxe constructor.
     * @param SimpleXMLElement $sxe
     */
    public function __construct(SimpleXMLElement $sxe)
    {
        $this->sxe = $sxe;
    }

    /**
     * @param SimpleXMLElement $sxe
     * @return array
     */
    public static function getAttributes(SimpleXMLElement $sxe): array
    {
        $attrs = [];
        foreach ($sxe->attributes() ?: [] as $k => $v) {
            $attrs[$k] = (string)$v;
        }
        return $attrs;
    }


}
