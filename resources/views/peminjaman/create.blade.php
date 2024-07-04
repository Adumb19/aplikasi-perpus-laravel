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
                                <button type="button" class="btn btn-sm btn-primary mx-3" id="btn-add">Tambah Buku</button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Buku</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select name="id_buku[]" class="form-control">
                                                <option value="">Pilih Buku</option>
                                                @foreach ($buku as $b)
                                                <option value="">{{ $b->judul }}</option>
                                                @endforeach
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
                        <input type="submit" value="Simpan" class="btn btn-primary">
                        <input type="button" value="Kembali" class="btn btn-info">
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

    <script>
        $('#btn-add').click(function() {
            let tbody = $('tbody');
            let newRow = '<tr>';

            newRow += "<td><select name='id_buku[]' class='form-control'>";
            newRow += "<option value=''>Pilih Buku</option>";
            newRow += "@foreach ($buku as $b)";
            newRow += "<option value=''>{{ $b->judul }}</option>";
            newRow += "@endforeach"
            newRow += "</select></td>";

            newRow += "<td><input type='date' name='tgl_pinjam[]' class='form-control'></td>"

            newRow += "<td><input type='date' name='tgl_pengembalian[]' class='form-control'></td>";

            newRow += "<td>Hapus</td>";

            newRow += '</tr>';

            tbody.append(newRow);
        });
    </script>
    
</body>

</html>