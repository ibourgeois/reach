# Reach

Reach is a Laravel package that provides a RESTful API to manage contacts and contact lists. You can create new lists and add new contacts to lists as well as track the status of a subscription.

## Installation

To install the package, you can use Composer. Run the following commands in your terminal:

```bash
composer require ibourgeois/reach
```

Then, you can run the database migrations to create the necessary tables:

```bash
php artisan migrate
```

> You can also publish the migrations if you want to customize them:

```bash
php artisan vendor:publish --provider="iBourgeois\Reach\Providers\ReachServiceProvider" --tag="migrations"
```

## License

This package is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.
