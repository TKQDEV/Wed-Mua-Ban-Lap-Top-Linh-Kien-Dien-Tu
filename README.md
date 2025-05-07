## Mô tả 

Hệ thống thương mại điện tử chuyên cung cấp các sản phẩm công nghệ thông tin, thiết bị điện tử và linh kiện máy tính đơn giản sử dụng Laravel áp dụng mô hình Repository-Service Layer Pattern. Hệ thống có các chức năng cơ bản để quản lý sản phẩm, danh mục, đơn hàng và người dùng.

## Yêu cầu kỹ thuật

1. **Framework**: Laravel (phiên bản mới nhất)
2. **Design Pattern**: Repository-Service Layer
3. **Database**: MySQL
4. **Frontend**: Blade Template

## Các chức năng cho người dùng:
1. Giỏ hàng và Mua hàng
•	Giỏ hàng: Người dùng có thể thêm, chỉnh sửa hoặc xóa sản phẩm trong giỏ hàng, xem tổng số tiền, phí vận chuyển, mã giảm giá (nếu có).
•	Quy trình thanh toán: Người dùng điền thông tin giao hàng, phương thức thanh toán và xác nhận đơn hàng.
2. Thanh toán Online
•	Phương thức thanh toán: Hệ thống hỗ trợ thanh toán qua thẻ tín dụng, ví điện tử, chuyển khoản ngân hàng, và thanh toán khi nhận hàng (COD).
•	Bảo mật thanh toán: Hệ thống sử dụng mã hóa SSL và bảo mật tài khoản cho các giao dịch tài chính.
•	Xác nhận thanh toán: Người dùng nhận thông báo qua email hoặc trong ứng dụng khi thanh toán thành công.
3. Vận chuyển ViettelPost
•	Lựa chọn phương thức vận chuyển: Người dùng có thể chọn các dịch vụ giao hàng của ViettelPost như giao hàng tiết kiệm, giao nhanh.
•	Theo dõi đơn hàng: Cung cấp mã vận đơn để khách hàng theo dõi trạng thái giao hàng.
•	Tính phí vận chuyển: Hệ thống tự động tính phí vận chuyển dựa trên địa chỉ và loại sản phẩm.
•	Thông báo giao hàng: Gửi thông báo khi đơn hàng được giao cho ViettelPost và khi có thay đổi trạng thái.
4. Người dùng (Đăng nhập, Đăng ký và Quản lý tài khoản)
•	Đăng ký tài khoản: Người dùng có thể tạo tài khoản mới bằng email, số điện thoại hoặc tài khoản mạng xã hội.
•	Đăng nhập: Người dùng có thể đăng nhập nhanh qua tài khoản mạng xã hội hoặc bằng email/số điện thoại và mật khẩu.
•	Cập nhật thông tin tài khoản: Người dùng có thể chỉnh sửa thông tin cá nhân, địa chỉ giao hàng, phương thức thanh toán.
•	Quên mật khẩu: Hệ thống hỗ trợ khôi phục mật khẩu qua email hoặc SMS.
•	Phân quyền (Admin, User)
5. Xem Lịch sử Mua hàng và Truy vấn Đơn hàng
•	Lịch sử đơn hàng: Người dùng có thể xem các đơn hàng đã đặt trước đó, chi tiết sản phẩm, trạng thái thanh toán, trạng thái vận chuyển.
•	Truy vấn đơn hàng: Người dùng có thể nhập mã đơn hàng để theo dõi tình trạng hoặc tìm kiếm đơn hàng theo ngày đặt hoặc trạng thái.
•	Thông báo thay đổi trạng thái: Hệ thống gửi thông báo khi đơn hàng có thay đổi trạng thái (đang xử lý, đang vận chuyển, đã giao…).
•	Admin có thể cập nhật trạng thái đơn hàng
6. Mã Giảm giá và Khuyến mãi
•	Áp dụng mã giảm giá: Người dùng có thể nhập mã giảm giá trong quá trình thanh toán để nhận ưu đãi.
•	Chương trình khuyến mãi: Hệ thống tự động áp dụng các chương trình giảm giá theo sự kiện đặc biệt hoặc nhóm sản phẩm.
•	Thông báo về khuyến mãi: Người dùng nhận thông báo về các chương trình giảm giá qua email hoặc thông báo trong ứng dụng.
7. Quản lý Sản phẩm
•	Danh mục sản phẩm: Các sản phẩm được phân loại theo nhóm (máy tính, linh kiện, thiết bị điện tử…).
•	Thông tin sản phẩm: Cung cấp các thông tin chi tiết như tên, mô tả, hình ảnh, giá cả, tính năng kỹ thuật.
•	Quản lý tồn kho: Hệ thống theo dõi số lượng sản phẩm trong kho và tự động cập nhật khi có đơn hàng hoặc nhập hàng mới.
•	Admin: Quản lý sản phẩm(thêm, sửa, xóa)

## Các bước triển khai

### Bước 1: Thiết lập dự án và cấu trúc Repository-Service

1. Tạo các Interface cho Repository:
2. Tạo các Repository tương ứng:
3. Tạo các Interface cho Service:
4. Tạo các Service tương ứng:
5. Cấu hình RepositoryServiceProvider để bind các Interface với Implementation

### Bước 2: Thiết kế database
1. Tạo migration cho các bảng:
'User'
'Cart'
'CartItem'
'Order'
'OrderDetail'
'Shipping'
'Payment'
'Product'
'Category'
'Brand'
'Review'
'Promotion'
'ProductPromotion'

2. Định nghĩa các relationship giữa các Model

### Bước 3: Xây dựng tính năng
1. Authentication (đăng ký, đăng nhập và Quản lý tài khoản)
2. Giỏ hàng và Mua hàng
3. Thanh toán Online
4. Vận chuyển ViettelPost
5. Xem Lịch sử Mua hàng và Truy vấn Đơn hàng
6. Mã Giảm giá và Khuyến mãi
7. Quản lý Sản phẩm
8. Admin dashboard

### Bước 4: Testing





