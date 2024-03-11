@extends('layout.index')
@section('konten')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Buku Yang Dipinjam</h1>
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
                            <table class="table table-boarded">
                                <thead>
                                    <tr>
                                        <th scope="">No</th>
                                        <th scope="">Cover</th>
                                        <th scope="">Judul</th>
                                        <th scope="">Tanggal Pinjam</th>
                                        <th scope="">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($peminjaman as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('storage/buku/'.$item->buku->cover) }}" alt="" style="width: 100px; height:100px"></td>
                                        <td>{{ $item->buku->judul }}</td>
                                        <td>{{ $item->created_at->format('d M Y') }}</td>
                                        @if ($item->status == 'dipinjam')
                                        <td><span class="badge badge-success">{{ $item->status }}</span></td>
                                        @else
                                        <td><span class="badge badge-danger">{{ $item->status }}</span></td>
                                        @endif
                                    </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="9">Data Tidak Tersedia</td>
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
