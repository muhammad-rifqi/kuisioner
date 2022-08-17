<?php
include "config.php";
include "helper.php";
if($_GET['menu'] == ''){
?>
<div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Primary Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Warning Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Success Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
} if($_GET['menu'] == 'kota'){
?>
<div class="container-fluid px-4">
        <h1 class="mt-4">Data Kota</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Kota</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="btn btn-primary" href="?menu=tambahkota"> Tambah </a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Kota
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kota</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                            $sql = mysqli_query($koneksi,"select * from kota");
                            while($data = mysqli_fetch_assoc($sql)){
                        ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['nama_kota']; ?></td>
                            <td><a href="?menu=editkota&id=<?php echo $data['id']; ?>" class="btn btn-warning">Ubah</a> <a href="aksi.php?act=hapuskota&id_kota=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php } if($_GET['menu'] == 'tambahkota') {?>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Kota</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Tambah Kota</li>
        </ol>

        <div class="card-header">
            <h3 class="text-left">Tambah Kota</h3>
        </div>
        <div class="card-body">
            <form method="post" action="aksi.php?act=tambahkota">
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputKota" type="text" name="nama_kota" placeholder="Masukan Kota" />
                    <label for="inputKota">Nama Kota</label>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button class="btn btn-primary" type="submit">Simpan</button></div>
                </div>
            </form>
        </div>
    </div>    
                
<?php } if($_GET['menu'] == 'editkota'){ 
$data = mysqli_fetch_array(mysqli_query($koneksi,"select * from kota where id = '".$_GET['id']."'"));    
?>
<div class="container-fluid px-4">
        <h1 class="mt-4">Data Kota</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Kota</li>
        </ol>

        <div class="card-header">
            <h3 class="text-left">Edit Kota</h3>
        </div>
        <div class="card-body">
            <form method="post" action="aksi.php?act=editkota">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputKota" type="text" name="nama_kota" value="<?php echo $data['nama_kota']; ?>" placeholder="Masukan Kota" />
                    <label for="inputKota">Nama Kota</label>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button class="btn btn-primary" type="submit">Simpan</button></div>
                </div>
            </form>
        </div>
    </div>    

<?php }if($_GET['menu'] == 'responden'){ ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Responden</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Responden</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="btn btn-primary"> Tambah </a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Responden
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }if($_GET['menu'] == 'kecamatan') { ?>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Kecamatan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Kecamatan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="btn btn-primary"> Tambah </a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Kecamatan
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                        <th>ID</th>
                            <th>Nama Kota</th>
                            <th>Nama Kecamatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kota</th>
                            <th>Nama Kecamatan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                            $sql = mysqli_query($koneksi,"select * from kecamatan");
                            while($data = mysqli_fetch_assoc($sql)){
                        ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo kota($data['id_kota']); ?></td>
                            <td><?php echo $data['nama_kecamatan']; ?></td>
                            <td><a href="?menu=editkecamatan&id=<?php echo $data['id']; ?>" class="btn btn-warning">Ubah</a> <a href="aksi.php?act=hapuskecamatan&id_kecamatan=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php } if($_GET['menu'] == 'kelurahan') { ?>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Kelurahan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Kelurahan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="btn btn-primary"> Tambah </a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Kelurahan
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } if($_GET['menu'] == 'pengguna') { ?>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Pengguna</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Pengguna</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="btn btn-primary" href="?menu=tambahpengguna"> Tambah </a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Pengguna
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php }if($_GET['menu'] == 'tambahpengguna') {?>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Kota</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Tambah Kota</li>
        </ol>

        <div class="card-header">
            <h3 class="text-left">Tambah Kota</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputFirstName">First name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">Last name</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                    <label for="inputEmail">Email address</label>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                            <label for="inputPasswordConfirm">Confirm Password</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button class="btn btn-primary" type="submit">Create Account</button></div>
                </div>
            </form>
        </div>
    </div>    



<?php } ?>