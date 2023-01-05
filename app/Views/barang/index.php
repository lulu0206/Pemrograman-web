<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Komponen IOT</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Device name</th>
                <th scope="col">Merk</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            
            <tbody>
            <?= $i = 1; ?>
            <?php foreach ($perangkatiot as $p): ?>
                <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><img src="/img/<?= $p['sampul']; ?>" alt="" class="sampul"></td>
                <td><?= $p['device_name']; ?></td>
                <td><?= $p['device_brand']; ?></td>
                <td><?= $p['device_quantity']; ?></td>
                <td><?= $p['device_status']; ?></td>
                <td>
                    <a href="" class="btn btn-success">Detail</a>
                </td>
                </tr>

                <?php endforeach; ?>
                
            </tbody>
        </table>  
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

