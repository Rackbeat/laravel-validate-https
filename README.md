# Validation Rule to ensure a url is secured (https)

Should be combined with `url` rule. Alternatively just run `starts_with('https://')`


<p align="center"> 
<a href="https://travis-ci.org/Rackbeat/laravel-validate-https"><img src="https://img.shields.io/travis/Rackbeat/laravel-validate-https.svg?style=flat-square" alt="Build Status"></a>
<a href="https://coveralls.io/github/Rackbeat/laravel-validate-https"><img src="https://img.shields.io/coveralls/Rackbeat/laravel-validate-https.svg?style=flat-square" alt="Coverage"></a>
<a href="https://packagist.org/packages/rackbeat/laravel-validate-https"><img src="https://img.shields.io/packagist/dt/rackbeat/laravel-validate-https.svg?style=flat-square" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/rackbeat/laravel-validate-https"><img src="https://img.shields.io/packagist/v/rackbeat/laravel-validate-https.svg?style=flat-square" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/rackbeat/laravel-validate-https"><img src="https://img.shields.io/packagist/l/rackbeat/laravel-validate-https.svg?style=flat-square" alt="License"></a>
</p>

## Installation

You just require using composer and you're good to go!

```bash
composer require rackbeat/laravel-validate-https
```

The Service Provider is automatically registered.

## Usage

### Class

* `Rackbeat\Rules\HttpsRule`

```php
'url' => [
    'url',
    new Rackbeat\Rules\HttpsRule,
],
```

### Helper

* `https`

```php
'url'        => [ 'url', 'https' ],
```

## Requirements
* PHP >= 7.1
