<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
<body>
<p>
<div class="center">
    <!-- Content here -->
    <div class="row">
        <div class="col">
            <h2>SELAMAT DATANG DAN SELAMAT BERBELANJA</h2>
        </div>
    </div>

</div>

    <div style="max-width: 600px; margin: 3em auto">
        <table border="3" width="100%">
            <thead>
                <tr>
                    <td>
                        <ul>
                        <img src="image/buahnaga.jpg" width="200" height="200" style="border-radius: 50%;"/>
        <h1>Buah Naga</h1>
        <p>Buah-Buahan</p>
        <p>Rp.30.000</p>
                             </ul>
                    </td>
                    <td>
                        <ul>
                        <img src="image/alpukatmentega.jpg" width="200" height="200" style="border-radius: 50%;"/>
        <h1>Alpukat Mentega</h1>
        <p>Buah-Buahan</p>
        <p>Rp.21.500</p>
                             </ul>
                    </td>
                    <td>
                        <ul>
                        <img src="image/bayam.jpg" width="200" height="200" style="border-radius: 50%;"/>
        <h1>Sayur Bayam</h1>
        <p>Sayur-Sayuran</p>
        <p>Rp.35.000</p>
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
</body>
<?= $this->endSection(); ?>