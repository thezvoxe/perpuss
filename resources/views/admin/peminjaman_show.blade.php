@extends('layout.index')

@section('konten')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">peminjam</h1>
                <!-- DataTales Example -->
                <!-- Button trigger modal -->
                <div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-border-0 shadow-sm rounded">
                        <div class="card-body">
                            <h4>Cover Buku</h4>
                            <div class="form-group mb-3 d-flex justify-content-center">
                                <img src="{{ asset('storage/buku/'.$peminjaman->buku->cover) }}" alt="" style="width: 250px; height:300px">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-border-0 shadow-sm rounded">
                        <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="judul">Nama Peminjam :</label>
                                    <label for="judul">{{ $peminjaman->user->name }}</label>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul Buku :</label>
                                    <label for="judul">{{ $peminjaman->buku->judul }}</label>
                                </div>
                                <div class="form-group">
                                    <label for="judul">jumlah :</label>
                                    <label for="judul">{{ $peminjaman->jumlah }}</label>
                                </div>
                                <div class="form-group">
                                    <label for="judul">status :</label>
                                    <label for="judul">{{ $peminjaman->status }}</label>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('peminjaman.index') }}" class="btn btn-primary">back</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
@endsection
