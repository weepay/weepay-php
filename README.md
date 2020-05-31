# weepay-PHP
PHP Integration for 
# Requirements
PHP 5.3 and later.[weepay](http://weepay.co/)

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
If you have any questions, please open an issue on Github or contact us at destek@weepay.co.
