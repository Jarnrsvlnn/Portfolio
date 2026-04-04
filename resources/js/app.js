import './bootstrap';

const elements = document.querySelectorAll(".animate-on-scroll");

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('opacity-100')
        }
        else {
            entry.target.classList.remove('opacity-100')
        }
    })
});

elements.forEach(item => observer.observe(item));