@extends('layout.app')

@section('main-content')
    <div class="mb-3">
        <div class="row">
            <div class="col-12 text-sm-center form-inline">
                <div class="form-group mr-2">
                    <a href="/addNewPart" id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add New Part</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Part No</th>
                        <th>Description</th>
                        <th>Task Type</th>
                        <th>Usage</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if (count($parts) > 0)
                        @foreach ($parts as $part)
                            <tr>
                                <td>{{$part ->part_no}}</td>
                                <td>{{$part ->description}}</td>
                                <td>{{$part ->task_type}}</td>
                                <td>{{$part ->usage}}</td>
                                <td><img src="/storage/parts_picture/{{$part->picture}}" alt="part image" style="max-height:80px;"></td>
                                <td><a href="/parts/{{$part->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                    {!!Form::open(['action' => ['PartManageController@destroy', $part->id], 'method' => 'POST', 'class' => 'inline-block'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                </td>}
                            </tr>
                        @endforeach
                        @else
                        <p>No Data Found</p>   
                        @endif
                    
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