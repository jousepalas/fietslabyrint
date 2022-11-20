# fietslabyrint

Assessment build in Php - laravel framework

# Start the application

- composer install
- docker compose up --build
- npm install

# run the serve
php artisan serve

# run vite
npm run dev

# run migrations
php artisan migrate

# drop DB, run migrations and seed
php artisan migrate:fresh --seed

# run seed
php artisan db:seed

# run unit test
php vendor/bin/phpunit tests

# Application

- The application is a user management that's require a authenticated user to do the CRUD operations, including the soft delete.

Once logged it can list the users fetch from database and operate with the CRUD.