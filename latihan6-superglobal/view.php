<h2>Daftar Menu</h2>
<ul>
    <?php foreach ($daftar_produk as $id => $barang) : ?>
        <li>
            <strong><?=  $barang['nama'] ?></strong> - <a href="index.php?id=<?= $id ?>">Lihat Detail</a>
        </li>
        <?php endforeach; ?>
</ul>

<?php if ($produk_detail) : ?>
<strong><?= $produk_detail['nama'] ?></strong>
<p><?= $produk_detail['deskripsi'] ?></p>
harga: <strong>Rp <?= number_format($produk_detail['harga'], $decimals = 0, ',','.') ?></strong>
<a href="index.php">Tutup Detail</a>
<?php else : ?>
    <P>Silahkan pilih menu di samping untuk melihat detail.</P>
    <?php endif; ?>