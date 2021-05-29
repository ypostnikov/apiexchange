<?php

namespace App\Foundation\Transport;

use GuzzleHttp\Client;

/**
 * Class Transport
 * @package App\Foundation\Transport
 */
class Transport implements ITransport
{

    const type = 'GET';

    /**
     * @var Client
     */
    private Client $client;

    /**
     * @var array|\Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    private array $config;

    /**
     * Transport constructor.
     */
    public function __construct()
    {
        $this->config = config('cbrprovider');
        $this->client = new Client(['base_uri' => $this->config['base_url']]);
    }

    /**
     * @param string $data
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function execute(string $data): string
    {
        $params = [
            'query' => [
                'date_req' => $data
            ]
        ];
        $response = $this->client->request(self::type, $this->config['uri'], $params);
        return (string)$response->getBody();
    }

}
