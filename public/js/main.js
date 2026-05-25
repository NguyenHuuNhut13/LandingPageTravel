document.addEventListener('DOMContentLoaded', () => {
    
    // ==========================================
    // 1. HEADER SCROLL EFFECT & NAV LINKS ACTIVE
    // ==========================================
    const header = document.getElementById('mainHeader');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');

    const handleScroll = () => {
        // Toggle Scrolled Class on Header
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        // Active State for Navbar Links based on scroll position
        let currentSectionId = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSectionId = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSectionId}`) {
                link.classList.add('active');
            }
        });
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Trigger once on load

    // ==========================================
    // 2. MOBILE MENU TOGGLE
    // ==========================================
    const menuToggle = document.getElementById('menuToggle');
    const navbar = document.getElementById('navbar');

    menuToggle.addEventListener('click', () => {
        navbar.classList.toggle('active');
        const icon = menuToggle.querySelector('i');
        if (navbar.classList.contains('active')) {
            icon.className = 'fa-solid fa-xmark';
        } else {
            icon.className = 'fa-solid fa-bars';
        }
    });

    // Close menu when clicking on any link
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navbar.classList.remove('active');
            menuToggle.querySelector('i').className = 'fa-solid fa-bars';
        });
    });

    // ==========================================
    // 3. BOOKING MODAL LOGIC
    // ==========================================
    const bookingModal = document.getElementById('bookingModal');
    const closeModalBtn = document.getElementById('closeModal');
    const bookingForm = document.getElementById('bookingForm');
    const destinationSelect = document.getElementById('modal_destination');

    // Open Modal Triggers
    document.querySelectorAll('.open-booking').forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const preferredDest = button.getAttribute('data-destination');
            
            // Auto select value in dropdown if exists
            if (preferredDest && destinationSelect) {
                // Find matching option
                for (let i = 0; i < destinationSelect.options.length; i++) {
                    if (destinationSelect.options[i].value === preferredDest) {
                        destinationSelect.selectedIndex = i;
                        break;
                    }
                }
            }

            bookingModal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Lock background scroll
        });
    });

    // Close Modal Trigger
    const closeModal = () => {
        bookingModal.classList.remove('active');
        document.body.style.overflow = ''; // Unlock scroll
        bookingForm.reset();
    };

    closeModalBtn.addEventListener('click', closeModal);
    
    // Close Modal when clicking outside the content area
    bookingModal.addEventListener('click', (e) => {
        if (e.target === bookingModal) {
            closeModal();
        }
    });

    // Form submissions are now handled synchronously by Laravel Session Redirect, 
    // letting the browser POST request submit naturally to the server.

    // Handle Quick Search Form Submission
    const quickSearchForm = document.getElementById('quickSearchForm');
    if (quickSearchForm) {
        quickSearchForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const destinationVal = document.getElementById('search_dest').value;
            // Pre-fill modal destination and open booking
            if (destinationSelect) {
                destinationSelect.value = 'Other';
                const messageArea = document.getElementById('modal_message');
                if (messageArea) {
                    messageArea.value = `Tìm kiếm điểm đến: ${destinationVal}. Khởi hành: ${document.getElementById('search_date').value}. Số khách: ${document.getElementById('search_guests').value}`;
                }
            }
            bookingModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    }

    // ==========================================
    // 4. TESTIMONIALS SLIDER LOGIC
    // ==========================================
    const slider = document.getElementById('testimonialsSlider');
    const dots = document.querySelectorAll('#sliderDots .dot');
    let currentSlide = 0;
    const slides = document.querySelectorAll('.testimonial-slide');
    const slideCount = slides.length;
    let sliderInterval;

    const showSlide = (index) => {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
    };

    const nextSlide = () => {
        let next = currentSlide + 1;
        if (next >= slideCount) next = 0;
        showSlide(next);
    };

    const startSlider = () => {
        sliderInterval = setInterval(nextSlide, 5000); // Autoplay every 5s
    };

    const stopSlider = () => {
        clearInterval(sliderInterval);
    };

    // Dot click triggers
    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            stopSlider();
            const slideIndex = parseInt(dot.getAttribute('data-slide'));
            showSlide(slideIndex);
            startSlider();
        });
    });

    // Start Autoplay
    startSlider();

    // Auto-hide session toast notification after 5 seconds
    const toast = document.getElementById('toastNotification');
    if (toast) {
        setTimeout(() => {
            toast.style.transform = 'translateX(120%)';
            toast.style.opacity = '0';
            toast.style.transition = 'all 0.5s ease-in-out';
            setTimeout(() => toast.remove(), 500);
        }, 5000);
    }
});
