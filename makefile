install:
	cp .env.example .env
	composer install
	php artisan config:cache

