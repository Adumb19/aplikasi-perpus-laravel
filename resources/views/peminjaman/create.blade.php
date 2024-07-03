@include('inc.head')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('inc.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('inc.navbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Peminjam</h1>
                   
                    <form action="" method="">
                        @csrf
                        <div class="mb-3 row">
                            <div class="col-3">
                                <label for="">Nama Peminjam</label>
                                <select class="form-control" name="id_anggota" id="">
                                    <option value="">Pilih Anggota</option>
                                    @foreach ($data as $key => $d)
                                    <option value="">{{ $d->member->nama_anggota }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-primary">Tambah Anggota</button>
                            </div>
                            <div class="mb-3">
                                <label for="">No. Transaksi</label>
                                <input type="text" name="no_transaksi" class="form-control" value="{{ $kode_transaksi }}">
                            </div>
                        </div>
                        <div class="table-transaction">
                            <div align="right" class="mb-3">
                                <button class="btn btn-sm btn-primary mx-3 btn-add">Tambah Buku</button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Buku</th>
                                        <th>Tanggal Pinjaman</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select name="id_buku[]" class="form-control">
                                                <option value="">Pilih Buku</option>
                                                <option value=""></option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="date" name="tgl_pinjam[]" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="date" name="tgl_pengembalian[]" id="" class="form-control">
                                        </td>
                                        <td>
                                            Hapus
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.btn-add').click(function(){
            alert('duarrrr')
        })
    </script>
    @include('inc.js')
</body>

</html>