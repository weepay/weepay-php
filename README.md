# weepay-PHP
[![Latest Stable Version](https://poser.pugx.org/weepay/weepay-php/version)](https://packagist.org/packages/weepay/weepay-php)

PHP Integration for [weepay](http://weepay.co/)
# Requirements
PHP 5.3 and later.

# Installation
### Composer
You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require weepay/weepay-php
```
To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

### Manual Installation


```php
require_once('weepayBootstrap.php');
```
# Usage

```php
weepayBootstrap::initialize();
$options = new \weepay\Auth();
$options->setBayiID("xxx");
$options->setApiKey("xxx");
$options->setSecretKey("xxx-xx-xx");
$options->setBaseUrl("https://api.weepay.co/");
```
If you have any questions, please don't hesitate to contact us via Github with open an issue or contact us at destek@weepay.co.
