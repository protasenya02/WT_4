<!DOCTYPE html>

<html lang = "en">
<head>
    <meta charset = "utf-8" >
    <meta name="description" content="{CONFIG="meta_desc"}">
    <meta name="keywords" content="{CONFIG="meta_keys"}">

    <link rel = "stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/88d7dcb7cd.js" crossorigin="anonymous"></script>
    <title>{CONFIG="title"}</title>
</head>

<body>

<div id="header_anchor"></div>
<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="header_logo">{VAR="logo"}</div>
            <nav>
                <ul class="header_nav">
                    <li><a class="nav_link" href="#header_anchor">{DB="0"}</a></li>
                    <li><a class="nav_link" href="#contact">{DB="1"}</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<section class="main">
    <div class="container">
        <div class="main_inner">
            <h2 class="main_title">{VAR="title1"}</h2>

            <div class="main_info">
                <img src={VAR="photo1"} width="400" height="600" alt={VAR="photo1-alt"}>
                <p>{FILE="file1.txt"}</p>
            </div>
        </div>
    </div>
</section>

<hr>

<section id="contact">
    <div class="container">
        <div class="contact_inner">

            <h1 class="contact_title">{VAR="title2"}</h1>

            <div class="contact_info">
                <div class="info_inner">
                    <div class="contact_text">
                            <div>{VAR="phone-number"}</div>
                            <div>{VAR="address"}</div>
                            <div>{VAR="mail"}</div>
                    </div>
                    <div class="social_icons">
                        <a class="social_icon"  href={VAR="instagram"}target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="social_icon" href={VAR="facebook"}  target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="social_icon" href={VAR="youtube"}  target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <img src={VAR="photo2"} width="600" height="400" alt={VAR="photo2-alt"}>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer_inner">
            <p class="copyright">Copyright ©{IF "2021"<"2022"} 2021 {ELSE} 2022 {ENDIF} Valentina Protasenya</p>
        </div>
    </div>
</footer>
</body>
</html>