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
                    <h1 class="h3 mb-4 text-gray-800">Ubah Anggota</h1>
                    <form action="{{ route('member.update', $edit->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Nama Anggota</label>
                            <input value="{{ $edit->nama_anggota }}" name="nama_anggota" type="text" class="form-control" placeholder="Masukan Nama Anggota">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input value="{{ $edit->email }}" name="email" type="text" class="form-control" placeholder="Masukan Email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">No. Telephone</label>
                            <input value="{{ $edit->no_telp }}" name="no_telp" type="text" class="form-control" placeholder="Masukan Nomor Telephone">
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