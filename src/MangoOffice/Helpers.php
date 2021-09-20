<?php 

namespace Epictest\MangoVpbx\MangoOffice;
/**
 * @method static Helpers makeSign()
 * @method static Helpers getCsv()
 */
class Helpers {

    /**
     * @param string $key
     * @param string $salt
     * @param array $data
     *
     * @return string
     */
    public static function makeSign(string $key, string $salt, array $data = []): string
    {
        if (is_array($data)) {
            $data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
        return hash('sha256', $key . $data . $salt);
    }

    /**
     * @param $info
     * @param $fields
     *
     * @return array
     */
    public static function getCsv($info, $fields): array
    {
        $dataArray   = [];
        $lines = explode("\n", $info);

        if (count($lines)) {
            foreach ($lines as $line) {
                if ($line) {
                    $values = explode(';', $line);
                    if (count($values)) {
                        $values = array_map(fn($v) => str_replace(["[", "]"], "", $v), $values);
                        $data   = array_combine(array_values($fields), array_values($values));
                        $dataArray[]  = $data;
                    }
                }
            }
        }
        return $dataArray;
    }
}