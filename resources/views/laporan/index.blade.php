@extends('layouts.master')

@section('title')
    Laporan Pendapatan {{ tanggal_indonesia($tanggalAwal, false) }} s/d {{ tanggal_indonesia($tanggalAkhir, false) }}
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Laporan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <button onclick="updatePeriode()" class="btn btn-info btn-flat btn-xs"><i
                            class="fa fa-exchange"></i> Ubah Periode</button>
                    <a href="{{ route('laporan.export_pdf', [$tanggalAwal, $tanggalAkhir]) }}" target="_blank" class="btn btn-success btn-xs btn-flat"><i
                            class="fa fa-download"></i> Export PDF</a>
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <th width="5%" class="text-center">No</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Penjualan</th>
                            <th class="text-center">Pembelian</th>
                            <th class="text-center">Pengeluaran</th>
                            <th class="text-center">Pendapatan</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @includeIf('laporan.form')
@endsection
@push('scripts')
    <script>
        let table;

        $(function() {
            table = $('.table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('laporan.data', [$tanggalAwal, $tanggalAkhir]) }}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'tanggal'
                    },
                    {
                        data: 'penjualan'
                    },
                    {
                        data: 'pembelian'
                    },
                    {
                        data: 'pengeluaran'
                    },
                    {
                        data: 'pendapatan'
                    },
                ]
            });

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });

        function updatePeriode(url) {
            $('#modal-form').modal('show');
        }
    </script>
@endpush
