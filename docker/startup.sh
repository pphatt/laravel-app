#!/bin/bash
# shellcheck disable=SC2154
if [ -d "$project_name" ];
then
  php "$project_name"/artisan serve --host=0.0.0.0
else
  composer create-project laravel/laravel /var/www/html/"${project_name}"
  php "$project_name"/artisan serve --host=0.0.0.0
fi