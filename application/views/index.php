<!-- Begin Page Content -->
<div class="container-fluid">

<!-- row ux -->
<div class="row">
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumalah Anggota</div>
<div class="h1 mb-0 font-weight-bold text-white"><?=$this->ModelUser->getUserWhere(['role_id' => 1])->num_rows();?></div>
</div>

<div class="col-auto">
<a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-warning"><i></a>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2 bg-warning">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-md font-weight-bold text-white text-uppercase mb-1">Stock Buku Terdaftar</div>
<div class="h1 mb-0 font-weight-bold text-white">
    <?php
    $where = ['stock ! ='];
    $totalstock = $this->ModelBuku->total('stock', $where)
    echo $totalstock;
    ?>
</div>
</div>

<div class="col-auto">
<a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-warning"><i></a>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-success shadow h-100 py-2 bg-danger">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang dipinjam</div>
<div class="h1 mb-0 font-weight-bold text-white">
    <?php
    $where = ['dipinjam != 0'];
    $totaldipinjam =$this->ModelBuku->total('dipinjam', $where);
    echo $totaldipinjam;
    ?>
</div>
</div>

<div class="col-auto">
<a href="<?= base_url('user'); ?>"><i class="fas fa-user-tag fa-3x text-success"><i></a>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-warning shadow h-100 py-2 bg-success">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang dibooking</div>
<div class="h1 mb-0 font-weight-bold text-white">
    <?php
    $where = ['dibooking != 0'];
    $totaldibooking =$this->ModelBuku->total('dipinjam', $where);
    echo $totaldibooking;
    ?>
</div>
</div>

<div class="col-auto">
<a href="<?= base_url('user'); ?>"><i class="fas fa-shopping-cart fa-3x text-danger"><i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end row ux-->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- row table-->
<div class="row">
<div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
<div class="page-header">
    <span class="fas fa-users text-primary mt-2 ">DataUser</spam>
    <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
</div>
<table class="table mt-3">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Anggota</th>
            <th>Email</th>
            <th>Role ID</th>
            <th>Atif</th>
            <th>Member Sejak</th>
        </tr>
    </thead>
    <tbody>
       <?php
       $i = 1;
       foreach ($anggota as $a) {?>
       <tr>
           <td><?=$i++; ?></td>
           <td><?=$a['nama']; ?></td>
           <td><?=$a['email']; ?></td>
           <td><?=$a['role_id']; ?></td>
           <td><?=$a['is_active']; ?></td>
           <td><?=date('Y', $a['tanggal_input']); ?></td>
       </tr>
       <?php }?>
       </tbody>
</table>
</div>  

<div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
<div class="page-header">
    <span class="fas fa-users text-primary mt-2 ">DataBuku</span>
    <a href="<?= base_url('buku'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
</div>
<div class="table-responsive">
<table class="table mt-3" id="table-datatable">
    <thead>
        <tr>
            <th>#</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>ISBN</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
       <?php
       $i = 1;
       foreach ($buku as $b) { ?>
       <tr>
           <td><?=$i++; ?></td>
           <td><?=$a['judul_buku']; ?></td>
           <td><?=$a['pengarang']; ?></td>
           <td><?=$a['penerbit']; ?></td>
           <td><?=$a['tahun_terbit']; ?></td>
           <td><?=$a['isbn']; ?></td>
           <td><?=$a['stock']; ?></td>
       </tr>
       <?php }?>
       </tbody>
</table>
</div>  
</div>

</div>
<!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
