
{{-- ==========================================================
    KATALOG PAPAN BUNGA NIRWANA FLORIST
    5 MODEL + FOTO SLIDER + CUSTOM PESANAN
    FITUR BAGIKAN FOTO DAN DETAIL PESANAN WHATSAPP
    TAMBAHAN: INFORMASI REKENING OTOMATIS
========================================================== --}}

@php

    // FOTO STANDARD
    $gambarStandar = [
        'IMG_7306_Original.jpg',
        'IMG_8727.jpg',
        'IMG_9022.jpg',
        'IMG_9253.jpg',
    ];

    // FOTO ROYAL
    $gambarKecil = [
        'IMG_7586_Original.jpg',
        'IMG_9217.jpg',
        'IMG_9289.jpg',
        'IMG_9396.jpg',
        'IMG_9430.jpg',
    ];

    // FOTO PREMIUM
    $gambarBesar = [
        'IMG_6451_Original.jpg',
        'IMG_7450_Original.jpg',
        'IMG_9434.jpg',
    ];

    // FOTO KOMBINASI
    $gambarKombinasi = [
        'IMG_8220_Original.jpg',
    ];

    // FOTO FULL FLOWER
    $gambarFullFlower = [
        'IMG_8125_Original.jpg',
    ];


    // DATA PRODUK KATALOG
    $produkKatalog = [

        [
            'id' => 'standard',
            'nama' => 'Standard',
            'folder' => 'standard',
            'gambar' => $gambarStandar,
            'harga' => 'Rp. 450.000',
            'deskripsi' => 'Model papan bunga dengan desain sederhana dan menarik untuk berbagai kebutuhan.',
        ],

        [
            'id' => 'royal',
            'nama' => 'Royal',
            'folder' => 'royal',
            'gambar' => $gambarKecil,
            'harga' => 'Rp. 550.000',
            'deskripsi' => 'Model papan bunga dengan tampilan megah dan istimewa untuk momen berkesan.',
        ],

        [
            'id' => 'premium',
            'nama' => 'Premium',
            'folder' => 'premium',
            'gambar' => $gambarBesar,
            'harga' => 'Rp. 800.000',
            'deskripsi' => 'Model papan bunga dengan tampilan mewah dan elegan untuk berbagai acara spesial.',
        ],

        [
            'id' => 'kombinasi',
            'nama' => 'Kombinasi',
            'folder' => 'kombinasi',
            'gambar' => $gambarKombinasi,
            'harga' => 'Rp. 1.000.000',
            'deskripsi' => 'Model papan bunga dengan perpaduan elemen dan rangkaian yang memberikan tampilan unik dan menarik.',
        ],

        [
            'id' => 'full-flower',
            'nama' => 'Full Flower',
            'folder' => 'full flower',
            'gambar' => $gambarFullFlower,
            'harga' => 'Rp. 1.200.000',
            'deskripsi' => 'Model papan bunga dengan rangkaian bunga yang memenuhi tampilan papan sehingga terlihat lebih menarik.',
        ],

    ];

@endphp


{{-- ==========================================================
    HEADER KATALOG
========================================================== --}}

<section class="catalog" id="catalog">

    <div class="catalog-container">

        <div class="section-header reveal">

            <div class="section-badge">
                🌸 Koleksi Nirwana Florist
            </div>

            <h2 class="section-title">
                Pilihan <em>Model Papan Bunga</em>
            </h2>

            <div class="section-divider"></div>

            <p class="section-desc">
                Temukan berbagai pilihan model papan bunga Nirwana Florist.
                Foto merupakan referensi model dan tulisan ucapan dapat
                disesuaikan dengan kebutuhan acara Anda.
            </p>

        </div>


        {{-- DAFTAR MODEL PAPAN BUNGA --}}

        <div class="products-grid">

            @foreach ($produkKatalog as $produk)

                @php
                    $galleryId = 'gallery-' . $produk['id'];
                @endphp

                <article class="product-card reveal">

                    {{-- BEST SELLER --}}

                    @if ($produk['id'] === 'royal')

                        <div class="best-seller-badge">
                            <span class="best-seller-icon">⭐</span>
                            <span>BEST SELLER</span>
                        </div>

                    @endif


                    {{-- FOTO PRODUK --}}

                    <div class="product-image-wrapper">

                        <div
                            class="product-gallery"
                            id="{{ $galleryId }}"
                        >

                            @foreach ($produk['gambar'] as $index => $gambar)

                                <img
                                    src="{{ asset('images/' . $produk['folder'] . '/' . $gambar) }}"
                                    alt="{{ $produk['nama'] }} - Foto {{ $index + 1 }}"
                                    class="product-image {{ $index === 0 ? 'active' : '' }}"
                                    loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                                    onerror="this.classList.add('image-error');"
                                >

                            @endforeach


                            {{-- TOMBOL SLIDER KIRI --}}

                            <button
                                type="button"
                                class="gallery-arrow gallery-prev"
                                onclick="changeProductSlide(this, -1)"
                                aria-label="Foto sebelumnya"
                            >
                                &#10094;
                            </button>


                            {{-- TOMBOL SLIDER KANAN --}}

                            <button
                                type="button"
                                class="gallery-arrow gallery-next"
                                onclick="changeProductSlide(this, 1)"
                                aria-label="Foto berikutnya"
                            >
                                &#10095;
                            </button>


                            {{-- NOMOR FOTO --}}

                            <div class="gallery-counter">

                                <span class="current-slide">1</span>

                                /

                                <span class="total-slide">
                                    {{ count($produk['gambar']) }}
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- INFORMASI PRODUK --}}

                    <div class="product-info">

                        <span class="product-category">
                            MODEL PAPAN BUNGA
                        </span>

                        <h3 class="product-name">
                            {{ $produk['nama'] }}
                        </h3>

                        <p class="product-desc">
                            {{ $produk['deskripsi'] }}
                        </p>


                        {{-- INDIKATOR FOTO --}}

                        <div class="gallery-dots">

                            @foreach ($produk['gambar'] as $index => $gambar)

                                <button
                                    type="button"
                                    class="gallery-dot {{ $index === 0 ? 'active' : '' }}"
                                    onclick="goToProductSlide(this, {{ $index }})"
                                    aria-label="Lihat foto {{ $index + 1 }}"
                                ></button>

                            @endforeach

                        </div>


                        {{-- HARGA DAN PILIH MODEL --}}

                        <div class="product-footer">

                            <div class="product-price">

                                <span class="price-from">
                                    Harga
                                </span>

                                <span class="price-value">
                                    {{ $produk['harga'] }}
                                </span>

                            </div>

                            <button
                                type="button"
                                class="btn-order"
                                onclick="bukaDetailModel(
                                    '{{ $produk['id'] }}',
                                    '{{ $produk['nama'] }}',
                                    '{{ asset('images/' . $produk['folder'] . '/' . $produk['gambar'][0]) }}',
                                    '{{ $produk['harga'] }}'
                                )"
                            >
                                Pilih Model
                            </button>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>



{{-- ==========================================================
    MODAL DETAIL DAN CUSTOM PESANAN
========================================================== --}}

<div class="custom-modal" id="customModal">

    <div class="custom-modal-content">

        {{-- TOMBOL TUTUP --}}

        <button
            type="button"
            class="modal-close"
            onclick="tutupDetailModel()"
            aria-label="Tutup"
        >
            &times;
        </button>


        {{-- HEADER MODAL --}}

        <div class="modal-heading">

            <div class="section-badge">
                🌸 Nirwana Florist
            </div>

            <h2>Sesuaikan Pesanan Anda</h2>

            <p>
                Silakan pilih jenis acara dan masukkan
                tulisan ucapan sesuai keinginan Anda.
            </p>

        </div>


        {{-- MODEL PILIHAN --}}

        <div class="selected-model">

            <span>Model papan bunga pilihan:</span>

            <h3 id="selectedModelName">
                Standard
            </h3>

            <div class="selected-model-image-wrapper">

                <img
                    src=""
                    alt="Foto model papan bunga pilihan"
                    id="selectedModelImage"
                >

            </div>

            {{-- HARGA MODEL --}}

            <div class="selected-model-price">

                <span>Harga Model</span>

                <h4 id="selectedModelPrice">
                    Rp. 450.000
                </h4>

            </div>

        </div>


        {{-- JENIS ACARA --}}

        <div class="custom-form-group">

            <label for="jenisAcara">
                Pilih Jenis Acara
            </label>

            <select id="jenisAcara">

                <option value="">
                    -- Pilih jenis acara --
                </option>

                <option value="Duka Cita">
                    Duka Cita
                </option>

                <option value="Wedding / Pernikahan">
                    Wedding / Pernikahan
                </option>

                <option value="Graduation / Wisuda">
                    Graduation / Wisuda
                </option>

                <option value="Grand Opening">
                    Grand Opening
                </option>

                <option value="Anniversary">
                    Anniversary
                </option>

                <option value="Ulang Tahun">
                    Ulang Tahun
                </option>

                <option value="Acara Lainnya">
                    Acara Lainnya
                </option>

            </select>

        </div>


        {{-- ALAMAT PENERIMA --}}

        <div class="custom-form-group">

            <label for="alamatPenerima">
                Alamat Penerima
            </label>

            <textarea
                id="alamatPenerima"
                rows="2"
                placeholder="Masukkan alamat lengkap penerima papan bunga..."
            ></textarea>

        </div>


        {{-- NAMA DAN NOMOR HP PENERIMA --}}

        <div class="custom-form-group">

            <label>
                Nama Penerima / No. HP Penerima
            </label>

            <input
                type="text"
                id="namaPenerima"
                placeholder="Masukkan nama penerima"
            >

            <input
                type="tel"
                id="noPenerima"
                placeholder="Masukkan nomor HP penerima"
            >

        </div>


        {{-- TULISAN UCAPAN --}}

        <div class="custom-form-group">

            <label for="isiUcapan">
                Tulisan / Ucapan Papan Bunga
            </label>

            <textarea
                id="isiUcapan"
                rows="4"
                placeholder="Tuliskan ucapan yang ingin dicantumkan pada papan bunga..."
            ></textarea>

            <small>
                Tulisan dapat disesuaikan dengan keinginan Anda.
            </small>

        </div>


        {{-- NAMA PENGIRIM --}}

        <div class="custom-form-group">

            <label for="namaPengirim">
                Nama Pengirim
            </label>

            <input
                type="text"
                id="namaPengirim"
                placeholder="Masukkan nama pengirim"
            >

        </div>


        {{-- CATATAN TAMBAHAN --}}

        <div class="custom-form-group">

            <label for="catatanPesanan">
                Catatan Tambahan (Opsional)
            </label>

            <textarea
                id="catatanPesanan"
                rows="2"
                placeholder="Contoh: warna bunga atau permintaan khusus lainnya..."
            ></textarea>

        </div>


        {{-- TOMBOL BAGIKAN PESANAN --}}

        <button
            type="button"
            class="btn-submit-order"
            id="btnBagikanPesanan"
            onclick="kirimPesananCustom()"
            disabled
        >
            Menyiapkan Foto...
        </button>

        <p class="modal-note" id="modalNote">
            Foto produk sedang disiapkan. Setelah siap,
            Anda dapat membagikan foto dan detail pesanan
            melalui WhatsApp.
        </p>

    </div>

</div>



{{-- ==========================================================
    CSS KATALOG
========================================================== --}}

<style>

/* GRID PRODUK */

.products-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 24px;
}


/* KARTU PRODUK */

.product-card {
    position: relative;
    background: linear-gradient(145deg, #ffffff 0%, #fffbfc 50%, #fff9f5 100%);
    border: 1px solid #f6dbe2;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 5px 22px rgba(217, 119, 142, 0.08);
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 28px rgba(217, 119, 142, 0.15);
}


/* BADGE BEST SELLER */

.best-seller-badge {
    position: absolute;
    top: 14px;
    left: 14px;
    z-index: 10;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 13px;
    border-radius: 30px;
    background: linear-gradient(135deg, #ffe0e9, #fdecd7);
    color: #8c4258;
    border: 1px solid #f5cfdb;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 0.8px;
    box-shadow: 0 3px 10px rgba(217, 119, 142, 0.15);
}

.best-seller-icon {
    font-size: 23px;
    line-height: 1;
}


/* AREA GAMBAR */

.product-image-wrapper {
    width: 100%;
    height: 380px;
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #fff9f6 0%, #fef3f6 100%);
    border-radius: 16px 16px 0 0;
}

.product-gallery {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
}


/* GAMBAR */

.product-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
    object-fit: contain;
    padding: 8px;
    box-sizing: border-box;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.35s ease;
}

.product-image.active {
    opacity: 1;
    visibility: visible;
    z-index: 1;
}

.product-image.image-error {
    display: none;
}


/* TOMBOL SLIDER */

.gallery-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 38px;
    height: 38px;
    border: 1px solid #f6dbe2;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.94);
    color: #c95c76;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 5;
    box-shadow: 0 3px 12px rgba(217, 119, 142, 0.12);
    transition: all 0.25s ease;
}

.gallery-arrow:hover {
    background: linear-gradient(135deg, #df7e96, #ebb39a);
    color: white;
    border-color: transparent;
}

.gallery-prev {
    left: 12px;
}

.gallery-next {
    right: 12px;
}


/* NOMOR FOTO */

.gallery-counter {
    position: absolute;
    right: 12px;
    bottom: 12px;
    z-index: 5;
    padding: 5px 12px;
    border-radius: 20px;
    background: rgba(61, 34, 43, 0.65);
    color: white;
    font-size: 12px;
}


/* INFORMASI PRODUK */

.product-info {
    padding: 20px;
}

.product-category {
    display: inline-block;
    color: #b54d68;
    background: linear-gradient(135deg, #fce4ec, #fff1df);
    border: 1px solid #f6dbe2;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
}

.product-name {
    margin: 12px 0 8px;
    font-size: 20px;
    color: #3d222b;
}

.product-desc {
    color: #7b5363;
    font-size: 13px;
    line-height: 1.7;
    min-height: 42px;
}


/* INDIKATOR FOTO */

.gallery-dots {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 7px;
    margin: 15px 0;
}

.gallery-dot {
    width: 8px;
    height: 8px;
    padding: 0;
    border: none;
    border-radius: 50%;
    background: #edd3db;
    cursor: pointer;
    transition: all 0.25s ease;
}

.gallery-dot.active {
    width: 21px;
    border-radius: 10px;
    background: linear-gradient(135deg, #df7e96, #ebb39a);
}


/* HARGA DAN TOMBOL */

.product-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    margin-top: 12px;
}

.product-price {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.price-from {
    font-size: 12px;
    color: #7b5363;
}

.price-value {
    font-size: 14px;
    font-weight: 700;
    color: #b54d68;
}

.btn-order {
    border: none;
    border-radius: 25px;
    background: linear-gradient(135deg, #df7e96 0%, #c95c76 100%);
    color: white;
    padding: 11px 18px;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: 0 4px 14px rgba(217, 119, 142, 0.25);
    transition: 0.3s ease;
}

.btn-order:hover {
    background: linear-gradient(135deg, #c95c76 0%, #df7e96 100%);
    box-shadow: 0 6px 18px rgba(217, 119, 142, 0.35);
    transform: translateY(-2px);
}


/* ==========================================================
   MODAL PESANAN
========================================================== */

.custom-modal {
    position: fixed;
    inset: 0;
    z-index: 99999;
    background: rgba(61, 34, 43, 0.55);
    backdrop-filter: blur(5px);
    display: none;
    justify-content: center;
    align-items: center;
    padding: 20px;
    overflow-y: auto;
}

.custom-modal.show {
    display: flex;
}

.custom-modal-content {
    position: relative;
    background: linear-gradient(160deg, #ffffff 0%, #fff7f9 60%, #fff9f3 100%);
    border: 1px solid #f6dbe2;
    width: 100%;
    max-width: 580px;
    max-height: 90vh;
    overflow-y: auto;
    padding: 35px;
    border-radius: 22px;
    box-shadow: 0 15px 50px rgba(61, 34, 43, 0.18);
    animation: modalShow 0.3s ease;
}

@keyframes modalShow {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* TOMBOL TUTUP */

.modal-close {
    position: absolute;
    top: 15px;
    right: 20px;
    width: 35px;
    height: 35px;
    border: 1px solid #f6dbe2;
    border-radius: 50%;
    background: #fde8ee;
    color: #c0506e;
    font-size: 25px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.modal-close:hover {
    background: #df7e96;
    color: #fff;
}


/* HEADER MODAL */

.modal-heading {
    text-align: center;
    margin-bottom: 25px;
}

.modal-heading h2 {
    margin: 15px 0 8px;
    font-size: 25px;
    color: #3d222b;
}

.modal-heading p {
    color: #7b5363;
    font-size: 13px;
    line-height: 1.6;
}


/* MODEL PILIHAN */

.selected-model {
    background: linear-gradient(135deg, #fff2f6 0%, #fff6ec 100%);
    border: 1px solid #f6dbe2;
    border-radius: 13px;
    padding: 16px;
    margin-bottom: 22px;
}

.selected-model span {
    font-size: 12px;
    color: #8c5b6b;
}

.selected-model h3 {
    margin-top: 6px;
    color: #b54d68;
    font-size: 18px;
}


/* FOTO MODEL PILIHAN */

.selected-model-image-wrapper {
    width: 100%;
    height: 230px;
    margin-top: 15px;
    border-radius: 12px;
    overflow: hidden;
    background: linear-gradient(135deg, #fff9f6 0%, #fef3f6 100%);
    border: 1px solid #f6dbe2;
}

.selected-model-image-wrapper img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: contain;
    padding: 8px;
    box-sizing: border-box;
}


/* HARGA MODEL */

.selected-model-price {
    text-align: center;
    margin-top: 12px;
    padding: 12px;
    background: linear-gradient(135deg, #fce4ec 0%, #fff1df 100%);
    border: 1px solid #f6dbe2;
    border-radius: 10px;
}

.selected-model-price span {
    display: block;
    font-size: 12px;
    color: #8c5b6b;
    margin-bottom: 5px;
}

.selected-model-price h4 {
    margin: 0;
    font-size: 18px;
    font-weight: 800;
    color: #b54d68;
}


/* FORM PESANAN */

.custom-form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-bottom: 18px;
}

.custom-form-group label {
    font-size: 13px;
    font-weight: 700;
    color: #3d222b;
}

.custom-form-group input,
.custom-form-group select,
.custom-form-group textarea {
    width: 100%;
    border: 1px solid #f1ded8;
    background: #fff;
    border-radius: 10px;
    padding: 13px 14px;
    font-family: inherit;
    font-size: 13px;
    color: #3d222b;
    outline: none;
    box-sizing: border-box;
    transition: 0.2s;
}

.custom-form-group input:focus,
.custom-form-group select:focus,
.custom-form-group textarea:focus {
    border-color: #df7e96;
    box-shadow: 0 0 0 3px rgba(223, 126, 150, 0.15);
}

.custom-form-group textarea {
    resize: vertical;
}

.custom-form-group small {
    color: #8c5b6b;
    font-size: 11px;
}


/* TOMBOL BAGIKAN PESANAN */

.btn-submit-order {
    width: 100%;
    border: none;
    padding: 15px;
    border-radius: 30px;
    background: linear-gradient(135deg, #df7e96 0%, #c95c76 100%);
    color: white;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 4px 16px rgba(217, 119, 142, 0.3);
    transition: 0.3s;
}

.btn-submit-order:hover:not(:disabled) {
    background: linear-gradient(135deg, #c95c76 0%, #df7e96 100%);
    box-shadow: 0 6px 22px rgba(217, 119, 142, 0.4);
    transform: translateY(-2px);
}

.btn-submit-order:disabled {
    opacity: 0.65;
    cursor: not-allowed;
    transform: none;
}

.modal-note {
    text-align: center;
    margin-top: 14px;
    color: #8c5b6b;
    font-size: 11px;
    line-height: 1.6;
}


/* RESPONSIVE */

@media (max-width: 900px) {

    .products-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

}

@media (max-width: 600px) {

    .products-grid {
        grid-template-columns: 1fr;
    }

    .product-image-wrapper {
        height: 320px;
    }

    .gallery-arrow {
        width: 34px;
        height: 34px;
        font-size: 15px;
    }

    .custom-modal {
        padding: 10px;
    }

    .custom-modal-content {
        padding: 25px 20px;
        max-height: 94vh;
    }

    .modal-heading h2 {
        font-size: 21px;
    }

}

</style>



{{-- ==========================================================
    JAVASCRIPT KATALOG
========================================================== --}}

<script>

/* ==========================================================
   VARIABEL FOTO PESANAN
========================================================== */

let fileGambarPesanan = null;

let gambarSedangDisiapkan = false;


const informasiRekening = `INFORMASI PEMBAYARAN:

Bank: [BRI]
No. Rekening: [6735 0101 0559 539]
Atas Nama: [Catur parwono]

Bank: [MANDIRI]
No. Rekening: [1380017320339]
Atas Nama: [SUSILOWATI]

Silakan melakukan pembayaran setelah mendapatkan
konfirmasi dari Nirwana Florist.

Mohon kirimkan bukti pembayaran melalui WhatsApp.

Terima kasih telah mempercayakan pesanan Anda
kepada Nirwana Florist 🌸`;


/* ==========================================================
   SLIDER FOTO
========================================================== */

function getValidImages(gallery) {

    return Array.from(
        gallery.querySelectorAll(
            '.product-image:not(.image-error)'
        )
    );

}


function changeProductSlide(button, direction) {

    const gallery = button.closest('.product-gallery');

    if (!gallery) return;

    const images = getValidImages(gallery);

    if (images.length === 0) return;

    const current = images.findIndex(image =>
        image.classList.contains('active')
    );

    const next =
        (current + direction + images.length) % images.length;

    showProductSlide(gallery, next);

}


function goToProductSlide(button, index) {

    const card = button.closest('.product-card');

    if (!card) return;

    const gallery = card.querySelector('.product-gallery');

    if (!gallery) return;

    showProductSlide(gallery, index);

}


function showProductSlide(gallery, index) {

    const images = getValidImages(gallery);

    if (images.length === 0) return;

    const card = gallery.closest('.product-card');

    const dots = card.querySelectorAll('.gallery-dot');

    if (index < 0 || index >= images.length) return;

    images.forEach((image, i) => {

        image.classList.toggle('active', i === index);

    });

    dots.forEach((dot, i) => {

        dot.classList.toggle('active', i === index);

    });

    const counter = gallery.querySelector('.current-slide');

    if (counter) {

        counter.textContent = index + 1;

    }

}


/* ==========================================================
   SIAPKAN FOTO PRODUK
========================================================== */

async function siapkanFotoPesanan(gambar, namaModel) {

    const tombol = document.getElementById(
        'btnBagikanPesanan'
    );

    const catatan = document.getElementById(
        'modalNote'
    );

    fileGambarPesanan = null;

    gambarSedangDisiapkan = true;

    tombol.disabled = true;

    tombol.textContent = 'Menyiapkan Foto...';

    catatan.textContent =
        'Foto produk sedang disiapkan. Mohon tunggu sebentar.';


    try {

        const response = await fetch(gambar);

        if (!response.ok) {

            throw new Error('Foto produk tidak ditemukan.');

        }

        const blob = await response.blob();

        if (!blob.type.startsWith('image/')) {

            throw new Error('File bukan gambar.');

        }

        const ekstensi = {

            'image/jpeg': 'jpg',
            'image/png': 'png',
            'image/webp': 'webp'

        };

        const namaFile = namaModel
            .toLowerCase()
            .replace(/[^a-z0-9]+/g, '-');

        const extension = ekstensi[blob.type] || 'jpg';

        fileGambarPesanan = new File(

            [blob],

            'nirwana-' + namaFile + '.' + extension,

            { type: blob.type }

        );


        tombol.disabled = false;

        tombol.textContent = 'Bagikan Foto & Pesanan';

        catatan.textContent =
            'Foto berhasil disiapkan. Silakan isi form dan bagikan pesanan Anda melalui WhatsApp.';


    } catch (error) {

        console.error('Gagal menyiapkan foto:', error);

        tombol.disabled = true;

        tombol.textContent = 'Foto Belum Tersedia';

        catatan.textContent =
            'Foto belum berhasil disiapkan. Periksa kembali lokasi dan nama file gambar.';


        alert(
            'Foto produk belum berhasil disiapkan. ' +
            'Pastikan gambar dapat dibuka melalui website.'
        );


    } finally {

        gambarSedangDisiapkan = false;

    }

}


/* ==========================================================
   BUKA DETAIL MODEL
========================================================== */

function bukaDetailModel(id, nama, gambar, harga) {

    const modal = document.getElementById('customModal');

    document.getElementById(
        'selectedModelName'
    ).textContent = nama;


    // MENAMPILKAN FOTO MODEL

    const gambarModel = document.getElementById(
        'selectedModelImage'
    );

    gambarModel.src = gambar;

    gambarModel.alt = 'Model papan bunga ' + nama;


    // MENAMPILKAN HARGA

    document.getElementById(
        'selectedModelPrice'
    ).textContent = harga;


    // MENYIMPAN DATA MODEL

    modal.dataset.modelId = id;

    modal.dataset.modelNama = nama;

    modal.dataset.modelHarga = harga;

    modal.dataset.modelGambar = gambar;


    // MEMBUKA MODAL

    modal.classList.add('show');

    document.body.style.overflow = 'hidden';


    // MENYIAPKAN FOTO SECARA OTOMATIS

    siapkanFotoPesanan(gambar, nama);

}


/* ==========================================================
   TUTUP DETAIL MODEL
========================================================== */

function tutupDetailModel() {

    const modal = document.getElementById('customModal');

    modal.classList.remove('show');

    document.body.style.overflow = '';

}


/* KLIK DI LUAR MODAL */

document.getElementById('customModal').addEventListener(

    'click',

    function(event) {

        if (event.target === this) {

            tutupDetailModel();

        }

    }

);


/* ==========================================================
   FORMAT PESANAN + INFORMASI REKENING
========================================================== */

function buatPesanPesanan() {

    const modal = document.getElementById('customModal');

    const model = modal.dataset.modelNama;

    const harga = modal.dataset.modelHarga;

    const acara = document.getElementById('jenisAcara').value;

    const alamatPenerima = document.getElementById(
        'alamatPenerima'
    ).value.trim();

    const namaPenerima = document.getElementById(
        'namaPenerima'
    ).value.trim();

    const noPenerima = document.getElementById(
        'noPenerima'
    ).value.trim();

    const ucapan = document.getElementById(
        'isiUcapan'
    ).value.trim();

    const pengirim = document.getElementById(
        'namaPengirim'
    ).value.trim();

    const catatan = document.getElementById(
        'catatanPesanan'
    ).value.trim();


    // VALIDASI

    if (!model) {

        alert('Silakan pilih model papan bunga.');

        return null;

    }

    if (!acara) {

        alert('Silakan pilih jenis acara terlebih dahulu.');

        return null;

    }

    if (!alamatPenerima) {

        alert('Silakan masukkan alamat penerima.');

        return null;

    }

    if (!namaPenerima) {

        alert('Silakan masukkan nama penerima.');

        return null;

    }

    if (!noPenerima) {

        alert('Silakan masukkan nomor HP penerima.');

        return null;

    }

    if (!ucapan) {

        alert('Silakan masukkan tulisan atau ucapan papan bunga.');

        return null;

    }

    if (!pengirim) {

        alert('Silakan masukkan nama pengirim.');

        return null;

    }


    // FORMAT PESAN WHATSAPP
    // UCAPAN TERIMA KASIH CUKUP SATU KALI,
    // YAITU DI DALAM INFORMASI REKENING.

    const pesan = `Halo Nirwana Florist, saya ingin memesan papan bunga.

DETAIL PESANAN:

Model Papan Bunga: ${model}
Harga Model: ${harga}
Jenis Acara: ${acara}
Tulisan / Ucapan: ${ucapan}
Nama Pengirim: ${pengirim}
Catatan Tambahan: ${catatan || '-'}

DATA PENERIMA:

Alamat Penerima: ${alamatPenerima}
Nama Penerima: ${namaPenerima}
No. HP Penerima: ${noPenerima}

Mohon konfirmasi ketersediaan dan proses pemesanannya.

${informasiRekening}`;


    return pesan;

}


/* ==========================================================
   BAGIKAN FOTO DAN DETAIL PESANAN
========================================================== */

async function kirimPesananCustom() {

    // MEMASTIKAN FOTO SUDAH SIAP

    if (gambarSedangDisiapkan) {

        alert('Mohon tunggu, foto produk sedang disiapkan.');

        return;

    }

    if (!fileGambarPesanan) {

        alert(
            'Foto produk belum berhasil disiapkan. ' +
            'Silakan tutup dan pilih kembali model papan bunga.'
        );

        return;

    }


    // MEMBUAT PESAN DAN VALIDASI

    const pesan = buatPesanPesanan();

    if (!pesan) return;


    // NOMOR WHATSAPP ADMIN

    const nomorWhatsApp = '62895629253800';


    // MEMERIKSA DUKUNGAN BAGIKAN FILE

    const mendukungBagikanFoto =

        navigator.share &&

        navigator.canShare &&

        navigator.canShare({

            files: [fileGambarPesanan]

        });


    if (mendukungBagikanFoto) {

        try {

            await navigator.share({

                title: 'Pesanan Nirwana Florist',

                text: pesan,

                files: [fileGambarPesanan]

            });

            return;


        } catch (error) {

            if (error.name === 'AbortError') {

                return;

            }

            console.error(
                'Gagal membagikan foto:',
                error
            );

            alert(
                'Foto belum berhasil dibagikan. ' +
                'Silakan coba kembali.'
            );

            return;

        }

    }


    // ALTERNATIF JIKA PERANGKAT TIDAK MENDUKUNG
    // WHATSAPP DIBUKA DENGAN DETAIL DAN LINK FOTO.

    const modal = document.getElementById('customModal');

    const urlGambar = new URL(
        modal.dataset.modelGambar,
        window.location.origin
    ).href;

    const pesanAlternatif = pesan +

        '\n\nFoto model papan bunga:\n' +

        urlGambar;


    const urlWhatsApp =

        'https://wa.me/' +

        nomorWhatsApp +

        '?text=' +

        encodeURIComponent(pesanAlternatif);


    window.open(urlWhatsApp, '_blank');

}

</script>

{{-- ================= AKHIR KATALOG ================= --}}
