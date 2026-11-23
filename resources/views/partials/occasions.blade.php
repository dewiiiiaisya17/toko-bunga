
<!-- =====================================================
     OCCASIONS - NIRWANA FLORIST
===================================================== -->

<section class="occasions" id="occasions" aria-label="Momen spesial">

    <div class="occasions-container">

        <!-- SECTION HEADER -->
        <div class="section-header reveal">

            <div class="section-badge">
                🎉 Untuk Setiap Momen
            </div>

            <h2 class="section-title">
                Bunga untuk <em>Setiap Cerita</em>
            </h2>

            <div class="section-divider"></div>

            <p class="section-desc">
                Hadirkan rangkaian bunga untuk setiap momen istimewa
                bersama Nirwana Florist.
            </p>

        </div>


        <!-- OCCASIONS GRID -->
        <div class="occasions-grid">

            <!-- DUKA CITA -->
            <a href="#catalog" class="occasion-card reveal">

                <img
                    src="{{ asset('images/full flower/IMG_8125_Original.jpg') }}"
                    alt="Papan bunga duka cita"
                    class="occasion-img"
                    loading="lazy"
                    onerror="this.style.display='none'"
                >

                <div class="occasion-overlay"></div>

                <div class="occasion-content">
                    <div class="occasion-emoji">🕊️</div>
                    <h3 class="occasion-title">Duka Cita</h3>
                </div>

            </a>


            <!-- WEDDING -->
            <a href="#catalog" class="occasion-card reveal">

                <img
                    src="{{ asset('images/kombinasi/IMG_8220_Original.jpg') }}"
                    alt="Papan bunga wedding"
                    class="occasion-img"
                    loading="lazy"
                    onerror="this.style.display='none'"
                >

                <div class="occasion-overlay"></div>

                <div class="occasion-content">
                    <div class="occasion-emoji">💍</div>
                    <h3 class="occasion-title">Wedding</h3>
                </div>

            </a>


            <!-- GRADUATION -->
            <a href="#catalog" class="occasion-card reveal">

                <img
                    src="{{ asset('images/gradution.png') }}"
                    alt="Papan bunga graduation"
                    class="occasion-img"
                    loading="lazy"
                    onerror="this.style.display='none'"
                >

                <div class="occasion-overlay"></div>

                <div class="occasion-content">
                    <div class="occasion-emoji">🎓</div>
                    <h3 class="occasion-title">Graduation</h3>
                </div>

            </a>


            <!-- GRAND OPENING -->
            <a href="#catalog" class="occasion-card reveal">

                <img
                    src="{{ asset('images/standard/IMG_8727.jpg') }}"
                    alt="Papan bunga grand opening"
                    class="occasion-img"
                    loading="lazy"
                    onerror="this.style.display='none'"
                >

                <div class="occasion-overlay"></div>

                <div class="occasion-content">
                    <div class="occasion-emoji">🎉</div>
                    <h3 class="occasion-title">Grand Opening</h3>
                </div>

            </a>


            <!-- ANNIVERSARY -->
            <a href="#catalog" class="occasion-card reveal">

                <img
                    src="{{ asset('images/anniversary.png') }}"
                    alt="Karangan bunga anniversary"
                    class="occasion-img"
                    loading="lazy"
                    onerror="this.style.display='none'"
                >

                <div class="occasion-overlay"></div>

                <div class="occasion-content">
                    <div class="occasion-emoji">❤️</div>
                    <h3 class="occasion-title">Anniversary</h3>
                </div>

            </a>


            <!-- ULANG TAHUN -->
            <a href="#catalog" class="occasion-card reveal">

                <img
                    src="{{ asset('images/ulang tahun.png') }}"
                    alt="Karangan bunga ulang tahun"
                    class="occasion-img"
                    loading="lazy"
                    onerror="this.style.display='none'"
                >

                <div class="occasion-overlay"></div>

                <div class="occasion-content">
                    <div class="occasion-emoji">🎂</div>
                    <h3 class="occasion-title">Ulang Tahun</h3>
                </div>

            </a>

        </div>

    </div>

</section>


<!-- =====================================================
     OCCASIONS STYLE
===================================================== -->

<style>

/* ==========================================
   SECTION OCCASIONS
========================================== */

.occasions {
    position: relative;
    padding: 100px 24px;
    background: #fffaf2;
    overflow: hidden;
}

.occasions-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}


/* ==========================================
   SECTION HEADER
========================================== */

.occasions .section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 50px;
}

.occasions .section-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 9px 20px;
    margin-bottom: 18px;
    border-radius: 50px;
    background: #fff0d0;
    color: #a87532;
    font-size: 13px;
    font-weight: 600;
}

.occasions .section-title {
    color: #493a35;
    font-size: clamp(30px, 4vw, 43px);
    font-weight: 700;
    line-height: 1.25;
    margin: 0;
}

.occasions .section-title em {
    color: #d77c98;
    font-style: normal;
}

.occasions .section-divider {
    width: 65px;
    height: 3px;
    margin: 20px auto;
    border-radius: 10px;
    background: #e6bd68;
}

.occasions .section-desc {
    color: #887873;
    font-size: 15px;
    line-height: 1.8;
    margin: 0;
}


/* ==========================================
   OCCASIONS GRID
========================================== */

.occasions .occasions-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 25px;
}


/* ==========================================
   OCCASION CARD
========================================== */

.occasions .occasion-card {
    position: relative;
    display: block;
    width: 100%;
    aspect-ratio: 4 / 5;
    min-height: 0;

    overflow: hidden;
    border-radius: 18px;
    background: #f8e9df;

    text-decoration: none;

    box-shadow: 0 8px 25px rgba(94, 65, 52, 0.09);

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
}

.occasions .occasion-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(94, 65, 52, 0.16);
}


/* ==========================================
   OCCASION IMAGE
   GAMBAR MEMENUHI SELURUH CARD
========================================== */

.occasions .occasion-card .occasion-img {
    position: absolute !important;

    inset: 0 !important;

    display: block !important;

    width: 100% !important;
    height: 100% !important;

    max-width: none !important;
    max-height: none !important;

    object-fit: cover !important;
    object-position: center center !important;

    padding: 0 !important;
    margin: 0 !important;

    transform: none !important;
    transform-origin: center center !important;

    transition: none !important;

    background: transparent !important;
}

/* Tidak ada zoom tambahan saat hover */

.occasions .occasion-card:hover .occasion-img {
    transform: none !important;
}


/* ==========================================
   IMAGE OVERLAY
========================================== */

.occasions .occasion-overlay {
    position: absolute;
    inset: 0;
    z-index: 1;
    pointer-events: none;

    background: linear-gradient(
        to top,
        rgba(38, 27, 25, 0.78) 0%,
        rgba(38, 27, 25, 0.35) 22%,
        rgba(38, 27, 25, 0.08) 48%,
        rgba(38, 27, 25, 0) 70%
    );

    transition: background 0.3s ease;
}

.occasions .occasion-card:hover .occasion-overlay {
    background: linear-gradient(
        to top,
        rgba(38, 27, 25, 0.82) 0%,
        rgba(38, 27, 25, 0.38) 25%,
        rgba(38, 27, 25, 0.08) 50%,
        rgba(38, 27, 25, 0) 70%
    );
}


/* ==========================================
   OCCASION CONTENT
========================================== */

.occasions .occasion-content {
    position: absolute;
    left: 24px;
    right: 24px;
    bottom: 25px;

    z-index: 2;
    text-align: left;
    pointer-events: none;
}

.occasions .occasion-emoji {
    width: 42px;
    height: 42px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 12px;

    border-radius: 50%;
    background: rgba(255, 245, 226, 0.95);

    font-size: 20px;
}

.occasions .occasion-title {
    color: #ffffff;
    font-size: 22px;
    font-weight: 700;
    margin: 0;
    letter-spacing: 0.2px;
}


/* ==========================================
   TABLET
========================================== */

@media (max-width: 900px) {

    .occasions .occasions-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
    }

    .occasions .occasion-card {
        aspect-ratio: 4 / 5;
    }

}


/* ==========================================
   MOBILE
========================================== */

@media (max-width: 560px) {

    .occasions {
        padding: 70px 18px;
    }

    .occasions .section-header {
        margin-bottom: 35px;
    }

    .occasions .section-desc {
        font-size: 14px;
    }

    .occasions .occasions-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 13px;
    }

    .occasions .occasion-card {
        aspect-ratio: 3 / 4;
        border-radius: 14px;
    }

    .occasions .occasion-card .occasion-img {
        object-fit: cover !important;
        object-position: center center !important;
        transform: none !important;
    }

    .occasions .occasion-content {
        left: 12px;
        right: 10px;
        bottom: 14px;
    }

    .occasions .occasion-emoji {
        width: 32px;
        height: 32px;
        font-size: 15px;
        margin-bottom: 8px;
    }

    .occasions .occasion-title {
        font-size: 15px;
    }

}

</style>
