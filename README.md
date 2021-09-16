# Mango Office VPBX API

PHP (>=8.0) library for Mango Office VPBX Api


```sh
composer require epictest/mango-vpbx
```


## MangoOffice\Call

| params  | type  | info |
| --------- | ---- | -------- |
| `$key` | `string` | ID |
| `$salt` | `string` | Signature |

### Init

```php
use Epictest\MangoVpbx\MangoOffice;

$mangoVpbx = new MangoOffice\Call($apiKey, $apiSalt);
```

### Methods
#### sendCall (Start call)

| params  | type  | example |
| --------- | ---- | -------- |
| `$from` | `int|array` | caller extension or phone number<br >if integer is used as extension|
| `$to` | `string` | number to call|


```php 
$from = [
    "extension" => "100",
    "number" => "79990001111",
];
$to = "79000001111";

$response = $mangoVpbx->sendCall($from, $to);
```

