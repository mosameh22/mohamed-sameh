@extends('layout.parent')
@section('title', 'All prdoucts')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="col-12 example1_wrapper">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantitiy</th>
                            <th>Status</th>
                            <th>Creation date</th>
                            <th>operations</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->code }} </td>
                                <td>{{ $product->name_en }} - {{ $product->name_ar }}</td>
                                <td>{{ $product->price }}</td>
                                <td @class([
                                    'font-weight-bolder',
                                    'text-danger' => $product->quantity == 0,
                                    'text-success' => $product->quantity >= 10,
                                    'text-warning' => $product->quantity < 10 && $product->quantity > 0,
                                ])>{{ $product->quantity }}
                                </td>
                                <td>
                                  <form  class="statusForm"  action="{{route('dashbord.products.updateStatus',['id'=>$product->id,'status'=>$product->status])}}"
                                     method="post">
                                    <input type="checkbox" name="status" class="checkbox"

                                        {{ $product->status == 1 ? 'checked ' : '' }} data-bootstrap-switch
                                        data-off-color="danger" data-on-color="success" value="{{$product->status== 0 ? 'off':'on'}}">
                                    @csrf
                                    @method('PATCH')


                                  </form>

                                </td>
                                <td>{{ $product->created_at }}</td>
                                <td>
                                    <a href="{{ route('dashbord.products.edit', ['id' => $product->id]) }}"
                                        class="btn btn-primary btn-s">Edit</a>
                                    <form action="{{ route('dashbord.products.destroy', ['id' => $product->id]) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-s">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
    @section('js')
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>

        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                    "initComplete": function(setting,json){
                        alert('DataTables has finished its initialisation.')
                    }
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $("input[data-bootstrap-switch]").each(function() {
                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                });
                $('input[name="status"]').on('switchChange.bootstrapSwitch',function(event,state){
                    $(this).parents('.statusForm')[0].submit();
                });
            });
        </script>
    @endsection
