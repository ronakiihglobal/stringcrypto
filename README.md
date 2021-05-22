## About StringCrypto

This is simple package for encrypt/decrypt small strings like database IDs with ease. It is based on openssl_encrypt.

The encrypt method used is `AES-256-CBC`.

## Usage

`composer require ronakiihglobal/stringcrypto`

then 

`require_once __DIR__ . '/vendor/autoload.php';`

`use ronakiihglobal\stringcrypto\Crypto;`


`$crypto = new Crypto();`

`$crypto::init("testkey","testIv");` this values should be random string of length 16 and should be managed as secret in env variables. 


`$encrypted = $crypto::encrypt("123");` this value should be string.

`$decrypted = $crypto::decrypt($encrypted);`