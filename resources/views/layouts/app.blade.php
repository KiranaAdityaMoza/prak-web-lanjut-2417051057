<!DOCTYPE html>
<html lang="id" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            font-family: system-ui, -apple-system, sans-serif;
        }
        /* Warna Biru SIAKAD Unila Navbar */
        .bg-siakad {
            background-color: #1e3a8a !important;
        }
        .btn-siakad {
            background-color: #1e3a8a;
            color: #ffffff;
            border: none;
        }
        .btn-siakad:hover {
            background-color: #172554;
            color: #ffffff;
        }
        /* Header Tabel ala SIAKAD Unila */
        .table-siakad thead {
            background-color: #334155 !important;
            color: #ffffff !important;
        }
        .table-siakad th {
            font-weight: 700;
            border-bottom: none;
        }
        .table-siakad-bordered th, 
        .table-siakad-bordered td {
            border: 1px solid #e2e8f0;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">

    @include('components.navbar')

    <main class="flex-shrink-0 my-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>