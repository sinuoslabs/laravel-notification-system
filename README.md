# Notification system design

Build notification system with laravel framework. This system will be implemented using redis, memcached for the cache, mailhog for our mail server and pgsql for the database

## How to run
First, you have to configure your `.env` file, following the example below. The host name must contain the name of the service configured in the `docker-compose.yml` file.
The docker management service used is [Laravel sail](https://laravel.com/docs/9.x/sail)

### Redis

```dotenv
REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

### Memcached

```dotenv
MEMCACHED_HOST=memcached
```

### PostgresSQL

```dotenv
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=laravel_notification_system
DB_USERNAME=homestead
DB_PASSWORD=homestead
```

### Mailhog

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

## Architecture design
