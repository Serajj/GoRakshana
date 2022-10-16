@extends('layouts.admin')
@section('main')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Wedding Events</h2>
                <div class="d-flex flex-row-reverse"><button
                        class="btn btn-sm btn-pill btn-outline-primary font-weight-bolder" id="createNewUser"><i
                            class="fas fa-plus"></i>add event </button></div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table" id="tableEvent">
                            <thead class="font-weight-bold text-center">
                                <tr>
                                    {{-- <th>No.</th> --}}
                                    <th>Date</th>
                                    <th>Husband Star</th>
                                    <th>Husband Rasi</th>
                                    <th>Husband Gothram</th>
                                    <th>Wife Star</th>
                                    <th>Tamil date</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th style="width:90px;">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal-->
<div class="modal fade" id="modal-user" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="formUser" name="formUser">
                    <div class="form-group">
 
                        <input type="text" name="event_type" class="form-control" value="wedding" id="event_type" hidden>
                        <select id="eventSelector" hidden>
                            <option value="birthday">Birthday</option>
                            <option value="gopooja">Go Pooja</option>
                            <option value="remembrance">Remembrance</option>
                            <option value="wedding">Wedding</option>
                        </select><br>
                        <label for="date">Wedding date</label>
                        <input type="date" name="date" class="form-control" id="date" placeholder="Date"><br>
                        <input type="text" name="husband_star" class="form-control" id="husband_star" placeholder="Husband Star"><br>
                        <input type="text" name="husband_rasi" class="form-control" id="husband_rasi" placeholder="Husband Rasi"><br>
                        <input type="text" name="husband_gothram" class="form-control" id="husband_gothram" placeholder="Husband Gothram"><br>
                        <input type="text" name="wife_star" class="form-control" id="wife_star" placeholder="Wife Star"><br>
                        <label for="tamil_date">Tamil Date</label>
                        <input type="date" name="tamil_date" class="form-control" id="tamil_date" placeholder="Tamil date"><br>
                        <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number"><br>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email"><br>
                        
                        <input type="text" name="address" id="address" class="form-control" placeholder="Address"><br>
                        <input type="hidden" name="event_id" id="event_id" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold" id="saveBtn">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script>
   
   $('document').ready(function () {
        // success alert
        function swal_success() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1000
            })
        }
        // error alert
        function swal_error() {
            Swal.fire({
                position: 'centered',
                icon: 'error',
                title: 'Something goes wrong !',
                showConfirmButton: true,
            })
        }
        // table serverside
        var table = $('#tableEvent').DataTable({
            processing: false,
            serverSide: true,
            ordering: false,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ],
            ajax: "/ajax_wedding",
            columns: [{
                    data: 'date',
                    name: 'date'
                },
                {
                    data: 'husband_star',
                    name: 'husband_star'
                },
                {
                    data: 'husband_rasi',
                    name: 'husband_rasi'
                },
                {
                    data: 'husband_gothram',
                    name: 'husband_gothram'
                },
                {
                    data: 'wife_star',
                    name: 'wife_star'
                },
                {
                    data: 'tamil_date',
                    name: 'tamil_date'
                },
                {
                    data: 'mobile',
                    name: 'mobile'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
        
        // csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        // initialize btn add
        $('#createNewUser').click(function () {
            $('#saveBtn').val("create user");
            $('#event_id').val('');
            $('#formUser').trigger("reset");
            $('#modal-user').modal('show');
        });
        // initialize btn edit
        $('body').on('click', '.editUser', function () {
            var user_id = $(this).data('id');
            $.get("/eventbyid" + '/' + user_id , function (data) {
                $('#saveBtn').val("edit-user");
                $('#modal-user').modal('show');
                $('#event_id').val(data.id);
                $('#date').val(data.date);
                $('#husband_star').val(data.husband_star);
                $('#husband_rasi').val(data.husband_rasi);
                $('#wife_star').val(data.wife_star);
                $('#husband_gothram').val(data.husband_gothram);
                $('#tamil_date').val(data.tamil_date);
                $('#event_type').val(data.event_type);
                $('#mobile').val(data.mobile);
                $('#address').val(data.address);
                $('#email').val(data.email);
            })
        });
        // initialize btn save
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Save');

            $.ajax({
                data: $('#formUser').serialize(),
                url: "{{ route('gosala.update') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {

                    $('#formUser').trigger("reset");
                    $('#modal-user').modal('hide');
                    swal_success();
                    table.draw();

                },
                error: function (data) {
                    swal_error();
                    $('#saveBtn').html('Save Changes');
                }
            });

        });
        // initialize btn delete
        $('body').on('click', '.deleteUser', function () {
            var user_id = $(this).data("id");

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "delete_event" + '/' + user_id,
                        success: function (data) {
                            swal_success();
                            table.draw();
                        },
                        error: function (data) {
                            swal_error();
                        }
                    });
                }
            })
        });

        // statusing


    });

</script>
@endpush
