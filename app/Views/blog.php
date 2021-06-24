<?= $this->extend('template'); ?>


<?= $this->section('content'); ?>
<div class="center">
 
    <div class="row">
        <div class="col">
            <h3>Daftar Kontak Penjual Buah-buahan dan Sayur-sayuran</h3>
        </div>
    </div>

<div class="container">
<table style="margin-left:auto;margin-right:auto" border="1" width="100%">
            <thead>
                <tr>
                    <th><h2>Penjual Buah buahan</h2></th>
                    <th>Penjual Sayur sayuran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                        <img src="/image/penjualbuah.jpg" class="card-img-top" alt="...">
                            <li>Ibu Farmawati</li>
                            <li>Telp : 0987654321</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                        <img src="/image/tukangsayur.jpg" class="card-img-top" alt="...">
                            <li>Bapak Abdulah</li>
                            <li>Telp : 123456789</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
            </table>

</div>
<hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2021 Yeremia Andreas Purba.</p>
        <p>TELKOM UNIVERSITY </p>
    </footer>

<?= $this->endSection(); ?>