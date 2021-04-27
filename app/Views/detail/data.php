<!-- <?= $this->extend('layout/template_detail') ?> -->

<?= $this->section('content') ?>
<div class="position-relative mb-30">
    <img src="<?= base_url() ?>/Njerone/img/news/news177.jpg" alt="news-details" class="img-fluid">
    <div class="topic-box-top-sm">
        <div class="topic-box-sm color-cinnabar mb-20"><?= $tagnya ?></div>
    </div>
</div>
<h2 class="title-semibold-dark size-c30"><?= $judul ?></h2>
<ul class="post-info-dark mb-30">
    <li>
        <a href="#">
            <span>By</span> <?= $pembuat ?></a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-calendar" aria-hidden="true"></i><?= $create_at ?></a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-eye" aria-hidden="true"></i>202</a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-comments" aria-hidden="true"></i>20</a>
    </li>
</ul>
<div id="isi_konten">
    <?= $konten ?>
</div>
<ul class="blog-tags item-inline">
    <li>Tags</li>
    <li>
        <a href="#">#Business</a>
    </li>
    <li>
        <a href="#">#Magazine</a>
    </li>
    <li>
        <a href="#">#Lifestyle</a>
    </li>
</ul>
<?= $this->endSection() ?>