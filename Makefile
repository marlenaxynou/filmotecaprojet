# Path to the docker-compose file
DOCKER_COMPOSE_FILEPATH=.docker/docker-compose.yaml
DOCKER_PHP_CONTAINER=filmoteca_php

# Start the containers in the background
up:
	# Start the containers in detached mode
	docker-compose -f $(DOCKER_COMPOSE_FILEPATH) up -d

# Stop the containers
down:
	# Stop all containers
	docker-compose -f $(DOCKER_COMPOSE_FILEPATH) down

# Recreate the containers (useful after modifying the Dockerfile)
build:
	# Rebuild and restart containers
	docker-compose -f $(DOCKER_COMPOSE_FILEPATH) up --build -d

# View the logs of the containers
logs:
	# Show logs for all containers
	docker-compose -f $(DOCKER_COMPOSE_FILEPATH) logs

# Start the containers (alias for up)
start: up

# Stop the containers (alias for down)
stop: down

# Run composer install
composer-install:
	# Run composer install inside the PHP container
	docker exec $(DOCKER_PHP_CONTAINER) composer install

# Regenerate Composer autoload files
dump-autoload:
	# Regenerate the Composer autoload files
	docker exec $(DOCKER_PHP_CONTAINER) composer dump-autoload

# Access the container shell
shell:
	# Open an interactive bash shell in the PHP container
	docker exec -it $(DOCKER_PHP_CONTAINER) /bin/bash

# Inspect the container
inspect:
	# Inspect the PHP container
	docker inspect $(DOCKER_PHP_CONTAINER)
