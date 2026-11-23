/* =========================================================
   NIRWANA FLORIST — app.js
   ========================================================= */

// ----- Navbar scroll effect -----
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// ----- Hamburger / Mobile menu -----
const hamburger   = document.getElementById('hamburger');
const mobileMenu  = document.getElementById('mobileMenu');

function closeMobileMenu() {
    mobileMenu.classList.remove('open');
}

if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('open');
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
        if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
            closeMobileMenu();
        }
    });
}

// Expose to inline onclick handlers in blade templates
window.closeMobileMenu = closeMobileMenu;

// ----- Scroll reveal -----
const revealObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, i * 80);
                revealObserver.unobserve(entry.target);
            }
        });
    },
    { threshold: 0.12 }
);

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// ----- WhatsApp order helper -----
function orderWA(productName, price) {
    const msg = encodeURIComponent(
        `Halo Nirwana Florist! 🌸\n\nSaya ingin memesan:\n*${productName}*\n${price}\n\nMohon informasi lebih lanjut. Terima kasih!`
    );
    window.open(`https://wa.me/62895629253800?text=${msg}`, '_blank');
}

window.orderWA = orderWA;

// ----- Smooth active nav link -----
const sections = document.querySelectorAll('section[id], footer[id]');
const navLinks = document.querySelectorAll('.navbar-nav li a');

const sectionObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${entry.target.id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    },
    { rootMargin: '-50% 0px -50% 0px' }
);

sections.forEach(s => sectionObserver.observe(s));
