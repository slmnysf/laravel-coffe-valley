# laravel-coffe-valley

Steps to run the application:

1. Make sure the computer used has been installed php and composer
2. Make sure the MySQL server is running
3. Create a *.env* file, you can copy the contents of the *.env.example* file
4. Run the command to install composer:
```bash
composer install
```
5. Run the command:
```bash
php php artisan key:generate
```
6. Run the command to migrate:
```bash
php artisan migrate
```
7. Run the command to seed:
```bash
php artisan db:seed
```
8. Run the command:
```bash
php artisan storage:link
```
9. Run the command to run the application:
```bash
php artisan serve
```
10. Login with this credential:
- User ID: admin
- Password: admin123

Created By Salman Yusuf
