test:
	docker compose run test composer install
	docker compose run test ./vendor/bin/phpunit tests/

testhost:
	composer install --ignore-platform-reqs
	bash -c "vendor/bin/phpunit tests/"
