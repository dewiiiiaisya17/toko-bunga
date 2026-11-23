
<!-- ==================== NAVBAR ==================== -->
<nav class="navbar" id="navbar" role="navigation" aria-label="Main navigation">
    <div class="navbar-brand">
        <img src="{{ asset('images/logo_nirwana.jpeg') }}" alt="Nirwana Florist Logo" class="navbar-logo">
        <div>
            <div class="navbar-name">Nirwana Florist</div>
            <div class="navbar-tagline">Bloom With Meaning</div>
        </div>
    </div>

    <ul class="navbar-nav">
        <li><a href="#home">Beranda</a></li>
        <li><a href="#catalog">Katalog</a></li>
        <li><a href="#occasions">Momen</a></li>
        <li><a href="#order">Cara Pesan</a></li>
        <li>
            <a href="https://wa.me/62895629253800?text=Halo%20Nirwana%20Florist%2C%20saya%20ingin%20memesan%20papan%20bunga.%0A%0ABerikut%20detail%20pemesanan%20saya%3A%0A%0AModel%20Papan%20Bunga%3A%0AHarga%3A%0AAcara%3A%0AUcapan%3A%0ANama%20Pengirim%3A%0ACatatan%20Tambahan%3A%0AAlamat%20Penerima%3A%0ANama%20Penerima%3A%0ANo.%20HP%20Penerima%3A%0A%0AMohon%20informasi%20lebih%20lanjut%20mengenai%20pemesanan%20ini.%20Terima%20kasih."
               target="_blank"
               rel="noopener noreferrer"
               class="navbar-wa"
               id="nav-wa-btn">

                <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>

                Pesan Sekarang
            </a>
        </li>
    </ul>

    <div class="hamburger" id="hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <a href="#home" onclick="closeMobileMenu()">🏠 Beranda</a>
    <a href="#catalog" onclick="closeMobileMenu()">🌸 Katalog</a>
    <a href="#occasions" onclick="closeMobileMenu()">🎉 Momen</a>
    <a href="#order" onclick="closeMobileMenu()">📋 Cara Pesan</a>

    <a href="https://wa.me/62895629253800?text=Halo%20Nirwana%20Florist%2C%20saya%20ingin%20memesan%20papan%20bunga.%0A%0ABerikut%20detail%20pemesanan%20saya%3A%0A%0AModel%20Papan%20Bunga%3A%0AHarga%3A%0AAcara%3A%0AUcapan%3A%0ANama%20Pengirim%3A%0ACatatan%20Tambahan%3A%0AAlamat%20Penerima%3A%0ANama%20Penerima%3A%0ANo.%20HP%20Penerima%3A%0A%0AMohon%20informasi%20lebih%20lanjut%20mengenai%20pemesanan%20ini.%20Terima%20kasih."
       target="_blank"
       rel="noopener noreferrer"
       style="color: var(--clr-primary-d, #b54d68); font-weight: 700;">
        💬 Chat WhatsApp
    </a>
</div>
