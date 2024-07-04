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
                    <h1 class="h3 mb-4 text-gray-800">Tambah Buku</h1>
                    <form action="{{ route('book.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Judul Buku</label>
                            <input name="judul" type="text" class="form-control" placeholder="Masukan Judul Buku">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Penerbit</label>
                            <input name="penerbit" type="text" class="form-control" placeholder="Masukan Penerbit">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Quantity</label>
                            <input name="qty" type="text" class="form-control" placeholder="Masukan Quantity">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="6" placeholder="Masukan Deskripsi Buku"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Penulis</label>
                            <input name="penulis" type="text" class="form-control" placeholder="Masukan Nama Penulis">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tahun</label>
                            <input name="tahun" type="text" class="form-control" placeholder="Masukan Tahun Buku">
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                            <input type="reset" class="btn btn-danger" value="Reset">
                            <a href="{{ url()->previous() }}" class=" btn btn-info">Kembali</a>
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

    @include('inc.logout')

    @include('inc.js')
</body>

</html>