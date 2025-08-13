<?php
session_start();
include 'konek.php';

$query = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
$rows  = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'inc/head.php'; ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'inc/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'inc/nav.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Pengguna</h1>

                    <div class="card">
                        <div class="card-body">
                            <div align="right" class="mb-3">
                                <a href="tambah-user.php" class="btn btn-primary">Tambah</a>
                            </div>
                            <?php if (isset($_GET['hapus'])) { ?>
                                <div class="alert alert-primary" role="alert">
                                    Data berhasil dihapus
                                </div>
                            <?php } ?>
                            <?php if (isset($_GET['tambah'])) { ?>
                                <div class="alert alert-primary" role="alert">
                                    Data berhasil ditambah
                                </div>
                            <?php } ?>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($rows as $key => $row): ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td>
                                                <a href="tambah-user.php?edit=<?php echo $row['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                                <a href="tambah-user.php?delete=<?php echo $row['id'] ?>"
                                                    onclick="return confirm('Apakah anda yakin??')"
                                                    class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <? include 'inc/footer.php'; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->    <!-- Bootstrap core JavaScript-->    <!-- Core plugin JavaScript-->    <!-- Custom scripts for all pages-->
    <?php include 'inc/js.php'; ?>
    <!-- Logout Modal-->    <!-- Bootstrap core JavaScript-->    <!-- Core plugin JavaScript-->    <!-- Custom scripts for all pages-->






</body>

</html>