# fashionablylate

## 環境構築
１.　docker-compose up -d build

### Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .envファイルの環境変数を変更  
.env  
DB_CONNECTION=mysql  
DB_HOST=mysql  
DB_PORT=3306  
DB_DATABASE=laravel_db  
DB_USERNAME=laravel_user  
DB_PASSWORD=laravel_pass  
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seeed

## 使用技術
1. PHP 8.2.8
2. Laravel 8.83.27
3. MySQL 8.0.26
4. nginx 1.21.1
5. phpmyadmin 5.2.1
6. DockerCompose 2.27.1

## ER図
![ER](https://github.com/user-attachments/assets/95b500be-88a7-417f-8502-557b33d036cc)

## URL
* 開発環境：http://localhost/
* phpmyadmin : http://localhost:8080/