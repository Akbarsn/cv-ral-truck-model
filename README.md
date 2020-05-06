# Information
1. There is CRU only
2. If you want to check the code its inside folder App/Http/Controller in file AdminController
3. The view inside folder Resource/Views

## How to Use
A. First Use
1. Clone this repository
```bash
git clone https://github.com/Akbarsn/hmpdfkub.git
```
2. Install dependecy
```bash
composer install
npm i
```
3. Make an .env file by copying .env.example
4. Generate key 
```bash
php artisan key:generate
```
5. Create database and set it environment in .env file
In environment or .env file there is several that need to be changed, that is DB_Database, DB_Username, DB_Password change it like your computer environment
6. Run the migration
```bash
php artisan migrate:refresh --seed
```
7. Run the application
```bash
php artisan serve
```
