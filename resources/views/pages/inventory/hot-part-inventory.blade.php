@extends('layout.app')

@section('main-content')
    
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Part Number</th>
                        <th>Description</th>
                        <th>#Asset</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>CB2</td>
                        <td>Combustor Basket</td>
                        <td>36</td>
                        <td><a href="#" class="btn btn-warning"><span class="fa fa-plus"></span> Add Serial Number</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>FG1</td>
                        <td>Fuel Gas (Gas Nozel)</td>
                        <td>148</td>
                        <td><a href="#" class="btn btn-warning"><span class="fa fa-plus"></span> Add Serial Number</a></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end row -->
    

@endsection

@section('table-plugins')
    <!-- Required datatable js -->
    <script src=" {{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src=" {{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src=" {{ asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src=" {{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src=" {{ asset('assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src=" {{ asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src=" {{ asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src=" {{ asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src=" {{ asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>

    <!-- Key Tables -->
    <script src=" {{ asset('assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>

    <!-- Responsive examples -->
    <script src=" {{ asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src=" {{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

    <!-- Selection table -->
    <script src=" {{ asset('assets/plugins/datatables/dataTables.select.min.js')}}"></script>

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
    <link href=" {{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href=" {{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Multi Item Selection examples -->
    <link href=" {{ asset('assets/plugins/datatables/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection