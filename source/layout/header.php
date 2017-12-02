<!DOCTYPE html>

<html lang="ru">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?= $title ?></title>
<meta name="keywords" content="<?= $keywords ?>">
<meta name="description" content="<?= $description ?>">
<meta property="og:title" content="<?= $ogTitle ?>">
<meta property="og:description" content="<?= $ogDescription ?>">
<meta property="og:type" content="article">
<meta property="og:url" content="<?= $home . $url ?>">
<meta property="og:image" content="<?= $home . $ogImage ?>">
<meta property="og:image:width" content="<?= $ogImageWidth ?>">
<meta property="og:image:height" content="<?= $ogImageHeight ?>">
<meta property="og:image:alt" content="Подшипники на Нансена">
<meta property="og:site_name" content="Подшипники на Нансена">
<meta property="og:locale" content="ru_RU">

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107098305-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-107098305-1');
</script>

<link href="/static/style.css" rel="stylesheet">


<div class="page">
    <header>
        <div class="container container-flex" itemscope itemtype="http://schema.org/LocalBusiness">
            <div class="name">
                <div class="title" itemprop="name">Подшипники на Нансена</div>
                <div class="slogan">подшипники и стопорные кольца</div>
            </div>
            <div class="delimiter"></div>
            <div class="contact">
                <div class="line" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="addressLocality">Ростов-на-Дону</span>, <span itemprop="streetAddress">ул. Нансена, 345</span>
                </div>
                <div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
                    <meta itemprop="latitude" content="47.2442">
                    <meta itemprop="latitude" content="39.7368">
                </div>
                <div class="line">
                    т/ф: (863) <a href="tel:+78632930984" itemprop="telephone">293-09-84</a>, <a href="tel:+78632939347" itemprop="telephone">293-93-47</a>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <a class="item <?= $page === 'index' ? 'active' : '' ?>" href="/">Главная</a>
            <a class="item <?= $page === 'bearings' ? 'active' : '' ?>" href="/bearings">О подшипниках</a>
            <a class="item <?= $page === 'contact' ? 'active' : '' ?>" href="/contact">Контакты</a>
        </div>
    </nav>
    <main class="content" id="content-wrap">
        <div class="container" id="content">