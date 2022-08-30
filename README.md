# NCU Open House Day System

## Environment

- Laravel 9: [Requirements](https://laravel.com/docs/9.x/deployment#server-requirements)
- MySQL 8

## Installation

```bash
git clone https://github.com/NCU-Open-House-Day/NCU-Open-House-Day-System.git NCU-Open-House-Day-System

cd NCU-Open-House-Day-System
```

### Development

```bash
composer install

cp .env.exapmple .env # setup variables
php artisan key:generate
php artisan migrate

npm install
npm run dev
```

#### Using Docker (Laravel Sail)

[Laravel Sail](https://laravel.com/docs/9.x/sail)

```bash
./vendor/bin/sail up -d
```

If you have problem with executing composer, artisan or npm commands with sail, you can use docker-compose instead.

```bash
docker-compose exec --user=sail laravel.test bash
```

If you use VS code as your editor, devcontainer is also available.

```bash
cp .devcontainer/devcontainer.json.example .devcontainer/devcontainer.json
```

#### Code Style

Prettier is the selected formatter.

Run the command below to format files.

```bash
npm run format
```

### Testing

PestPHP is used for testing.

Run the command below to execute tests.

```bash
# Run if database.sqlite is not created.
touch database/database.sqlite

./vendor/bin/pest
```

#### Laravel IDE Helper

Laravel IDE Helper is installed to improve code experiences.

Run the command below to create/update meta files.

```bash
composer dump-autoload

# Or run each command respectively.
php artisan ide-helper:generate
php artisan ide-helper:models -n
php artisan ide-helper:meta
```

### Production

```bash
composer install --no-dev --optimize

cp .env.exapmple .env # setup variables, set APP_DEBUG to false
php artisan key:generate
php artisan migrate

npm install --production
npm run prod
```
