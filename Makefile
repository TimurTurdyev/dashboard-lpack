.DEFAULT_GOAL := help

PHP_BIN := $(shell if [ -f /opt/php84/bin/php ]; then echo /opt/php84/bin/php; else echo /opt/homebrew/bin/php; fi)

COMPOSER_BIN := $(shell \
    if [ -f /var/www/stat_optopac_usr/data/composer.phar ]; then \
        echo "$(PHP_BIN) /var/www/stat_optopac_usr/data/composer.phar"; \
    elif [ -f /usr/local/bin/composer ]; then \
        echo "$(PHP_BIN) /usr/local/bin/composer"; \
    elif [ -f /opt/homebrew/bin/composer ]; then \
        echo "$(PHP_BIN) /opt/homebrew/bin/composer"; \
    else \
        echo composer; \
    fi)

update: ## Git pull and update dependencies
	git reset --hard HEAD
	git clean -d -f
	git pull
	@$(eval COMMIT_HASH := $(shell git rev-parse --short HEAD))
	@echo "Записываем хеш коммита $(COMMIT_HASH) в .env"
	@if grep -q '^COMMIT_HASH=' .env; then \
		sed -i "s/^COMMIT_HASH=.*/COMMIT_HASH=$(COMMIT_HASH)/" .env; \
	else \
		echo "COMMIT_HASH=$(COMMIT_HASH)" >> .env; \
	fi
	$(COMPOSER_BIN) install --no-dev
	$(PHP_BIN) $(FRONT_PATH)/artisan optimize:clear
	$(PHP_BIN) $(FRONT_PATH)/artisan optimize


.PHONY: help
help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-25s\033[0m %s\n", $$1, $$2}'
