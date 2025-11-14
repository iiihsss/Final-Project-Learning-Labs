<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit My Wishlist</title>
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
    <h2 class="fw-bold text-primary mb-4">Edit My Wishlist</h2>

    <form action="{{ route('produks.update', $produk) }}" method="POST" ...>
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" value="{{ $produk->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" value="{{ $produk->kategori }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control" required>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('produks.index') }}" class="btn btn-secondary">← Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
</body>
</html>