# Pelayanan Kesehatan - Info Kamar
Sistem informasi layanan kesehatan terpadu.

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/yankes-info-kamar/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/yankes-info-kamar/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/yankes-info-kamar/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/yankes-info-kamar/build-status/master)

## Install Laravel :
```bash
$ composer create-project --prefer-dist laravel/laravel project-name "5.4.*"
```
## create table rumahsakits :
```bash
$ php artisan make:migration create_rumahsakits_table --create=rumahsakits
```

## create migratation schema :
```php
Schema::create('rumahsakits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alamat');
              $table->softDeletes();
            $table->timestamps();
        });
```

## migrate :

```bash
$ php artisan migrate
```

## create Controller :

```bash
$ php artisan make:controller RumahsakitController -r
```

## create Model :

```bash
$ php artisan make:model Rumahsakit
```

## model Rumahsakit :

```php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Rumahsakit extends Model
{

    use SoftDeletes;
    protected $table ='rumahsakits';
    protected $fillable = ['name','alamat'];


    public function kamar()
    {
      return $this->hasMany('App\Kelasrawat','id');
    }
}
```


## Install package :

```bash
$ composer require bantenprov/yankes-info-kamar
```

## config/app.php
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
    ],


'aliases' => [
    ....
    'Form' => Collective\Html\FormFacade::class,
    'Html' => Collective\Html\HtmlFacade::class,
    ]
```
## Artisan command :

```bash
$ php artisan bantenprov:create-controller
$ php artisan bantenprov:create-view
$ php artisan bantenprov:create-model
$ php artisan migrate
$ php artisan make:auth

```

## Route web :

```php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('rumah-sakit','RumahsakitController');
Route::resource('kelasrawat', 'KelasController');
Route::resource('ruangrawat', 'RuangController');
Route::resource('bedrawat', 'BedController');


```


### run local server 
```php
1. php artisan serve
2. http://127.0.0.1:8000/home

```
