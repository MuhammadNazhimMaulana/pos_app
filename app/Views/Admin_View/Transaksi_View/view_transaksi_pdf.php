<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #000000;
            text-align: center;
        }
    </style>

    <title>POS (Point Of Sales) | Invoice Transaksi</title>
</head>

<body>
    <div style="font-size: 64px; color: '#dddddd'; "><i>Invoice</i></div>
    <p>
        <i>Bonevian POS APP</i><br>
        Bandung, Indonesia <br>
        048124848
    </p>
    <p>
        Nama Kasir : <?= $transaksi->nama_kasir?><br>
        Tanggal Transaksi : <?= $transaksi->tanggal_transaksi ?><br>
        Waktu Transaksi  : <?= $transaksi->waktu_transaksi ?><br>
        Nomor Transaksi : <?= $transaksi->id_transaksi ?>
    </p>
    <table cellpadding="6">
        <tr>
            <th><strong>No.</strong></th>
            <th><strong>Nama Barang</strong></th>
            <th><strong>Jumlah Beli</strong></th>
            <th><strong>Nama Barang</strong></th>
            <th><strong>Harga Satuan</strong></th>
            <th><strong>Harga Total</strong></th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($item as $index => $shops) :?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $shops->nama_kasir ?></td>
            <td><?= $shops->nama_barang ?></td>
            <td><?= $shops->qty ?></td>
            <td><?= $shops->harga_item ?></td>
            <td><?= $shops->total_item ?></td>
        </tr>
        <?php endforeach ?>

        <tr>
            <td colspan="5">Total Bayar</td>
            <td><?= $total[0]->jumlah ?></td>
        </tr>
    </table>

</body>

</html>