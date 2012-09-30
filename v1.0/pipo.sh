#!/bin/bash

sudo chown -R marc:staff app/cache/
php app/console assetic:dump --env=prod --no-debug
php app/console assetic:dump --env=dev --no-debug
php app/console cache:clear
php app/console cache:clear --env=prod
sudo chown -R _www:staff app/cache/
