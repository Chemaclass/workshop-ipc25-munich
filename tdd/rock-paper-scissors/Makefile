#!/bin/bash

help: ## Show this help message.
	@echo 'usage: make [target]'
	@echo
	@echo 'targets:'
	@egrep '^(.+)\:\ ##\ (.+)' ${MAKEFILE_LIST} | column -t -c 2 -s ':#'

build: ## Build the PHP container.
	UID="$(shell id -u)" GID="$(shell id -g)" docker-compose build

test: ## Run the tests.
	UID="$(shell id -u)" GID="$(shell id -g)" docker-compose up
