## About zykutil-unisn

In order to create a unique serial number.There are currently six types.Included in ZYKUtil\UniSn\DPFactory\FactoryTypeEnum::class.

## Install

```
composer require zykutil/unisn
```

## config/app.php

providers add

```
ZYKUtil\UniSn\UniSnServiceProvider::class
```

alias add

```
'UniSn' => ZYKUtil\UniSn\UniSnFacade::class
```

## Copy the package config to your local config with the publish command:

```
php artisan vendor:publish --tag=zykutil-unisn --ansi --force
```

## Simply used

```
\UniSn::execute();
```
