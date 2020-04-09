init: docker-down-clear app-clear docker-pull docker-build docker-up app-init
stop: docker-down-clear
app-init: app-composer-install  app-assets-install app-oauth-keys app-ready

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-build:
	docker-compose build

docker-pull:
	docker-compose pull


app-composer-install:
	docker-compose run --rm app-php-cli composer install

app-assets-install:
	docker-compose run --rm app-node yarn install
	docker-compose run --rm app-node npm rebuild node-sass

app-oauth-keys:
	docker-compose run --rm app-php-cli mkdir -p var/oauth
	docker-compose run --rm app-php-cli openssl genrsa -out var/oauth/private.key 2048
	docker-compose run --rm app-php-cli openssl rsa -in var/oauth/private.key -pubout -out var/oauth/public.key
	docker-compose run --rm app-php-cli chmod 644 var/oauth/private.key var/oauth/public.key

app-wait-db:
	until docker-compose exec -T app-postgres pg_isready --timeout=0 --dbname=app ; do sleep 1 ; done

app-clear:
	docker run --rm -v ${PWD}/app:/app --workdir=/app alpine rm -f .ready
	
app-ready:
	docker run --rm -v ${PWD}/app:/app --workdir=/app alpine touch .ready