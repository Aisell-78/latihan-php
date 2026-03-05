<?php
$ukuran_papan = 8;
?>
<head>
    <style>
        .papan-catur {
            border-collapse: collapse;
            margin: 20px auto;

        }
        .papan-catur td {
            width: 50px;
            height: 50px;
            border: 1px solid #333;
            text-align: center;
        }
        .hitam {
            background-color: #333;
            color: white;
        }
        .putih {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<table class="papan-catur">
    <?php
    for ($baris = 1; $baris <= $ukuran_papan; $baris++) {
        echo "<tr>";
        
        for ($kolom = 1; $kolom <= $ukuran_papan; $kolom++) {
            $total = $baris + $kolom;
            $warna = ($total % 2 == 0) ? "putih" : "hitam";

            echo "<td class='$warna'>$baris,$kolom</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
