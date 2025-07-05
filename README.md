# Laravel VietQR

[![Latest Version on Packagist](https://img.shields.io/packagist/v/takashato/laravel-vietqr.svg?style=flat-square)](https://packagist.org/packages/takashato/laravel-vietqr)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/takashato/laravel-vietqr/run-tests?label=tests)](https://github.com/takashato/laravel-vietqr/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/takashato/laravel-vietqr/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/takashato/laravel-vietqr/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/takashato/laravel-vietqr.svg?style=flat-square)](https://packagist.org/packages/takashato/laravel-vietqr)

Laravel package to generate VietQR data / VietQR code
Cập nhật cho Laravel 11^

## Installation

You can install the package via composer:

```bash
composer require dandyphuong99/laravel-vietqr:dev-main
```

## Usage

```php
use Takashato\VietQr\Facades\VietQr;
use Takashato\VietQr\Enums\Currency;

$qrCode = VietQr::create()
    ->merchant('970422', '1234567890', 'NGUYEN VAN A') // BIN, account number, name
    ->amount(50000)
    ->additionalInfo('Thanh toan don hang 123')
    ->generateQr(); // Trả về QR dạng SVG

echo $qrCode;

```

## Testing

```bash
composer test
```

## Security Vulnerabilities

Please email me at takashato@gmail.com for any security vulnerabilities.

## Credits

- [takashato](https://github.com/takashato)
- All other contributors

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
