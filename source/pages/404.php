<?php
    $title = 'Купить подшипники в Ростове на Дону на Нансена 345 - Страница не найдена';
    $keywords = 'подшипники, подшипники ростов, подшипники в ростове, подшипники в ростове на дону, купить подшипники';
    $description = 'Мы поможем Вам купить подшипники в Ростове на Дону по выгодным ценам. Широкий ассортимент подшипников в наличии.';

    $ogTitle = $title;
    $ogDescription = $description;
    $ogImage = '/media/bearings/rolling.jpg';
    $ogImageWidth = 200;
    $ogImageHeight = 200;
?>

<?php require('layout/header.php'); ?>

<style>
    .page > main .container:after {
        content: '404';

        position: absolute;
        z-index: -1;
        top: 50%;
        left: 50%;

        display: block;
        transform: translate(-50%, -50%);

        font-size: 300px;
        font-weight: 700;
        color: #f1f1f1;
    }
</style>

<section>
    <h1>Страница не найдена</h1>
    <p><a href="/">На главную</a>
</section>

<?php require('layout/footer.php'); ?>
