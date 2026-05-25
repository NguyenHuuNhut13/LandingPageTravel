@extends('layouts.app')

@section('title', 'Hanna Travel - Khám Phá Những Hành Trình Kỳ Diệu')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" id="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <span class="hero-tagline">Kiến Tạo Hành Trình Riêng Của Bạn</span>
                <h1 class="hero-title">Khám Phá Thế Giới Rộng Lớn Cùng <span class="text-highlight">Hanna Travel</span></h1>
                <p class="hero-description">Trải nghiệm những kỳ quan thiên nhiên kỳ vĩ, những nét văn hóa bản địa độc đáo và dịch vụ lữ hành trọn gói cao cấp từ các chuyên gia.</p>
                <div class="hero-actions">
                    <button class="btn btn-primary btn-lg open-booking" data-destination="Sapa">Khám Phá Ngay</button>
                    <a href="#packages" class="btn btn-outline btn-lg">Xem Các Tour</a>
                </div>
            </div>
            
            <!-- Quick Search Bar -->
            <div class="search-bar-container">
                <form class="search-bar-form" id="quickSearchForm">
                    <div class="search-input-group">
                        <i class="fa-solid fa-location-dot input-icon"></i>
                        <div class="input-details">
                            <label for="search_dest">Điểm đến</label>
                            <input type="text" id="search_dest" placeholder="Bạn muốn đi đâu?" required>
                        </div>
                    </div>
                    <div class="search-input-group">
                        <i class="fa-solid fa-calendar input-icon"></i>
                        <div class="input-details">
                            <label for="search_date">Thời gian</label>
                            <input type="date" id="search_date" required>
                        </div>
                    </div>
                    <div class="search-input-group">
                        <i class="fa-solid fa-user-group input-icon"></i>
                        <div class="input-details">
                            <label for="search_guests">Số người</label>
                            <select id="search_guests">
                                <option value="1">1 Người</option>
                                <option value="2" selected>2 Người</option>
                                <option value="3-5">3 - 5 Người</option>
                                <option value="6+">Trên 6 Người</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-search">
                        <i class="fa-solid fa-magnifying-glass"></i> Tìm Kiếm
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section class="destinations-section" id="destinations">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Bộ Sưu Tập Điểm Đến</span>
                <h2 class="section-title">Điểm Đến Yêu Thích Nhất</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="destinations-grid">
                <!-- Dest 1 -->
                <div class="destination-card">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/dest_sapa.png') }}" alt="Sapa - Thung lũng mờ sương" class="card-img">
                        <span class="card-badge">Trong Nước</span>
                    </div>
                    <div class="card-content">
                        <h3>Sapa - Lào Cai</h3>
                        <p class="card-desc">Khám phá vẻ đẹp kỳ vĩ của ruộng bậc thang, đỉnh Fansipan hùng vĩ và văn hóa các dân tộc thiểu số miền Tây Bắc.</p>
                        <div class="card-footer">
                            <span class="price-from">Từ <b>2.450.000đ</b></span>
                            <button class="btn btn-text open-booking" data-destination="Sapa">Đặt tour <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Dest 2 -->
                <div class="destination-card">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/dest_halong.png') }}" alt="Vịnh Hạ Long - Kỳ quan thế giới" class="card-img">
                        <span class="card-badge">Trong Nước</span>
                    </div>
                    <div class="card-content">
                        <h3>Vịnh Hạ Long - Quảng Ninh</h3>
                        <p class="card-desc">Trải nghiệm du thuyền cao cấp 5 sao giữa hàng nghìn đảo đá vôi xanh ngọc, hang động kỳ ảo của di sản thiên nhiên thế giới.</p>
                        <div class="card-footer">
                            <span class="price-from">Từ <b>3.200.000đ</b></span>
                            <button class="btn btn-text open-booking" data-destination="Halong">Đặt tour <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Dest 3 -->
                <div class="destination-card">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('images/dest_kyoto.png') }}" alt="Kyoto - Cổ kính Nhật Bản" class="card-img">
                        <span class="card-badge">Quốc Tế</span>
                    </div>
                    <div class="card-content">
                        <h3>Kyoto - Nhật Bản</h3>
                        <p class="card-desc">Ghé thăm xứ sở hoa anh đào, trải nghiệm nét cổ kính tĩnh lặng của đền chùa, cổng Torii huyền thoại và văn hóa Geisha đặc sắc.</p>
                        <div class="card-footer">
                            <span class="price-from">Từ <b>28.900.000đ</b></span>
                            <button class="btn btn-text open-booking" data-destination="Kyoto">Đặt tour <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tour Packages Section -->
    <section class="packages-section" id="packages">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Tour Ưu Đãi Đặc Biệt</span>
                <h2 class="section-title">Gói Tour Bán Chạy Nhất</h2>
                <div class="section-divider"></div>
            </div>

            <div class="packages-list">
                <!-- Package Item 1 -->
                <div class="package-item">
                    <div class="package-media">
                        <img src="{{ asset('images/dest_sapa.png') }}" alt="Tour Sapa">
                        <span class="package-discount">-15%</span>
                    </div>
                    <div class="package-info">
                        <div class="package-meta">
                            <span><i class="fa-regular fa-clock"></i> 3 Ngày 2 Đêm</span>
                            <span><i class="fa-regular fa-user"></i> Tối đa: 15 người</span>
                            <span class="rating"><i class="fa-solid fa-star"></i> 4.9 (120 đánh giá)</span>
                        </div>
                        <h3>Tour Sa Pa - Cát Cát - Fansipan Cáp Treo</h3>
                        <p class="package-details">Hành trình khám phá Tây Bắc trọn gói bao gồm vé xe giường nằm chất lượng cao từ Hà Nội, khách sạn 4 sao trung tâm, vé cáp treo Fansipan và hướng dẫn viên bản địa suốt tuyến.</p>
                        <div class="package-price-row">
                            <div class="price-box">
                                <span class="old-price">2.900.000đ</span>
                                <span class="current-price">2.450.000đ <small>/ người</small></span>
                            </div>
                            <button class="btn btn-primary open-booking" data-destination="Sapa">Đăng Ký Ngay</button>
                        </div>
                    </div>
                </div>

                <!-- Package Item 2 -->
                <div class="package-item">
                    <div class="package-media">
                        <img src="{{ asset('images/dest_halong.png') }}" alt="Tour Hạ Long">
                        <span class="package-discount">-10%</span>
                    </div>
                    <div class="package-info">
                        <div class="package-meta">
                            <span><i class="fa-regular fa-clock"></i> 2 Ngày 1 Đêm</span>
                            <span><i class="fa-regular fa-user"></i> Tối đa: 25 người</span>
                            <span class="rating"><i class="fa-solid fa-star"></i> 4.8 (85 đánh giá)</span>
                        </div>
                        <h3>Du Thuyền 5 Sao Vịnh Hạ Long - Vịnh Lan Hạ</h3>
                        <p class="package-details">Trải nghiệm đẳng cấp trên du thuyền hiện đại sang trọng bậc nhất, tham gia các hoạt động chèo thuyền kayak, thăm hang Sửng Sốt, lớp học nấu ăn trên boong và thưởng thức buffet hải sản cao cấp.</p>
                        <div class="package-price-row">
                            <div class="price-box">
                                <span class="old-price">3.550.000đ</span>
                                <span class="current-price">3.200.000đ <small>/ người</small></span>
                            </div>
                            <button class="btn btn-primary open-booking" data-destination="Halong">Đăng Ký Ngay</button>
                        </div>
                    </div>
                </div>

                <!-- Package Item 3 -->
                <div class="package-item">
                    <div class="package-media">
                        <img src="{{ asset('images/dest_kyoto.png') }}" alt="Tour Nhật Bản">
                        <span class="package-discount">Bán Chạy</span>
                    </div>
                    <div class="package-info">
                        <div class="package-meta">
                            <span><i class="fa-regular fa-clock"></i> 6 Ngày 5 Đêm</span>
                            <span><i class="fa-regular fa-user"></i> Tối đa: 20 người</span>
                            <span class="rating"><i class="fa-solid fa-star"></i> 5.0 (210 đánh giá)</span>
                        </div>
                        <h3>Tour Nhật Bản Mùa Hoa Anh Đào: Tokyo - Fuji - Kyoto</h3>
                        <p class="package-details">Hành trình vàng ngắm hoa anh đào nở rộ tại Nhật Bản. Trọn gói vé máy bay khứ hồi Vietnam Airlines, khách sạn 3-4 sao, trải nghiệm tàu siêu tốc Shinkansen, tắm suối nước nóng Onsen truyền thống.</p>
                        <div class="package-price-row">
                            <div class="price-box">
                                <span class="old-price">31.500.000đ</span>
                                <span class="current-price">28.900.000đ <small>/ người</small></span>
                            </div>
                            <button class="btn btn-primary open-booking" data-destination="Kyoto">Đăng Ký Ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Thế Mạnh Của Hanna Travel</span>
                <h2 class="section-title">Tại Sao Nên Chọn Chúng Tôi?</h2>
                <div class="section-divider"></div>
            </div>

            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-box">
                    <div class="service-icon"><i class="fa-solid fa-wallet"></i></div>
                    <h3>Giá Cả Tốt Nhất</h3>
                    <p>Cam kết mức giá tốt nhất thị trường cùng nhiều chương trình ưu đãi, tích lũy điểm thưởng hấp dẫn.</p>
                </div>
                <!-- Service 2 -->
                <div class="service-box">
                    <div class="service-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h3>Bảo Hiểm Trọn Gói</h3>
                    <p>Mọi hành trình của bạn đều được bảo hiểm du lịch quốc tế và nội bộ bảo vệ lên tới 100.000.000đ.</p>
                </div>
                <!-- Service 3 -->
                <div class="service-box">
                    <div class="service-icon"><i class="fa-solid fa-user-tie"></i></div>
                    <h3>Hướng Dẫn Viên Tận Tâm</h3>
                    <p>Đội ngũ hướng dẫn viên giàu kinh nghiệm, am hiểu sâu sắc văn hóa địa phương và cực kỳ thân thiện.</p>
                </div>
                <!-- Service 4 -->
                <div class="service-box">
                    <div class="service-icon"><i class="fa-solid fa-headset"></i></div>
                    <h3>Hỗ Trợ 24/7</h3>
                    <p>Hotline hỗ trợ khẩn cấp hoạt động liên tục 24 giờ mỗi ngày để giải quyết mọi sự cố phát sinh của khách hàng.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Phản Hồi Từ Khách Hàng</span>
                <h2 class="section-title font-white">Khách Hàng Nói Gì Về Hanna Travel</h2>
                <div class="section-divider"></div>
            </div>

            <div class="testimonials-slider-container">
                <div class="testimonials-slider" id="testimonialsSlider">
                    <!-- Slide 1 -->
                    <div class="testimonial-slide active">
                        <div class="client-avatar"><i class="fa-solid fa-user-astronaut"></i></div>
                        <div class="client-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Tôi đã có chuyến đi Sapa vô cùng trọn vẹn cùng gia đình vào tháng trước. Dịch vụ xe đưa đón êm ái, khách sạn đẹp, hướng dẫn viên thì nhiệt tình chu đáo cực kỳ. Nhất định sẽ tiếp tục chọn Hanna Travel cho kỳ nghỉ tới!"</p>
                        <h4 class="client-name">Anh Minh Hoàng</h4>
                        <span class="client-job">Quản lý Dự án, Hà Nội</span>
                    </div>

                    <!-- Slide 2 -->
                    <div class="testimonial-slide">
                        <div class="client-avatar"><i class="fa-solid fa-user-ninja"></i></div>
                        <div class="client-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Chuyến du thuyền 5 sao tại Hạ Long thực sự mang lại trải nghiệm đẳng cấp vượt mong đợi. Mọi thứ từ phòng ốc, đồ ăn cho tới các hoạt động giải trí đều được sắp xếp tỉ mỉ, chu đáo. Cảm ơn Hanna!"</p>
                        <h4 class="client-name">Chị Thu Thảo</h4>
                        <span class="client-job">Designer, TP. HCM</span>
                    </div>
                </div>

                <div class="slider-dots" id="sliderDots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Call to Action / Contact Form Section -->
    <section class="contact-section" id="contact">
        <div class="container contact-container">
            <div class="contact-text-box">
                <h2>Bắt Đầu Lên Kế Hoạch Cho Chuyến Đi Ngay Hôm Nay!</h2>
                <p>Để lại thông tin liên hệ, chuyên viên tư vấn của Hanna Travel sẽ gọi lại ngay lập tức để thiết kế lộ trình tour riêng phù hợp với mong muốn và ngân sách của bạn.</p>
                <div class="quick-stats">
                    <div class="stat-item">
                        <h3>10k+</h3>
                        <p>Khách hàng hài lòng</p>
                    </div>
                    <div class="stat-item">
                        <h3>50+</h3>
                        <p>Điểm đến hấp dẫn</p>
                    </div>
                    <div class="stat-item">
                        <h3>98%</h3>
                        <p>Đánh giá 5 sao</p>
                    </div>
                </div>
            </div>

            <div class="contact-form-box">
                <h3>Đăng Ký Tư Vấn Miễn Phí</h3>
                <form id="contactForm" action="{{ url('/contact') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Họ và tên của bạn" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Địa chỉ email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Số điện thoại" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="4" placeholder="Lời nhắn hoặc yêu cầu chi tiết (nếu có)"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Gửi Thông Tin</button>
                </form>
            </div>
        </div>
    </section>
@endsection
