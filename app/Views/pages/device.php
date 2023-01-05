<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>INI ADALAH HALAMAN DEVICE</h1>
            <?php foreach ($barang as $a): ?>
                <ul>
                    <li><?= $a['tipe']; ?></li>
                    <li><?= $a['nama']; ?></li>
                    <li><?= $a['kota']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>