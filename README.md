# Paket RusBid SDK for PHP

![Package version](https://img.shields.io/github/v/release/motokraft/paket-rusbid-sdk)
![Total Downloads](https://img.shields.io/packagist/dt/motokraft/paket-rusbid-sdk)
![PHP Version](https://img.shields.io/packagist/php-v/motokraft/paket-rusbid-sdk)
![Repository Size](https://img.shields.io/github/repo-size/motokraft/paket-rusbid-sdk)
![License](https://img.shields.io/packagist/l/motokraft/paket-rusbid-sdk)

Что бы начать работу вам необходимо создать [**API ключ**](https://paket.rusbid.de/rest-api).

## Установка

Библиотека устанавливается с помощью пакетного менеджера [**Composer**](https://getcomposer.org/)

Добавьте библиотеку в файл `composer.json` вашего проекта:

```json
{
    "require": {
        "motokraft/paket-rusbid-sdk": "*"
    }
}
```

или выполните команду в терминале

```
$ php composer require motokraft/paket-rusbid-sdk
```

Включите автозагрузчик Composer в код проекта:

```php
require __DIR__ . '/vendor/autoload.php';
```

## Примеры инициализации

```php
// API ключ полученный на странице (https://paket.rusbid.de/rest-api)
$api_key = 'hPMKKYFGkbsKs3tmGtVo1bnFtf7MiLRalPH30iA0KtQPHyWRJ';

use \Motokraft\PaketRusBid\PaketRusBid;
$paket = new PaketRusBid($api_key);
```

## Обработка ошибок

Любой запрос к сервису может возвращать ошибки, их можно вывести с помощью функции **`getErrors`**

```php
// API ключ полученный на странице (https://paket.rusbid.de/rest-api)
$api_key = 'hPMKKYFGkbsKs3tmGtVo1bnFtf7MiLRalPH30iA0KtQPHyWRJ';

use \Motokraft\PaketRusBid\PaketRusBid;

$paket = new PaketRusBid($api_key);
$package = $paket->getPackage();

if($id = $package->addItem($params))
{
    // код есть посылка создана
    return true;
}

foreach($package->getErrors() as $error)
{
    echo __LINE__ . ' | ' . $error . '<br>';
}
```

## Документация

Перейдите на страницу [**Wiki**](https://github.com/motokraft/paket-rusbid-sdk/wiki) что бы получить подробную документацию об использовании библиотеки с примерами.

## Лицензия

Эта библиотека находится под лицензией MIT License.