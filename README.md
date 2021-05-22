## About StringCrypto

This is simple package for encrypt/decrypt small strings like database IDs with ease. It is based on openssl_encrypt.

The encrypt method used is `AES-256-CBC`.

## Usage

`composer require ronakiihglobal/stringcrypto`

then 

`require_once __DIR__ . '/vendor/autoload.php';`
`use ronakiihglobal\stringcrypto\Crypto;`

`$crypto = new Crypto();`
`$crypto::init("testkey","testIv");`

`$encrypted = $crypto::encrypt("123");`
`$decrypted = $crypto::decrypt($encrypted);`