<?php

$data = file_get_contents('data.json');
$daftar_produk = json_decode($data,true);

$id_terpilih = isset($_GET['id']) ? $_GET['id'] : null;
$produk_detail = null;

if ($id_terpilih && isset($daftar_produk[$id_terpilih])) {
    $produk_detail = $daftar_produk[$id_terpilih];
}