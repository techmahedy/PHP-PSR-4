# PHP PSR-4
Step 1: php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
Step 2: ls | grep composer
Step 3: php composer-setup.php
Step 4: php composer.phar -v

Move it globally 
mv composer.phar /usr/local/bin/composer & check again
composer -v

Setup oh-unit on composer
composer require --dev phpunit/phpunit ^7


Setup composer on your project
composer self-update
composer dump-autoload -o
