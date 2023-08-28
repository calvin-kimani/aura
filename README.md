# Aura (Under Development)

Aura is an upcoming Laravel administration package designed to streamline and simplify the management of Laravel projects. While it's currently in active development, our goal is to create a comprehensive admin package that empowers developers with tools for efficient project management.

Please note that the features and information provided in this README reflect the intended goals of the Aura package. As development progresses, we will continuously update this README with more detailed information and usage instructions.

## Requirements

- PHP 8.0 or later
- Laravel Framework (as compatible with PHP version)
- Tailwind CSS (included in your Laravel project)

## Installation

To install the package in your Laravel project, you can use Composer:

```bash
composer require calvin-kimani/aura
```

Once the package is installed, you can publish its configuration file:

```bash
php artisan vendor:publish --tag=aura-config
```

## Features (Planned)
### Dynamic Table Display

Aura aims to provide a utility for dynamically displaying tables. With this feature, you'll be able to easily render tables with headers and data, enhancing the visualization of your data.

## Configuration
As development continues, you'll be able to customize the package's settings via the published configuration file (`config/aura.php`). The configuration will allow you to set options such as URL segments, pagination settings, and models.

### Configuration Fields

- `aura_url`: This field determines the URL segment used to access the admin dashboard. You can customize it to match your project's URL structure. Default: `'aura'`.

- `paginate`: Use this field to specify the number of records displayed per page in the dynamic tables. Adjust this value based on your preferences and data volume. Default: `100`.

- `models`: Configure models for the dynamic table feature. Each model entry should have the following fields:

- `model_name`: Set the full class name of the Eloquent model to be used in the dynamic table.

- `exclude_columns`: List the columns that you want to exclude from being displayed in the dynamic table. For example, sensitive columns like passwords can be excluded. Specify these columns in an array.

Here's an example configuration entry for the `models` field:

```php
'models' => [
    'user' => [
        'model_name' => 'App\Models\User',
        'exclude_columns' => ['password', 'two_factor_secret', 'two_factor_recovery_codes', 'pgp', 'created_at'],
    ],
    // Add more models as needed
]
```

## Getting Started
As of now, Aura is under active development and not yet suitable for production use. We encourage you to stay tuned for updates as we work to bring the package to maturity.

## Contributing
Contributions and feedback are welcome, even during the development phase. Feel free to share your thoughts, ideas, and suggestions by submitting issues or pull requests.

## License
Aura is open-source and is licensed under the MIT License.