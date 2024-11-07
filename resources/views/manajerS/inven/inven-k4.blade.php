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
                <div class="d-flex align-items-center">
                  <h4 class="card-title">Tabel {{$title}}</h4>
                  <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                    data-bs-target="#addRowModal">
                    <i class="fa fa-plus"></i> Add {{$title}}
                  </button>
                </div>
                <!-- Modal -->
                
              <div class="card-body">
                <div class="table-responsive">
                  <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="basic-datatables_length">
                          <label>
                            Show
                            <select name="basic-datatables_length" aria-controls="basic-datatables"
                              class="form-control form-control-sm">
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
                          <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                              aria-controls="basic-datatables"></label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="basic-datatables" class="display table table-striped table-hover dataTable"
                          role="grid" aria-describedby="basic-datatables_info">
                          <thead>
                            <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="basic-datatables" rowspan="1"
                                colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                style="width: 167.738px;">No.</th>
                              <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1"
                                aria-label="Position: activate to sort column ascending" style="width: 259.688px;">
                                Kode</th>
                              <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1"
                                aria-label="Office: activate to sort column ascending" style="width: 126.912px;">Kategori
                              </th>
                              <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1"
                                aria-label="Age: activate to sort column ascending" style="width: 50.3125px;">Nama</th>
                              <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1"
                                aria-label="Start date: activate to sort column ascending" style="width: 124.325px;">
                                Gambar</th>
                              <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 103.625px;">Lokasi
                              </th>
                              <th class="sorting" tabindex="0" aria-controls="basic-datatables" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 103.625px;">Edit
                              </th>

                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th rowspan="1" colspan="1">No.</th>
                              <th rowspan="1" colspan="1">Kode</th>
                              <th rowspan="1" colspan="1">Kategori</th>
                              <th rowspan="1" colspan="1">Nama</th>
                              <th rowspan="1" colspan="1">Gambar</th>
                              <th rowspan="1" colspan="1">Lokasi</th>
                              <th rowspan="1" colspan='1'>Edit</th>
                            </tr>
                          </tfoot>
                          <tbody>
                            @foreach ($invens as $inven )
                              <tr role="row" class="odd">
                                <td class="sorting_1">{{$loop->iteration}}</td>
                                <td>{{$inven->kode}}</td>
                                <td>{{$inven->kategori}}</td>
                                <td>{{$inven->nama}}</td>
                                <td>
                                  <img class="img img-fluid" width="100" src="{{ asset($inven->gambar) }}" alt="">
                                </td>
                                <td>{{$inven->lokasi}}</td>
                                <td>
                                  <div class="form-button-action">
                                    <button type="button" title="Edit Task" class="btn btn-link btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editModal">
                                      <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                      data-bs-toggle="tooltip" title="Remove" class="btn btn-link btn-danger">
                                      <i class="fa fa-times"></i>
                                    </button>
                                  </div>
                                </td>

                                  <!-- Modal Edit -->
                                  <div id="editModal" class="modal fade">
                                    <div class="modal-dialog modal-confirm">
                                      <div class="modal-content">
                                        <div class="modal-header flex-column">
                                          <div class="icon-box">
                                            <!-- ICONS EDIT -->
                                          </div>
                                          <h4 class="modal-title w-100">Edit Task</h4>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                          <form>
                                            <!-- Name input -->
                                            <div class="form-outline mb-4">
                                              <input type="text" id="name" class="form-control" />
                                              <label class="form-label" for="name">Name</label>
                                            </div>
                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                              <input type="email" id="email" class="form-control" />
                                              <label class="form-label" for="email">Email address</label>
                                            </div>
                                            <!-- Textarea input -->
                                            <div class="form-outline mb-4">
                                              <textarea id="message" rows="4" class="form-control"></textarea>
                                              <label class="form-label" for="message">Your message</label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-center mb-4">
                                              <input class="form-check-input me-2" type="checkbox" value="" id="copyCheck" checked />
                                              <label class="form-check-label" for="copyCheck">Send me a copy of this message</label>
                                            </div>
                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-primary btn-block">Send</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Modal Delete -->
                                  <div id="myModal" class="modal fade">
                                    <div class="modal-dialog modal-confirm">
                                      <div class="modal-content">
                                        <div class="modal-header flex-column">
                                          <div class="icon-box">
                                            <!-- ICONS SAMPAH -->
                                          </div>
                                          <h4 class="modal-title w-100">Are you sure?</h4>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Do you really want to delete these records? This process cannot be undone.
                                          </p>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                          <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                          <button type="button" class="btn btn-danger">Delete</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="basic-datatables_info" role="status" aria-live="polite">Showing
                          1 to 10 of 57 entries</div>
                      </div>
                      <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="basic-datatables_paginate">
                          <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="basic-datatables_previous"><a
                                href="#" aria-controls="basic-datatables" data-dt-idx="0" tabindex="0"
                                class="page-link">Previous</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="basic-datatables"
                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="basic-datatables"
                                data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="basic-datatables"
                                data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="basic-datatables"
                                data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="basic-datatables"
                                data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="basic-datatables"
                                data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                            <li class="paginate_button page-item next" id="basic-datatables_next"><a href="#"
                                aria-controls="basic-datatables" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
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
        </div>
      </div>
      <!-- Modal Create -->
      @include('manajerS.inven.create')
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
                var select = $('<select class="form-select"><option value=""></option></select>')
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
                    select.append('<option value="' + d + '">' + d + "</option>");
                  });
              });
          },
        });
      });
    </script>
</x-layouts>