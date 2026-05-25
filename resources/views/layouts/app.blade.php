<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Hanna Travel - Khám Phá Những Hành Trình Kỳ Diệu')</title>
    <meta name="description" content="@yield('meta_description', 'Hanna Travel chuyên cung cấp các tour du lịch trong nước và quốc tế trọn gói chất lượng cao. Khám phá Sapa, Vịnh Hạ Long, Nhật Bản và nhiều điểm đến hấp dẫn khác.')">
    <meta name="keywords" content="du lich, dat tour du lich, tour du lich gia re, Sapa, Ha Long, Kyoto, Hanna Travel">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Hanna Travel - Khám Phá Những Hành Trình Kỳ Diệu')">
    <meta property="og:description" content="@yield('meta_description', 'Hanna Travel chuyên cung cấp các tour du lịch trong nước và quốc tế trọn gói chất lượng cao.')">
    <meta property="og:image" content="{{ asset('images/hero_bg.png') }}">
    <meta property="og:url" content="{{ request()->url() }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Session Success Toast Notification -->
    @if(session('success'))
        <div class="toast-notification" id="toastNotification">
            <div class="toast-content">
                <i class="fa-solid fa-circle-check toast-icon"></i>
                <div class="toast-message">
                    <h4>Thành Công!</h4>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
            <button class="toast-close" onclick="document.getElementById('toastNotification').remove()">&times;</button>
        </div>
    @endif

    <!-- Header Navigation -->
    <header class="main-header" id="mainHeader">
        <div class="container header-container">
            <a href="#" class="logo">
                <span class="logo-highlight">Hanna</span>Travel
            </a>
            <nav class="navbar" id="navbar">
                <a href="#hero" class="nav-link active">Trang Chủ</a>
                <a href="#destinations" class="nav-link">Điểm Đến</a>
                <a href="#packages" class="nav-link">Tour Nổi Bật</a>
                <a href="#services" class="nav-link">Dịch Vụ</a>
                <a href="#testimonials" class="nav-link">Đánh Giá</a>
                <a href="#contact" class="nav-link btn-contact">Liên Hệ</a>
            </nav>
            <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container footer-container">
            <div class="footer-info">
                <a href="#" class="footer-logo"><span class="logo-highlight">Hanna</span>Travel</a>
                <p class="footer-desc">Chúng tôi mang lại những trải nghiệm du lịch trọn vẹn, kết nối bạn với những vùng đất mới, con người mới và nền văn hóa đa dạng trên khắp thế giới.</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#" aria-label="Youtube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="footer-links">
                <h3>Khám Phá</h3>
                <ul>
                    <li><a href="#destinations">Điểm Đến Việt Nam</a></li>
                    <li><a href="#destinations">Du Lịch Nước Ngoài</a></li>
                    <li><a href="#packages">Tour Khuyến Mãi</a></li>
                    <li><a href="#services">Dịch Vụ Visa / Vé Máy Bay</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h3>Về Chúng Tôi</h3>
                <ul>
                    <li><a href="#">Giới Thiệu</a></li>
                    <li><a href="#">Chính Sách Bảo Mật</a></li>
                    <li><a href="#">Điều Khoản Dịch Vụ</a></li>
                    <li><a href="#">Liên Hệ Tuyển Dụng</a></li>
                </ul>
            </div>

            <div class="footer-contact" id="footerContact">
                <h3>Liên Hệ</h3>
                <ul class="contact-details">
                    <li><i class="fa-solid fa-location-dot"></i> Tòa nhà Hanna, Đường số 12, TP. Hồ Chí Minh</li>
                    <li><i class="fa-solid fa-phone"></i> +84 28 1234 5678</li>
                    <li><i class="fa-solid fa-envelope"></i> info@hannatravel.vn</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2026 Hanna Travel. Bản quyền thuộc về Công ty TNHH Công nghệ Hanna. Dự án thực tập Web Developer.</p>
            </div>
        </div>
    </footer>

    <!-- Booking Modal -->
    <div class="booking-modal" id="bookingModal">
        <div class="modal-content">
            <button class="close-modal" id="closeModal">&times;</button>
            <h2 class="modal-title">Đặt Tour Du Lịch</h2>
            <p class="modal-subtitle">Điền thông tin bên dưới để nhận tư vấn lộ trình chi tiết và ưu đãi tốt nhất.</p>
            <form id="bookingForm" action="{{ url('/booking') }}" method="POST" class="modal-form">
                @csrf
                <div class="form-group">
                    <label for="modal_name">Họ và Tên <span class="required">*</span></label>
                    <input type="text" id="modal_name" name="name" placeholder="Ví dụ: Nguyễn Văn A" required>
                </div>
                <div class="form-group-row">
                    <div class="form-group">
                        <label for="modal_phone">Số Điện Thoại <span class="required">*</span></label>
                        <input type="tel" id="modal_phone" name="phone" placeholder="Ví dụ: 0901234567" required>
                    </div>
                    <div class="form-group">
                        <label for="modal_email">Email <span class="required">*</span></label>
                        <input type="email" id="modal_email" name="email" placeholder="Ví dụ: user@example.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="modal_destination">Điểm Đến Mong Muốn</label>
                    <select id="modal_destination" name="destination">
                        <option value="Sapa">Sa Pa - Bản Cát Cát (3 Ngày 2 Đêm)</option>
                        <option value="Halong">Vịnh Hạ Long - Du thuyền 5 sao (2 Ngày 1 Đêm)</option>
                        <option value="Kyoto">Kyoto - Mùa hoa anh đào Nhật Bản (6 Ngày 5 Đêm)</option>
                        <option value="Other">Khác (Vui lòng ghi chú)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="modal_message">Yêu cầu đặc biệt</label>
                    <textarea id="modal_message" name="message" rows="3" placeholder="Ghi chú thêm về ngày khởi hành dự kiến, số người đi..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Gửi Yêu Cầu Tư Vấn</button>
            </form>
        </div>
    </div>

    <!-- Custom Script -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
