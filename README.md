# Mango Office VPBX API ☎️

PHP (>=8.0) library for Mango Office VPBX Api


```sh
composer require epictest/mango-vpbx
```


## MangoOffice\Call

| params    | type     | info      |
| --------- | -------- | --------- |
| `$key`    | `string` | ID        |
| `$salt`   | `string` | Signature |

### Init

```php
use Epictest\MangoVpbx\MangoOffice\Call as MangoCall;

$mangoVpbx = new MangoCall($apiKey, $apiSalt);
```

### Methods
#### sendCall (Start call)

| params  | type           | example                                                             |
| ------- | -------------- | ------------------------------------------------------------------- |
| `$from` | `string,array` | caller extension or phone number<br >if integer is used as extension|
| `$to`   | `string`       | number to call                                                      |


```php 
$response = $this->mangoVpbx->sendCall(to: "79991113366", from: "111");
```

