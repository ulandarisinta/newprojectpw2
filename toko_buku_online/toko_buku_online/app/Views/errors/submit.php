<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <h2 class="mb-5">Anda Berhasil Membuat Order</h2>
    <div class="mb-3">
        <div class="alert alert-succes">
            <strong>Sukses!</strong> Silahkan melakukan pembayaran dan mengirim bukti bayar ke Admin via Whatsapp.
            <a href="https://wa.me/6285764248956"
            class="btn btn-succes">Hubungi Admin</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>