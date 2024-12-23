<x-layouts>
    <x-slot:title>{{$title}}</x-slot>

        <!-- Chart -->
        
        <!-- Tabel -->
        <div class="container">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tabel {{$title}} </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="basic-datatables_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="basic-datatables_length">
                                                    <label>
                                                        Show
                                                        <select name="basic-datatables_length" aria-controls="basic-datatables" class="form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>
                                                        entries
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="basic-datatables_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatables"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 167.738px;">Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 259.688px;">Position</th>
                                                            <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 126.912px;">Office</th>
                                                            <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50.3125px;">Age</th>
                                                            <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124.325px;">Start date</th>
                                                            <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 103.625px;">Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">Name</th>
                                                            <th rowspan="1" colspan="1">Position</th>
                                                            <th rowspan="1" colspan="1">Office</th>
                                                            <th rowspan="1" colspan="1">Age</th>
                                                            <th rowspan="1" colspan="1">Start date</th>
                                                            <th rowspan="1" colspan="1">Salary</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="sorting_1">Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="basic-datatables_info" role="status"
                                                    aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="basic-datatables_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="basic-datatables_previous"><a href="#"
                                                                aria-controls="basic-datatables" data-dt-idx="0"
                                                                tabindex="0" class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="basic-datatables" data-dt-idx="1"
                                                                tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="basic-datatables" data-dt-idx="2"
                                                                tabindex="0" class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="basic-datatables" data-dt-idx="3"
                                                                tabindex="0" class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="basic-datatables" data-dt-idx="4"
                                                                tabindex="0" class="page-link">4</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="basic-datatables" data-dt-idx="5"
                                                                tabindex="0" class="page-link">5</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="basic-datatables" data-dt-idx="6"
                                                                tabindex="0" class="page-link">6</a></li>
                                                        <li class="paginate_button page-item next"
                                                            id="basic-datatables_next"><a href="#"
                                                                aria-controls="basic-datatables" data-dt-idx="7"
                                                                tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $("#basic-datatables").DataTable({});
                $("#multi-filter-select").DataTable({
                    pageLength: 5,
                    initComplete: function () {
                        this.api()
                            .columns()
                            .every(function () {
                                var column = this;
                                var select = $( '<select class="form-select"><option value=""></option></select>' )
                                    .appendTo($(column.footer()).empty())
                                    .on("change", function () {
                                        var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                        column
                                        .search(val ? "^" + val + "$" : "", true, false)
                                        .draw();
                                    });
                                    column
                                    .data()
                                    .unique()
                                    .sort()
                                    .each(function (d, j) {
                                        select.append( '<option value="' + d + '">' + d + "</option>" );
                                    });
                                });
                    },
                });
            });
        </script>
        
        
</x-layouts>