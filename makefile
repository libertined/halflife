install:
	cp .env.example .env
	composer install
	php artisan config:cache

deploy:
	composer dump-autoload
	php artisan migrate:fresh --seed
