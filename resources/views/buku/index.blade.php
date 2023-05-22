<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
{{-- @extends('layouts.app')
@section('content') --}}

<body>
    <div class="container">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1>Data Buku</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                    data-target="#exampleModal">
                    Tambah Data
                </button>

                <div class="col-md-7">
                    <form class="form-inline my-2 my-lg-0" method="GET" action="/buku">
                        <input name="cari" class="form-control w-75 mr-sm-2" id="search" placeholder="Cari">
                        <button type="submit" class="btn btn-outline-secondary my-2 my-sm-0">Cari</button>
                    </form>
                </div>

            </div>
            <table class="table table-hover">
                <tr>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>Sinopsis</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data_buku as $buku)
                    <tr>
                        <td>{{ $buku->judul_buku }}</td>
                        <td>{{ $buku->pengarang }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                        <td>{{ $buku->kategori }}</td>
                        <td>{{ $buku->sinopsis }}</td>
                        <td>
                            <a href="/buku/{{ $buku->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/buku/delete/{{ $buku->id }}" class="btn btn-danger bgn-sm" onclick="return confirm('Yakin Mau Dihapus?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <a href="/buku/exportpdf" class="btn btn-sm btn-success">Export PDF</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/buku/create" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul Buku</label>
                            <input name="judul_buku" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="EmailHelp" placeholder="Judul Buku">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pengarang</label>
                            <input name="pengarang" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="EmailHelp" placeholder="Pengarang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Penerbit</label>
                            <input name="penerbit" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="EmailHelp" placeholder="Penerbit">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tahun Terbit</label>
                            <input name="tahun_terbit" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="EmailHelp" placeholder="Tahun Terbit">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kategori</label>
                            <input name="kategori" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="EmailHelp" placeholder="Kategori">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Sinopsis</label>
                            <textarea name="sinopsis" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>
{{-- @endsection --}}

</html>
