<?= $this->extend('layout/templates') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>About</h1>
            <?php 
                // dd($alamat);
                foreach ($alamat as $datantya) {
            ?>
            <ul>
                <li><?= $datantya['tipe'] ?></li>
                <li><?= $datantya['jalan'] ?></li>
            </ul>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>