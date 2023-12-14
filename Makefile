run:
	php artisan serve
migrate-up: 
	php artisan migrate
migrate-down:
	php artisan migrate:rollback
seeding:
	php artisan db:seed