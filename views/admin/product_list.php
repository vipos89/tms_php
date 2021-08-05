<?php
/**
 * @var $connection array
 */

$sql = "SELECT * FROM products";
$res = mysqli_query($connection, $sql);
$products = mysqli_fetch_all($res, MYSQLI_ASSOC);


?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Товары</h1>
    <a href="/admin?type=add_product">Добавить товар</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                   role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                <tr role="row">
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 274px;">Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending" style="width: 408px;">
                                        Price
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 202px;">
                                        Actions
                                    </th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Price</th>
                                    <th rowspan="1" colspan="1">actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php for ($i=0; $i<count($products); $i++):
                                    $product = $products[$i];
                                ?>
                                <tr class="<?=($i%2==0)?'odd':'even'?>">
                                    <td><?=$product['name']?></td>
                                    <td><?=$product['price']?></td>
                                    <td></td>
                                </tr>
                                <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1
                                to 10 of 57 entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a
                                                href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                                              data-dt-idx="2" tabindex="0"
                                                                              class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                                              data-dt-idx="3" tabindex="0"
                                                                              class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                                              data-dt-idx="4" tabindex="0"
                                                                              class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                                              data-dt-idx="5" tabindex="0"
                                                                              class="page-link">5</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                                              data-dt-idx="6" tabindex="0"
                                                                              class="page-link">6</a></li>
                                    <li class="paginate_button page-item next" id="dataTable_next"><a href="#"
                                                                                                      aria-controls="dataTable"
                                                                                                      data-dt-idx="7"
                                                                                                      tabindex="0"
                                                                                                      class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>