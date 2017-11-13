# Yankes
Sistem informasi layanan kesehatan terpadu.

## Install Laravel :
```bash
$ composer create-project --prefer-dist laravel/laravel project-name "5.4.*"
```
## Install package :

```bash
$ composer require bantenprov/yankes-info-kamar
```

```php
'providers' => [
    ...
    App\Providers\AppServiceProvider::class,
    App\Providers\AuthServiceProvider::class,
    App\Providers\EventServiceProvider::class,
    App\Providers\RouteServiceProvider::class,
    ...
    Bantenprov\YankesInfoKamar\InfoKamarServiceProvider::class,
    Collective\Html\HtmlServiceProvider::class,
```
## Artisan command :

```bash
$ php artisan vendor:publish --tag=migration
$ php artisan vendor:publish --tag=view
```

### run local server 
```php
1. php artisan serve
2. http://127.0.0.1:8000/demo
```
