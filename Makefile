PHP_CONTAINER_NAME=php

ps:
	docker-compose ps

up:
	docker-compose up -d

down:
	docker-compose down --volumes --remove-orphans --rmi local

restart: down up

exec\:php:
	docker-compose exec $(PHP_CONTAINER_NAME) $(ARGV)

exec\:php\:bash:
	make exec:php ARGV=bash

cache\:clear\:prod:
	make exec:php ARGV="php app/console cache:clear --env=prod"

cache\:clear\:dev:
	make exec:php ARGV="php app/console cache:clear --env=dev"

# В Symphony многое кэшируется (конфиг, шаблоныи т.д)
# Поэтому после их изменений, нужно чистить конфиг
cache\:clear:
	make cache:clear:prod
	make cache:clear:dev
