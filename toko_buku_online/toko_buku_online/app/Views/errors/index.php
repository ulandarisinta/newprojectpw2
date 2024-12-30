<?= $this->extend('template')?>

<?= $this->section('main')?>
<div class="container p-5 bg-danger-subtle rounded-buttom-4">
    <h1>Selamat Datang di Toko Buku Online</h1>
    <h5>Kami Menyediakan Berbagai Jenis BUku Dari Penerbit Terpercaya.
</h5>
<a href="<?= base_url() ?>" class="btn btn-primary">Lihat Produk</a>
</div>

<div class="container">
<h2 class="mt-5">Buku Best Seller</h2>
<div class="row gy-3">
    <div class="col-3">
      <div class="card" style="width: 18rem;>
      <img src="<?= base_url('images/images01.jpg')?>" class="card-img-top" alt="...">
      <div class="card-tittle">Treatise Of Morals</h5>
      <p class="card-tittle">Rp250.000</p>
      <a href="#" class="btn btn-primary">Add to card</a>
    </div>
    </div>

    </div>
    <div class="col-3"></div>
    <div class="col-3"></div>
    <div class="col-3"></div>
  </div>
</div>

<footer class="bg-danger-subtle py-5">
  <div class="container">
    <span>Copyright &copy; 2024, E-Commerce Kelas 3C. All rigt reserved</span>
</div>
<?= $this->endSection()?>