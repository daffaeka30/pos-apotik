@extends('layouts.master')

@section('title')
    Daftar Pembelian
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Pembelian</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <button onclick="addForm()" class="btn btn-success btn-flat btn-xs"><i class="fa fa-plus-circle"></i>
                        Transaksi Baru</button>
                    @empty(!session('id_pembelian'))
                        <a href="{{ route('pembelian_detail.index') }}" class="btn btn-info btn-flat btn-xs"><i
                                class="fa fa-edit"></i> Transaksi Aktif</a>
                    @endempty
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-striped table-bordered table-pembelian">
                        <thead>
                            <th width="5%" class="text-center">No</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Supplier</th>
                            <th class="text-center">Total Item</th>
                            <th class="text-center">Total Harga</th>
                            <th class="text-center">Diskon</th>
                            <th class="text-center">Total Bayar</th>
                            <th width="15%" class="text-center">Aksi</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @includeIf('pembelian.supplier')
    @includeIf('pembelian.detail')
@endsection
@push('scripts')
    <script>
        let table, table1;

        $(function() {
            table = $('.table-pembelian').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('pembelian.data') }}',
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
                        data: 'supplier'
                    },
                    {
                        data: 'total_item'
                    },
                    {
                        data: 'total_harga'
                    },
                    {
                        data: 'diskon'
                    },
                    {
                        data: 'bayar'
                    },
                    {
                        data: 'aksi',
                        searchable: false,
                        sortable: false
                    },
                ]
            });

            $('.table-supplier').DataTable();
            table1 = $('.table-detail').DataTable({
                processing: true,
                bsort: false,
                dom: 'Brt',
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'kode_produk'
                    },
                    {
                        data: 'nama_produk'
                    },
                    {
                        data: 'harga_beli'
                    },
                    {
                        data: 'jumlah'
                    },
                    {
                        data: 'subtotal'
                    },
                ]
            })
        });

        function addForm() {
            $('#modal-supplier').modal('show');
        }

        function showDetail(url) {
            $('#modal-detail').modal('show');

            table1.ajax.url(url);
            table1.ajax.reload();
        }

        function deleteData(url) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                        '_token': $('[name=csrf-token]').attr('content'),
                        '_method': 'delete'
                    })
                    .done((response) => {
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menghapus data');
                        return;
                    });
            }
        }

        function cancelData(url) {
            if (confirm('Batalkan pembelian ini dan kembalikan stok?')) {
                $.post(url, {
                        '_token': $('[name=csrf-token]').attr('content')
                    })
                    .done(() => {
                        table.ajax.reload();
                    })
                    .fail(() => {
                        alert('Tidak dapat membatalkan pembelian');
                    });
            }
        }
    </script>
@endpush
