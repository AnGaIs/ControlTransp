## ConstrolTransp

Sistema de paletização de skus diversificados, criado para atender uma operação logística na cidade de São José dos Campos.

![img](public/images/laravel.png)

## Installation

- Clone repository
```
$ git@github.com:AnGaIs/ControlTransp.git
```

- Access directory
```
$ cd controltransp
```

- Copy `.env.example` to `.env` and add your configs
```
$ cp .env.example .env
```

- Install PHP dependencies ([composer](http://getcomposer.org))
```
$ composer install
```

- Generate new key
```
$ php artisan key:generate
```

- Configure your database access
```
$ vim .env
```

- Run artisan commands.
```
$ php artisan migrate --seed && php artisan db:seed
```

## Run tests
```
$ ./vendor/bin/phpunit 
```

## Server start

- Open new terminal
```
$ php artisan serve
```
