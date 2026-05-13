<!DOCTYPE html>
<html lang="id">

<head>
    <title>Topup NoLimit Linktree 5026241202</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Space+Mono:wght@400&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #071A8C;
            padding-top: 2%;
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        /* --- Ukuran & Posisi Kontainer --- */
        .main-card {
            width: 95%;
            max-width: 580px;
            padding: 40px 0px 120px 0px;
            border-radius: 24px 24px 0px 0px;
            background: linear-gradient(180deg, #4CAAC1 0%, #071A8C 100%);
            position: relative;
            margin: 0 auto;
        }

        .top-bar {
            width: 94%;
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            z-index: 10;
        }

        /* --- Bentuk Ikon Bulat --- */
        .top-btn {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            transition: transform 0.2s;
        }

        .top-btn:hover {
            transform: scale(0.95);
            background-color: white;
        }

        .top-btn svg {
            width: 18px;
            height: 18px;
        }

        /* --- Profile --- */
        .profile-container {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: white;
            margin-top: 10px;
        }

        .profile-pic-box {
            width: 25%;
            aspect-ratio: 1 / 1;
            border-radius: 50%;
            background-color: #164313;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-bottom: 12px;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .profile-pic-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .profile-bio {
            font-size: 15px;
            line-height: 1.4;
            width: 88%;
            margin: 0 auto 20px auto;
        }

        /* --- Social Row --- */
        .social-row {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-bottom: 35px;
        }

        .social-row a svg {
            width: 30px;
            height: 30px;
            fill: white;
            transition: transform 0.2s;
        }

        .social-row a:hover svg {
            transform: scale(1.1);
        }

        /* --- Navigasi Link --- */
        .links-area {
            width: 100%;
            padding: 0% 3%;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .link-item {
            width: 100%;
            height: 64px;
            border: 2px solid white;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            font-size: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: 0.2s;
        }

        .link-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .nav-icon {
            width: 44px;
            height: 44px;
            position: absolute;
            left: 8px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .nav-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .btn-text {
            width: 100%;
            text-align: center;
            padding: 0% 12%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .dots {
            position: absolute;
            right: 20px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 18px;
        }

        /* --- Footer --- */
        .footer-cta {
            width: 86%;
            padding: 16px 0px;
            background-color: white;
            color: black;
            border-radius: 50px;
            font-weight: 700;
            margin: 45px auto 25px auto;
            display: flex;
            justify-content: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .footer-nav {
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 8px;
            font-size: 11px;
            color: #FFFFFF;
        }

        .footer-nav a {
            color: #FFFFFF;
        }

        .footer-nav span {
            color: rgba(255, 255, 255, 0.6);
        }
    </style>
</head>
<script>
    function showme() {
        alert("Hallo Selamat Siang");
        Swal.fire({
  title: "Hallo",
  text: "Selamat Siang",
  icon: "success"
});
        console.log("Ini baris 229, sudah sampai disini");
        a = 18 + 10;
        console.log("Hasil penjumlahan :" + a);
        c = 1 * 2 * 3;
        console.log("Hasil perkalian : " + c);
    }
    function changeText () {
        const element = document.getElementById("intro");
        element.innerHTML = "Selamat Datang di TopUpNoLimit.com";
    }
    function changeStyle() {
        const element = document.getElementById("tombol");
        element.style.color = "red";
        element.style.background = "yellow";
    }
</script>


<button class="btn btn-primary" onclick="showme (); changeText();">Show me</button>
<button class="btn btn-primary" onclick="changeText();">Ganti Text Intro</button>
<button class="btn btn-primary" onclick="changeStyle();">Ganti Style Intro</button>

<body class="d-flex justify-content-center">

    <div class="main-card d-flex flex-column align-items-center">

        <div class="top-bar">
            <a href="https://linktr.ee/" target="_blank" class="top-btn">
                <svg viewBox="0 0 28 28" fill="currentColor">
                    <path d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"></path>
                </svg>
            </a>
            <a href="#" class="top-btn">
                <svg viewBox="0 0 256 256" fill="currentColor">
                    <path d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z"></path>
                </svg>
            </a>
        </div>

        <header class="profile-container">
            <div class="profile-pic-box">
                <img src="https://ugc.production.linktr.ee/cc7ca05b-665b-4300-b71f-2978c550870d_logo-hijau-07--1-.png?io=true&size=avatar-v3_0" alt="Logo">
            </div>
            <h1 class="profile-title">TopUpNoLimit.com</h1>
            <p class="profile-bio">Termurah 💸 Tercepat ⚡ Terpercaya By<br>@jessnolimit @siscakohl 🤝 Buka 24 jam ☀️🌙</p>

            <div class="social-row">
                <a href="https://instagram.com/topupnolimit" target="_blank"><svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a>
                <a href="https://youtube.com/@topupnolimit" target="_blank"><svg viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg></a>
                <a href="https://tiktok.com/@tunlbyjess" target="_blank"><svg viewBox="0 0 24 24"><path d="M15.9453 8.68918V15.6727C15.9453 19.1598 13.1048 22.0004 9.6177 22.0004C8.27369 22.0004 7.01685 21.5717 5.99251 20.8525C4.35796 19.7047 3.29004 17.8085 3.29004 15.6727C3.29004 12.1783 6.12333 9.34505 9.6104 9.34505C9.90101 9.34505 10.1843 9.36685 10.4676 9.40318V12.9121H10.4386C10.3151 12.8758 10.1843 12.8394 10.0536 12.8177H9.9954C9.86466 12.8032 9.74114 12.7813 9.60309 12.7813C8.00491 12.7813 6.70448 14.0817 6.70448 15.6799C6.70448 17.2782 8.00491 18.5786 9.60309 18.5786C11.2014 18.5786 12.5018 17.2782 12.5018 15.6799V2.00037H15.938C15.938 2.29822 15.9671 2.58881 16.0179 2.87213C16.2649 4.1798 17.035 5.30584 18.1175 6.01053C18.873 6.50452 19.7593 6.78785 20.7182 6.78785V10.2241C18.9416 10.2241 17.288 9.65222 15.9453 8.68918Z"></path></svg></a>
                <a href="https://x.com/topupnolimit" target="_blank"><svg viewBox="0 0 24 24"><path d="M17.8048 2.96973H20.8705L14.1394 10.6338L22.0034 21.0304H15.8321L11.0004 14.7125L5.46893 21.0304H2.40328L9.53424 12.8331L2.00342 2.96973H8.32798L12.6932 8.74114L17.8048 2.96973ZM16.7318 19.231H18.4313L7.43494 4.70248H5.60888L16.7318 19.231Z"></path></svg></a>
            </div>
        </header>

        <main class="links-area">
            <a href="https://topupnolimit.com/" target="_blank" class="link-item">
                <div class="nav-icon"><img src="https://ugc.production.linktr.ee/8cba468f-4470-4840-bf73-cf2d43e4b578_Foto-Profil-3.jpeg?io=true&size=thumbnail-stack_v1_0" alt="N"></div>
                <span class="btn-text">TOP UP SEKARANG!</span>
                <span class="dots">⋮</span>
            </a>

            <a href="https://instagram.com/topupnolimit" target="_blank" class="link-item">
                <div class="nav-icon"><img src="https://ugc.production.linktr.ee/3dc5317d-bdbe-4875-a299-b41f2a67bbd0_IMG-3986.png?io=true&size=thumbnail-stack_v1_0" alt="IG"></div>
                <span class="btn-text">Instagram</span>
                <span class="dots">⋮</span>
            </a>

            <a href="https://tiktok.com/@tunlbyjess" target="_blank" class="link-item">
                <div class="nav-icon"><img src="https://ugc.production.linktr.ee/0dd92409-ffd2-465c-bfab-2bb33dc8af5f_IMG-3987.png?io=true&size=thumbnail-stack_v1_0" alt="TT"></div>
                <span class="btn-text">TikTok</span>
                <span class="dots">⋮</span>
            </a>

            <a href="https://youtube.com/@topupnolimit" target="_blank" class="link-item">
                <div class="nav-icon"><img src="https://ugc.production.linktr.ee/b214ffdd-cf25-4af9-be00-f94ea4a1c525_IMG-3988.png?io=true&size=thumbnail-stack_v1_0" alt="YT"></div>
                <span class="btn-text">YouTube</span>
                <span class="dots">⋮</span>
            </a>

            <a href="https://x.com/topupnolimit" target="_blank" class="link-item">
                <div class="nav-icon"><img src="https://ugc.production.linktr.ee/3c64b137-a6c0-4b07-ae40-864050b148b7_IMG-3989.png?io=true&size=thumbnail-stack_v1_0" alt="X"></div>
                <span class="btn-text">Twitter / X</span>
                <span class="dots">⋮</span>
            </a>

            <a href="https://t.me/+CjGRQrz0bb8zZDFl" target="_blank" class="link-item">
                <div class="nav-icon"><img src="https://ugc.production.linktr.ee/aeeb3a92-1973-4599-849a-ddcff9b81971_IMG-3990.png?io=true&size=thumbnail-stack_v1_0" alt="TG"></div>
                <span class="btn-text">Grup Telegram</span>
                <span class="dots">⋮</span>
            </a>

            <a href="https://whatsapp.com/channel/0029VakW0x40AgWB6P5UYs0m" target="_blank" class="link-item">
                <div class="nav-icon"><img src="https://ugc.production.linktr.ee/d787ec37-9369-4cef-bb3b-804c9959041f_Logo-WA-4.jpeg?io=true&size=thumbnail-stack_v1_0" alt="WA"></div>
                <span class="btn-text">Grup WhatsApp</span>
                <span class="dots">⋮</span>
            </a>

            <a href="https://www.facebook.com/topupnolimit/" target="_blank" class="link-item">
                <div class="nav-icon"><img src="https://ugc.production.linktr.ee/b37ec716-14c6-4f34-a616-e6ab4c232cde_IMG-3992.png?io=true&size=thumbnail-stack_v1_0" alt="FB"></div>
                <span class="btn-text">Facebook</span>
                <span class="dots">⋮</span>
            </a>

            <a href="https://docs.google.com/forms/d/e/1FAIpQLSekUlKPdDRhG0zFZDMyrN472tX4iglC4tOVlBwo8sxMlPVowA/viewform?usp=sf_link" target="_blank" class="link-item">
                <div class="nav-icon"><img src="https://ugc.production.linktr.ee/6ae27694-a4dd-4014-8e02-2eda8c587f83_mail-box-icon-logo-illustration-postal-box-symbol-template-for-graphic-and-web-design-collection-fre.jpeg?io=true&size=thumbnail-stack_v1_0" alt="Mail"></div>
                <span class="btn-text">Punya Kritik & Saran? Kirim Di Sini!</span>
                <span class="dots">⋮</span>
            </a>
        </main>

        <a href="https://linktr.ee/topupnolimit.com" target="_blank" class="footer-cta shadow-sm">Bergabung dengan topupnolimit.com di Linktree</a>

        <div class="footer-nav">
            <a href="#">Cookie Preferences</a><span>•</span>
            <a href="https://linktr.ee/s/about/trust-center/report/?field86145911=https%3A%2F%2Flinktr.ee%2Ftopupnolimit.com" target="_blank">Report</a><span>•</span>
            <a href="https://linktr.ee/privacy" target="_blank">Privacy</a><span>•</span>
            <a href="https://linktr.ee/discover/trending" target="_blank">Explore</a>
        </div>
    </div>

</body>

</html>
