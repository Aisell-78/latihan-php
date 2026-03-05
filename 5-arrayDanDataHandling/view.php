<head>
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
            gap: 1rem;
        }
        .out-of-stock {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<div class="product-grid">
<?php foreach ($katalog_produk as $produk) : ?>
    <article>
        <img src="<?= $produk['gambar'] ?>" alt="<?= $produk['nama'] ?>">
        <h3><?= $produk['nama'] ?></h3>
        <p>Harga: Rp <?= number_format($produk['harga'], 0, ',', '.') ?></p>

        <?php if ($produk['stok'] > 0)  : ?>
            <p>Stok tersedia: <?= $produk['stok'] ?></p>
            <button>Tambah ke Keranjang</button>
        <?php else : ?>
            <p class="out-of-stock">Stok Habis</p>
            <button disabled>Habis</button>
            <?php endif; ?>
    </article>
<?php endforeach; ?>
</div>
