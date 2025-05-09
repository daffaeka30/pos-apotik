<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pendapatan</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
    
        table th, table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }
    
        table thead {
            background-color: #f2f2f2;
        }
    
        .text-center {
            text-align: center;
        }
    
        .mt-4 {
            margin-top: 1.5rem;
        }
    
        .mt-5 {
            margin-top: 3rem;
        }
    </style>
    
</head>
<body>
    <h3 class="text-center">Laporan Pendapatan</h3>
    <h4 class="text-center">
        Tanggal {{ tanggal_indonesia($awal, false) }}
        s/d
        Tanggal {{ tanggal_indonesia($akhir, false) }}
    </h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th>Tanggal</th>
                <th>Penjualan</th>
                <th>Pembelian</th>
                <th>Pengeluaran</th>
                <th>Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    @foreach ($row as $col)
                        <td>{{ $col }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>