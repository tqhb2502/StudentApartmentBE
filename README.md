## Cài đặt package
    composer install

## Tạo key dự án
    php artisan key:generate

## Tạo database và kết nối
    Tạo database với tên student_apartment_db
    Duplicate tệp .env.example, đổi tên thành .env

## Migrate database
    php artisan migrate

## Chạy các file seeder tạo dữ liệu mẫu
    php artisan db:seed

## Chạy dự án
    php artisan serve
