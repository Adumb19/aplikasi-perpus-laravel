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
                    <h1 class="h3 mb-4 text-gray-800">Data Buku</h1>

                    <div class="table-responsive">
                        <div align='right' class="mb-3">
                            <a href="{{ route('book.create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <table class="table table-bordered" id="datatables">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Penerbit</th>
                                    <th>Quantity</th>
                                    <th>Deskripsi</th>
                                    <th>Penulis</th>
                                    <th>Tahun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->judul }}</td>
                                    <td>{{ $d->penerbit }}</td>
                                    <td>{{ $d->qty }}</td>
                                    <td>{{ $d->deskripsi }}</td>
                                    <td>{{ $d->penulis }}</td>
                                    <td>{{ $d->tahun }}</td>
                                    <td>
                                        <a href="{{ route('book.edit', $d->id) }}" class="btn btn-ss bg-success"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('book.destroy', $d->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-ss bg-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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

    @include('inc.logout')

    @include('inc.js')
</body>

</html>