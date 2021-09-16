<?php 

namespace Epictest\MangoVpbx\MangoOffice;

class Helpers {

    public function makeSign(string $key, string $salt, array $data = []): string
    {
        if (is_array($data)) {
            $data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
        return hash('sha256', $key . $data . $salt);
    }
}