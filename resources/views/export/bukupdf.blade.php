<table class="table" style="border:1px solid #ddd">
    <thead>
        <tr>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Kategori</th>
            <th>Sinopsis</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($buku as $bk)
            <tr>
                <td>{{ $bk->judul_buku }}</td>
                <td>{{ $bk->pengarang }}</td>
                <td>{{ $bk->penerbit }}</td>
                <td>{{ $bk->tahun_terbit }}</td>
                <td>{{ $bk->kategori }}</td>
                <td>{{ $bk->sinopsis }}</td>
                </tr>
        @endforeach
        </tbody>
    </table>