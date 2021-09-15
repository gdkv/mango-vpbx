<?php 

namespace Epictest\MangoVpbx;

use JsonException;
use GuzzleHttp\Client;

class MangoOffice {

    private string $key;

    private string $salt;

    private Client $client;

    public function __construct(string $key, string $salt) 
    {
        $this->client = new Client(['base_uri' => 'https://app.mango-office.ru/vpbx/']);
        $this->key = $key;
        $this->salt = $salt;
    }

    protected function execute(string $method, ?array $data)
    {
        $responseData = [];
        $postData = [
            'vpbx_api_key' => $this->key,
            'sign' => $this->makeSign($data),
            'json' => json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
        ];

        $post = http_build_query($postData);

        $response = $this->client->post($method, $postData);

        try {
            $responseData = json_decode(
                $response->getBody()->getContents(), 
                true, 
                512, 
                JSON_THROW_ON_ERROR
            );
        } catch (JsonException $e) {
            $responseData = [
                'error' => "Couldn't convert response to array",
            ];
        }

        return $responseData;
    }

    private function makeSign(array $data = []): string
    {
        if (is_array($data)) {
            $data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
        return hash('sha256', $this->key . $data . $this->salt);
    }
}