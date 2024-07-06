# Laravel 開発環境

## 構成

- Composer 2.7.7
- Mysql 8.0.36
- phpmyadmin
- nginx

## コマンド

### 1. プロジェクトをクローン

```shell
git clone https://github.com/makoto00000/laravel_dev_container.git
```

### 2. コンテナを起動

```shell
docker-compose up -d
```

### 3. コンテナに入る

```shell
docker-compose exec app bash
```

### 4. laravelインストール

```shell
composer create-project --prefer-dist laravel/laravel laravel-project "11.*"
```

`laravel-project`は適宜変更

変更した場合は、`nginx/default.conf`の3行目も変更する

```conf
  root /var/www/laravel-project/public;
```

### 5. 環境ファイル修正

`laravel-project/.env`を編集

```shell
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=password
```

`DB_DATABASE`は適宜変更

### 6. マイグレーション

```shell
cd laravel-project
php artisan migrate
```

### 7. アクセス

- Laravel:
<http://localhost:8000>
- phpmyadmin:
<http://localhost:8080>
