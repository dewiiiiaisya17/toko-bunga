
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO WEBSITE -->
    <meta name="description" content="Nirwana Florist - Toko Karangan Bunga Terbaik. Kami menyediakan rangkaian bunga segar untuk berbagai momen spesial Anda. Pesan sekarang lewat WhatsApp!">

    <meta name="keywords" content="toko bunga, karangan bunga, bouquet, bunga pernikahan, bunga ulang tahun, bunga wisuda, nirwana florist">

    <meta property="og:title" content="Nirwana Florist — Bloom With Meaning">
    <meta property="og:description" content="Rangkaian bunga segar untuk setiap momen spesial Anda. Pesan mudah via WhatsApp!">

    <title>Nirwana Florist — Bloom With Meaning</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo_nirwana.jpeg') }}">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Cormorant+Garamond:wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS UTAMA -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=13">

    <!-- CSS TOMBOL WHATSAPP FLOATING -->
    <style>
        body a.wa-floating {
            position: fixed !important;

            right: 22px !important;
            bottom: 22px !important;
            top: auto !important;
            left: auto !important;

            width: 65px !important;
            height: 65px !important;

            min-width: 65px !important;
            min-height: 65px !important;

            display: flex !important;
            align-items: center !important;
            justify-content: center !important;

            margin: 0 !important;
            padding: 0 !important;

            background: #25D366 !important;
            color: white !important;

            border-radius: 50% !important;

            z-index: 999999 !important;

            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.20) !important;

            text-decoration: none !important;
            cursor: pointer;
        }

        body a.wa-floating svg {
            width: 100px !important;
            height: 100px !important;

            display: block !important;

            flex-shrink: 0 !important;
        }

        /* EFEK ANIMASI TOMBOL WHATSAPP */
        body a.wa-floating {
            position: fixed !important;
            isolation: isolate;
            animation: wa-gerak 2s ease-in-out infinite;
        }

        /* Lingkaran animasi di sekitar tombol */
        body a.wa-floating::before {
            content: "";
            position: absolute;
            inset: -7px;
            border: 2px solid rgba(37, 211, 102, 0.65);
            border-radius: 50%;
            z-index: -1;
            animation: wa-pulse 1.8s ease-out infinite;
        }

        /* Gerakan ikon */
        body a.wa-floating svg {
            animation: wa-icon 2s ease-in-out infinite;
        }

        /* Tombol bergerak naik turun */
        @keyframes wa-gerak {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        /* Efek lingkaran membesar */
        @keyframes wa-pulse {
            0% {
                transform: scale(0.9);
                opacity: 0.8;
            }

            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        /* Ikon sedikit membesar dan mengecil */
        @keyframes wa-icon {
            0%, 100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.12);
            }
        }

        /* Tampilan HP */
        @media (max-width: 768px) {
            body a.wa-floating {
                right: 16px !important;
                bottom: 16px !important;

                width: 50px !important;
                height: 50px !important;

                min-width: 50px !important;
                min-height: 50px !important;
            }

            body a.wa-floating svg {
                width: 25px !important;
                height: 25px !important;
            }
        }
    </style>

</head>

<body>

    <!-- KONTEN WEBSITE -->
    @yield('content')

    <!-- FLOATING WHATSAPP -->
    <a href="#"
       class="wa-floating"
       onclick="kirimWAUmum(event)"
       aria-label="Pesan Nirwana Florist melalui WhatsApp"
       title="Hubungi Nirwana Florist">

        <svg viewBox="0 0 32 32"
             xmlns="http://www.w3.org/2000/svg"
             aria-hidden="true">

            <path
                fill="currentColor"
                d="M16.02 3C8.85 3 3.02 8.82 3.02 15.99c0 2.29.6 4.52 1.75 6.5L3 29l6.69-1.75a13 13 0 0 0 6.33 1.64h.01C23.2 28.89 29 23.06 29 15.9 29 8.74 23.18 3 16.02 3zm0 23.68h-.01a10.8 10.8 0 0 1-5.5-1.5l-.39-.23-3.97 1.04 1.06-3.87-.25-.4a10.76 10.76 0 0 1-1.65-5.73c0-5.93 4.82-10.76 10.76-10.76 2.87 0 5.57 1.12 7.6 3.16a10.7 10.7 0 0 1 3.15 7.6c0 5.93-4.82 10.69-10.8 10.69zm5.9-8.05c-.32-.16-1.89-.93-2.18-1.03-.3-.1-.51-.16-.73.16-.22.33-.84 1.03-1.03 1.24-.19.22-.38.25-.7.08-.33-.16-1.37-.5-2.6-1.6-.96-.85-1.6-1.9-1.8-2.22-.19-.33-.02-.5.15-.66.15-.15.33-.38.49-.57.16-.19.22-.33.33-.54.1-.22.05-.41-.03-.57-.08-.16-.73-1.75-1-2.4-.27-.63-.54-.54-.73-.55h-.62c-.22 0-.57.08-.86.41-.3.32-1.13 1.1-1.13 2.68s1.16 3.1 1.32 3.32c.16.22 2.28 3.48 5.53 4.88.77.33 1.37.53 1.84.68.77.24 1.47.2 2.02.12.62-.1 1.89-.77 2.16-1.51.27-.73.27-1.35.19-1.48-.08-.14-.3-.22-.62-.38z"
            />

        </svg>
    </a>

    <!-- JAVASCRIPT UTAMA -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- PESAN WHATSAPP OTOMATIS -->
    <script>
        function kirimWAUmum(event) {

            event.preventDefault();

            const nomorWA = '62895629253800';

            const pesan = `Halo Nirwana Florist! Saya ingin memesan karangan bunga.`;

            const linkWA = 'https://wa.me/' + nomorWA + '?text=' + encodeURIComponent(pesan);

            window.open(linkWA, '_blank');
        }
    </script>

</body>
</html>
