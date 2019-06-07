# PlaceMex

[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]

Obtener los Estados, Municipios y Localidades de México obtenidos del [INEGI](https://developarts.com/db-estados-municipios-localidades-mexico)

## Installation

Via Composer

``` bash
$ composer require aquinoaldair/placemex
```

## Usage


```php  

$placemex = new \AquinoAldair\PlaceMex\PlaceMex();  

## ESTADOS

#Obtener todos los estados 
$placemex->states()->all();

#obtener estado por ID
$placemex->states()->findById(5);

#obtener estado por nombre específico
$placemex->states()->findByName("Oaxaca");

#obtener estados por busqueda de palabra
$placemex->states()->search("word");

## MUNICIPIOS

#obtener municipio por ID
$placemex->municipalities()->findById(100);

#obtener municipio por nombre específico
$placemex->municipalities()->findById(100);

#obtener municipios por busqueda de palabra
$placemex->municipalities()->search("word");

#obtener municipios por ID Estado
$placemex->municipalities()->findByParentId(6);

## LOCALIDADES

#obtener localidad por ID
$placemex->localities()->findById(100);

#obtener localidad por nombre específico
$placemex->localities()->findById(100);

#obtener localidades por busqueda de palabra
$placemex->localities()->search("word");

#obtener localidades por ID Municipio
$placemex->localities()->findByParentId(6);

## (EXTRA) OBTENER DATOS POR CODIGO POSTAL 
$placemex->postalCode()->find(29000);

```


## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Aldair Aquino][link-author]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/aquinoaldair/placemex.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/aquinoaldair/placemex.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/aquinoaldair/placemex/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/aquinoaldair/placemex
[link-downloads]: https://packagist.org/packages/aquinoaldair/placemex
[link-travis]: https://travis-ci.org/aquinoaldair/placemex
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/aquinoaldair
[link-contributors]: ../../contributors
