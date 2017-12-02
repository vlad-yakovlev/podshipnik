<?php
    $title = 'Купить подшипники в Ростове на Дону на Нансена 345 - Контакты';
    $keywords = 'подшипники, подшипники ростов, подшипники в ростове, подшипники в ростове на дону, купить подшипники';
    $description = 'Мы поможем Вам купить подшипники в Ростове на Дону по выгодным ценам. Широкий ассортимент подшипников в наличии.';

    $ogTitle = $title;
    $ogDescription = $description;
    $ogImage = '/media/bearings/rolling.jpg';
    $ogImageWidth = 200;
    $ogImageHeight = 200;
?>

<?php require('layout/header.php'); ?>

<link href="/static/contact.css" rel="stylesheet">

<section class="contact" itemscope itemtype="http://schema.org/LocalBusiness">
    <h1 itemprop="name">Подшипники на Нансена</h1>

    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <span itemprop="postalCode">344023</span>, <span itemprop="addressLocality">Ростов-на-Дону</span>,
        <span itemprop="streetAddress">ул. Нансена, 345</span>
    </div>

    <div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
        <meta itemprop="latitude" content="47.2442">
        <meta itemprop="latitude" content="39.7368">
    </div>

    <div>
        т/ф: (863) <a href="tel:+78632930984" itemprop="telephone">293-09-84</a>, <a href="tel:+78632939347" itemprop="telephone">293-93-47</a>
    </div>

    <div>
        тел: (863) <a href="tel:+78632477969" itemprop="telephone">247-79-69</a>, <a href="tel:+78632485576" itemprop="telephone">248-55-76</a>
    </div>

    <div>ПН - ПТ, с 08:00 до 17:30</div>

    <div>
        E-mail: <a href="mailto:gpz1@aaanet.ru" itemprop="email">gpz1@aaanet.ru</a>, <a href="mailto:agent2@donpac.ru" itemprop="email">agent2@donpac.ru</a>
    </div>
</section>

<script src="/static/contact.js"></script>
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCK8VX4bVMgNllr1qZBA_FZjVT28ISHP-E&callback=mapSet" async></script>

<?php require('layout/footer.php'); ?>
