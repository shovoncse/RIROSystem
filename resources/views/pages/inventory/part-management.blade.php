@extends('layout.app')

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Part No</th>
                        <th>Description</th>
                        <th>Task Type</th>
                        <th>Usage</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>DAJHH234BADJ</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>61</td>
                        <td>EOH</td>
                        <td><img src="assets/images/users/avatar-1.jpg" alt=""></td>
                        <td><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DAJHH234BADJ</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>61</td>
                        <td>EOH</td>
                        <td><img src="assets/images/users/avatar-1.jpg" alt=""></td>
                        <td><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>DAJHH234BADJ</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>61</td>
                        <td>EOH</td>
                        <td><img src="assets/images/users/avatar-1.jpg" alt=""></td>
                        <td><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>DAJHH234BADJ</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>61</td>
                        <td>EOH</td>
                        <td><img src="assets/images/users/avatar-1.jpg" alt=""></td>
                        <td><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end row -->
@endsection

@section('table-plugins')
    <!-- Required datatable js -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>

    <!-- Key Tables -->
    <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Selection table -->
    <script src="assets/plugins/datatables/dataTables.select.min.js"></script>

@endsection

@section('custom-js')
    <script type="text/javascript">
        $(document).ready(function() {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );

    </script> 
@endsection

@section('table-css')
    <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Multi Item Selection examples -->
    <link href="assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection