@extends('layout.index')
@section('konten')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"> Data Kategori</h1>
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
                <div class="col-md-12">
                    <div class="card-border-0 shadow-sm rounded">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4>Table Kategori</h4>
                                <a href="{{ route('kategori.create') }}" class="btn btn-md btn-primary mb-3">Tambah Kategori</a>
                            </div>
                            <table class="table table-boarded">
                                <thead>
                                    <tr>
                                        <th scope="">Nama Kategori</th>
                                        <th scope="">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($model as $item)
                                    <tr>
                                        <td>{{ $item->kategori }}</td>
                                        <td>
                                            <form action="{{ route('user.destroy', $item->id) }}" onsubmit="return confirm('Apakah Anda Yakin ?')"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-dark">Edit</a>
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="5">Data Tidak Tersedia</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Content Wrapper -->
@endsection
