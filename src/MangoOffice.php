<?php 

namespace Epictest\MangoVpbx;

use JsonException;
use GuzzleHttp\Client;
use Symfony\Component\Uid\UuidV6;
use Epictest\MangoVpbx\MangoOffice\Helpers;

class MangoOffice {

    private string $key;

    private string $salt;

    private Client $client;

    public function __construct(string $key, string $salt) 
    {
        $this->key = $key;
        $this->salt = $salt;
        $this->client = new Client([
            'base_uri' => 'https://app.mango-office.ru/vpbx/', 
            'debug' => false
        ]);
    }

    protected function execute(string $method, ?array $data): array
    {
        $responseData = [];

        $data['command_id'] = UuidV6::generate();

        $postData = [
            'vpbx_api_key' => $this->key,
            'sign' => Helpers::makeSign($this->key, $this->salt, $data),
            'json' => json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
        ];

        $response = $this->client->post($method, [
            "form_params" => $postData,
        ]);

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

}