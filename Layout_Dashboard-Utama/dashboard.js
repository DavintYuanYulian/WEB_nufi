// animasi pengajar
$(document).ready(function () {
    $('.slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $(".show-more-btn").click(function () {
        $('.slider').slick('slickSetOption', 'slidesToShow', 10, true);
        $(this).fadeOut(); 
    });
});

// animasi sambutan
document.addEventListener("DOMContentLoaded", () => {
    const animatedSection = document.querySelector(".animated-section");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target); 
            }
        });
    }, {
        threshold: 0.3 
    });

    observer.observe(animatedSection);
});

// animasi tentang kami 
document.addEventListener("DOMContentLoaded", () => {
    const animatedSections = document.querySelectorAll(".animated-section");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target); 
            }
        });
    }, {
        threshold: 0.3 
    });

    animatedSections.forEach(section => observer.observe(section));
});

    document.addEventListener("DOMContentLoaded", function () {
        const animatedSections = document.querySelectorAll(
            ".pengajar-section, .hubungi-kami-section, .berita-section"
        );

        const onScroll = () => {
            animatedSections.forEach((section) => {
                const sectionTop = section.getBoundingClientRect().top;
                const triggerBottom = window.innerHeight * 0.8;

                if (sectionTop < triggerBottom) {
                    section.classList.add("visible");
                }
            });
        };

        window.addEventListener("scroll", onScroll);
        onScroll(); 
    });

    // animasi lokasi
    document.addEventListener("DOMContentLoaded", function () {
        const lokasiSection = document.querySelector(".lokasi-kami-section");

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    lokasiSection.classList.add("show");
                    observer.unobserve(entry.target); 
                }
            });
        }, { threshold: 0.3 });

        observer.observe(lokasiSection);
    });

//    Temukan kami
    document.addEventListener("DOMContentLoaded", function () {
        const temukanSection = document.querySelector(".temukan-kami-section");

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    temukanSection.classList.add("show");
                    observer.unobserve(entry.target); 
                }
            });
        }, { threshold: 0.3 });

        observer.observe(temukanSection);
    });



