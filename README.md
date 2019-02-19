# cch-postalcode

Usage:

`Cch::getPostalCode('Arauco', 5440, 'La Serena');`

The order of the parameters is: Street, Numbering and City.


Install with composer:

`composer require jmenast/cch-postalcode`

For Laravel 5.7.x usage:

Add to `config/app.php` next alias.

`'Cch' => CchPostalcode\Cch::class`

And execute `composer dump-autoload`.
