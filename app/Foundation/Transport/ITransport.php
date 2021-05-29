<?php

namespace App\Foundation\Transport;

/**
 * Interface ITransport
 * @package App\Foundation
 */
interface ITransport
{

    /**
     * @param string $data
     * @return mixed
     */
    public function execute(string $data);
}
