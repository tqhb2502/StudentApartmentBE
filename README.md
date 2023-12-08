## Cài đặt package
    composer install

## Tạo key
    php artisan key:generate

## Tạo database và kết nối
    Tạo database với tên student_apartment_db
    Duplicate tệp .env.example, đổi tên thành .env

## Migrate và seed dữ liệu
    php artisan migrate --seed

## Chạy project
    php artisan serve
