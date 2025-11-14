<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Wishlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            background-color: #FFFFFF !important;
            color: #198754 !important;
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .container, .container-fluid,
        .row, .col, .table, .card, .card-body,
        input, select, textarea, form,
        .table-striped tbody tr:nth-of-type(odd),
        .table-bordered, table, th, td {
            background-color: #FFFFFF !important;
            color: #198754 !important;
            border-color: #198754 !important;
        }

        label, a, h1, h2, h3, .text-primary {
            color: #198754 !important;
        }

        thead th {
            background-color: #FFFFFF !important;
            color: #198754 !important;
            border-color: #198754 !important;
        }

        button, .btn {
            background-color: #198754 !important; 
            color: #FFFFFF !important; 
            border: none !important;
        }

        button:hover, .btn:hover {
            background-color: #157347 !important;
        }

        .bg-light, .bg-white, .bg-body, .bg-transparent {
            background-color: #FFFFFF !important;
        }
    </style>

</head>
<body class="bg-light">
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-primary">My Wishlist</h1>
        <a href="{{ route('produks.create') }}" class="btn btn-success">+ Tambah Wishlist</a>
    </div>

    <form action="{{ route('produks.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama atau kategori..." value="{{ request('search') }}">
            <button class="btn btn-success" type="submit">Cari</button>
        </div>
    </form>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produks as $produk)
            <tr>
                <td>{{ $produk->produk_id }}</td>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->kategori }}</td>
                <td>Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('produks.edit', $produk) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('produks.destroy', $produk) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus wishlist ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        @if($produks->isEmpty())
            <tr>
                <td colspan="6" class="text-center text-muted">
                    @if(request('search'))
                        Pencarian untuk "{{ request('search') }}" tidak ditemukan.
                    @else
                        Belum ada wishlist.
                    @endif
                </td>
            </tr>
        @endif
        </tbody>
    </table>
</div>
</body>
</html>