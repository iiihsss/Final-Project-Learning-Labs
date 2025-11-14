<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Wishlist</title>
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
    <h2 class="fw-bold text-primary mb-4">Tambah Wishlist Baru</h2>

    <form action="{{ route('produks.store') }}" method="POST" class="card p-4 shadow-sm bg-white">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('produks.index') }}" class="btn btn-secondary">← Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
</body>
</html>