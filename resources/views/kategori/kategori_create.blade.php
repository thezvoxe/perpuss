@extends('layout.index')

@section('konten')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form action="{{ route('kategori.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nm_kategori">Nama Kategori</label>
                                    <input type="text" class="form-control" name="nm_kategori" id="nm_kategori">
                                    @error('nm_kategori')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" aria-describedby="emailHelp">
                                    @error('deskripsi')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Jenis Kategori</label>
                                    <select class="custom-select" name="kategori" id="Kategori">
                                        <option selected>Pilih Kategori</option>
                                        <option value="fiksi">Fiksi</option>
                                        <option value="nonfiksi">Non Fiksi</option>
                                    </select>
                                    @error('kategori')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Content Wrapper -->
@endsection
