# Hijri date library on top of Carbon 

## Installation

You can install the package via composer:

``` bash
$ composer require cammac/carbony
```

## Usage

you can use it just like Carbon package i just add two functions

### hijriFormat

format the timestamp to hijri date (convert gregorian to hijri)

``` php
 Carbony::now()->hijriFormat('Y-m-d')
```


### hijriParse

parse the input and convert it to gregorian

``` php
Carbony::hijriParse('1409-06-14')
```

## Testing

``` bash
$ vendor/bin/phpunit
```

## Security

If you discover any security related issues, please email abdullah@efront.sa instead of using the issue tracker.

## Credits

- [Abdul-Aziz Al-Oraij](http://aziz.oraij.com/)
- [briannesbitt/Carbon package](https://github.com/briannesbitt/Carbon)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.