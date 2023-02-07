<!DOCTYPE html>
<html lang="id">

<head>
    <?php $this->load->view('admin/template-parts/head') ?>
    <style>
        .text-monospace {
            font-family: 'Courier New', Courier, monospace!important;
            font-weight: 700;
        }

        .list-header, .list-footer {
            font-weight: bold;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view('admin/template-parts/header') ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php $this->load->view('admin/template-parts/sidebar') ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <div class="card my-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Kasir
                        </div>
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <!-- select items -->
                                    <select id="add_barang_item" class="form-control select2">
                                        <option value="">Pilih Barang</option>
                                        <?php foreach ($items as $item) : ?>
                                            <option value="<?= $item->id ?>"><?= "[{$item->item_code}] {$item->name} ({$item->unit})" ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary" type="button" data-toggle="input-number" data-action="minus"><i class="fas fa-minus"></i></button>
                                        </div>
                                        <input type="text" class="form-control text-center input-number" id="add_barang_amount" placeholder="Stok" value="0">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" data-toggle="input-number" data-action="plus"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <button class="btn btn-primary btn-block">Tambah</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="list-header row border-top border-bottom py-2">
                                <div class="col-2">
                                    <!-- checkbox -->
                                    <input type="checkbox" class="mr-2" id="check_all_items">
                                    <!-- item code -->
                                    Kode Barang
                                </div>
                                <div class="col-4">
                                    <!-- item name -->
                                    Barang & Satuan
                                </div>
                                <div class="col-1 text-center">
                                    <!-- item amount -->
                                    Jumlah
                                </div>
                                <div class="col-2 text-right">
                                    <!-- item price -->
                                    Harga
                                </div>
                                <div class="col-2 text-right">
                                    <!-- item total -->
                                    Total
                                </div>
                            </div>
                            <div class="row item-row border-bottom py-1">
                                <div class="col-2">
                                    <!-- checkbox -->
                                    <input type="checkbox" class="mr-2 check-item">
                                    <!-- item code -->
                                    ITEM0001
                                </div>
                                <div class="col-4">
                                    <!-- item name -->
                                    Item 1 (pcs)
                                </div>
                                <div class="col-1 text-center">
                                    <!-- item amount -->
                                    10
                                </div>
                                <div class="col-2 text-right text-monospace">
                                    <!-- item price -->
                                    10.000
                                </div>
                                <div class="col-2 text-right text-monospace">
                                    <!-- item total -->
                                    100.000
                                </div>
                                <div class="col-1 text-right">
                                    <span class="text-danger cursor-pointer btn-delete-item"><i class="fas fa-times fa-fw"></i></span>
                                </div>
                            </div>
                            <div class="row item-row border-bottom py-1">
                                <div class="col-2">
                                    <!-- checkbox -->
                                    <input type="checkbox" class="mr-2 check-item">
                                    <!-- item code -->
                                    ITEM0002
                                </div>
                                <div class="col-4">
                                    <!-- item name -->
                                    Item 2 (ball)
                                </div>
                                <div class="col-1 text-center">
                                    <!-- item amount -->
                                    10
                                </div>
                                <div class="col-2 text-right text-monospace">
                                    <!-- item price -->
                                    120.000
                                </div>
                                <div class="col-2 text-right text-monospace">
                                    <!-- item total -->
                                    1.200.000
                                </div>
                                <div class="col-1 text-right">
                                    <span class="text-danger cursor-pointer btn-delete-item"><i class="fas fa-times fa-fw"></i></span>
                                </div>
                            </div>
                            <div class="row item-row border-bottom py-1">
                                <div class="col-2">
                                    <!-- checkbox -->
                                    <input type="checkbox" class="mr-2 check-item">
                                    <!-- item code -->
                                    ITEM0003
                                </div>
                                <div class="col-4">
                                    <!-- item name -->
                                    Item 3 (roll)
                                </div>
                                <div class="col-1 text-center">
                                    <!-- item amount -->
                                    10
                                </div>
                                <div class="col-2 text-right text-monospace">
                                    <!-- item price -->
                                    10.000
                                </div>
                                <div class="col-2 text-right text-monospace">
                                    <!-- item total -->
                                    100.000
                                </div>
                                <div class="col-1 text-right">
                                    <span class="text-danger cursor-pointer btn-delete-item"><i class="fas fa-times fa-fw"></i></span>
                                </div>
                            </div>
                            <div class="row item-row border-bottom py-1">
                                <div class="col-2">
                                    <!-- checkbox -->
                                    <input type="checkbox" class="mr-2 check-item">
                                    <!-- item code -->
                                    ITEM0004
                                </div>
                                <div class="col-4">
                                    <!-- item name -->
                                    Item 4 (pack)
                                </div>
                                <div class="col-1 text-center">
                                    <!-- item amount -->
                                    1
                                </div>
                                <div class="col-2 text-right text-monospace">
                                    <!-- item price -->
                                    10.000
                                </div>
                                <div class="col-2 text-right text-monospace">
                                    <!-- item total -->
                                    10.000
                                </div>
                                <div class="col-1 text-right">
                                    <span class="text-danger cursor-pointer btn-delete-item"><i class="fas fa-times fa-fw"></i></span>
                                </div>
                            </div>
                            <div class="row list-footer border-top border-bottom py-2">
                                <div class="col-7"></div>
                                <div class="col-2 text-right">
                                    Subtotal
                                </div>
                                <div class="col-2 text-right text-monospace">
                                    1.410.000
                                </div>
                            </div>
                            <div class="row list-footer border-top border-bottom py-2">
                                <div class="col-7"></div>
                                <div class="col-2 text-right">
                                    Diskon
                                </div>
                                <div class="col-2 text-right text-monospace">
                                    0
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php $this->load->view('admin/template-parts/footer') ?>
        </div>
    </div>
    <?php $this->load->view('admin/template-parts/scripts') ?>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                width: '100%'
            });
        });

        $(document).on('change', '#check_all_items', function() {
            if ($(this).is(':checked')) {
                $('.check-item').prop('checked', true);
            } else {
                $('.check-item').prop('checked', false);
            }
        });

        $(document).on('change', '.check-item', function() {
            if ($('.check-item:checked').length == $('.check-item').length) {
                $('#check_all_items').prop('checked', true);
            } else {
                $('#check_all_items').prop('checked', false);
            }
        });

        $(document).on('click', '.btn-delete-item', function() {
            $(this).closest('.item-row').remove();
        });
    </script>
</body>

</html>