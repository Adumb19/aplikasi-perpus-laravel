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
                    <h1 class="h3 mb-4 text-gray-800">Data Pengembalian</h1>

                    <div class="table-responsive">
                        <div align='right' class="mb-3">
                            <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">Tambah Peminjam</a>
                        </div>
                        <table class="table table-bordered" id="datatables">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No. Transaksi</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($data as $key => $d) --}}
                                <tr>
                                    <td>
                                        {{-- {{ $loop->iteration }} --}}
                                    </td>
                                    <td>
                                        {{-- {{ $d->no_transaksi }} --}}
                                    </td>
                                    <td>
                                        {{-- {{ $d->id_anggota }} --}}
                                    </td>
                                    <td>
                                        <a href="
                                        {{-- {{ route('level.edit', $d->id) }} --}}
                                         " class="btn btn-ss bg-success">Detail</a>
                                        <a href="
                                        {{-- {{ route('level.edit', $d->id) }} --}}
                                         " class="btn btn-ss bg-success">Delete</a>
                                        <a href="
                                        {{-- {{ route('level.edit', $d->id) }} --}}
                                         " class="btn btn-ss bg-success">Print</a>
                                        {{-- <form action="{{ route('level.destroy', $d->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-ss bg-danger"><i class="fas fa-trash"></i></button>
                                        </form> --}}
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
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

    @include('inc.js')
</body>

</html>