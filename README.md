Clone this project
Run composer install
Run yarn install
Run cp .env .env.local
Modify DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name with the username and password of mysql/mariadb and change the name of database with the one you want.
Run  php bin/console doctrine:database:create
Run php bin/console make:migration
Run php bin/console doctrine:migration:migrate
Run php bin/console doctrine:fixtures:load