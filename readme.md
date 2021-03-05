# notifier

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require jackwestin/notifier
```

## Usage

Jackwestin\Notifier\Facades\Discord::content("This is a test message from our new discord notifier package!")
    ->embeds(['title' => 'Adding SOME TITILE IS GOOD', 'description' => 'This is a test message from our new discord notifier package!'])
    ->send()

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

- [author name][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jackwestin/notifier.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jackwestin/notifier.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jackwestin/notifier/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/jackwestin/notifier
[link-downloads]: https://packagist.org/packages/jackwestin/notifier
[link-travis]: https://travis-ci.org/jackwestin/notifier
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/jackwestin
[link-contributors]: ../../contributors
