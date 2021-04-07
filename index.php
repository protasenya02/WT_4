<?php include_once('process_text.php'); ?>

<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset = "utf-8">
    <link rel = "stylesheet" href = "./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Информация о товарах</title>
</head>
<body>

<!------------------------------Text section-------------------------->
<section>
    <div class="container">
        <div class="section_inner">
            <div class="section_title">Исходный текст</div>
            <p class="text_field"><?php read_file();?></p>
            <div class="section_title">Модифицированный текст</div>
            <p class="text_field"><?php process_file();?></p>
        </div>
    </div>
</section>
</body>
</html>