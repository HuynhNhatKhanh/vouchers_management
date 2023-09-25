* Các bước chạy project:
- Tạo database tên vouchers_management
- Download composer nếu chưa cài đặt
- Mở cmd chạy "git clone https://github.com/HuynhNhatKhanh/vouchers_management"
- Đổi env.example thành env và config host, user, password theo máy cá nhân
- Chạy "composer install"
- Chạy "php artisan key:generate"
- Chạy "php artisan l5-swagger:generate"
- Chạy "php artisan migrate"
- Chạy "php artisan serve"

* Test chức năng bằng Postman: Nhập các đường dẫn theo config của máy local
- Thêm voucher:
    + Vào Postman, chọn method post với url: http://.../api/vouchers
    + Phần body chọn raw->json và nhập theo mong muốn:
        {
            "code": "1ka",
            "type": "one",
            "start_date": "2023-9-2",
            "end_date": "2023-9-9",
            "status": "inactive",
            "description": "one, active",
            "batch_id": 2
        }
    + Sửa các body và test

- Chỉnh sửa voucher:
    + Vào Postman, chọn method put với url: http://.../api/vouchers/1
    + Phần body chọn raw->json và nhập chỉnh sửa các phần mong muốn:
        {
            "code": "1ka",
            "type": "one",
            "start_date": "2023-9-2",
            "end_date": "2023-9-9",
            "status": "inactive",
            "description": "one, active",
            "batch_id": 2
        }

- Xem thông tin voucher theo đợt, trước khi xem thì thêm các voucher có các batch_id giống nhau để test:
    + Vào Postman, chọn method get với url: http://.../api/batch/get-voucher-by-batch
    + Phần Params chọn key=batch_id và value=1

- Sử dụng voucher:
    + Vào Postman, chọn method post với url: http://.../api/voucher-user/use
    + Phần body chọn raw->json và nhập chỉnh sửa các phần mong muốn:
        {
            "code": "1",
            "fullname": "sasa",
            "email": "test1@gmail.com"
        }

* Xem chạy document bằng swagger: 
- Mở đường dẫn http://.../api/documentation và thực hiện các thao tác
