@extends('layout.master.master')

@section('title','List of Meals')

@section('content')
    {{--<script src="{{ url('assets/js/jquery.dataTables.min.js') }}"></script>--}}
    {{--<link href="{{ url('assets/css/jquery.dataTables.min.css') }}" rel='stylesheet'/>--}}
    <a href="#" class="btn btn-sm bg-danger btnSet btn-primary add-hotel btnSet pull-right">
        <span class="fa fa-plus"></span>&nbsp;Create New Extra Transfer</a>
    <h3 class="heading bg-success">List of Extra Transfer</h3>
    <hr/>
    @if($errors->any())
        <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
    @endif
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row fa-border">
        <div class="container-fluid">
            <table id="dataTable" class="display compact" cellspacing="0" width="100%">
                <thead>
                <tr class="bg-info">
                    <th class="hidden">Id</th>
                    <th class="options">Options</th>
                    <th>Inter Hotel Amount</th>
                    <th>Cruise Transfer Amount</th>
                    <th>Effective Date</th>
                </tr>
                </thead>
                <tbody>
                @if(count($meals)>0)
                    @foreach($meals as $ttc)
                        <tr>
                            <td class="hidden">{{$ttc->id}}</td>
                            <td id="{{$ttc->id}}">
                                <a href="#" id="{{$ttc->id}}" class="btn btn-sm btn-default fa fa-pencil edit-hotel_"
                                   title="Edit Hotel">
                                </a>
                                <button type="button" id="{{ $ttc->id }}"
                                        class="btn btn-sm btn-danger btnDelete fa fa-trash-o" title="Delete"></button>
                            </td>
                            <td>{{$ttc->interhotel}}</td>
                            <td>{{$ttc->cruisetransfer}}</td>
                            <td>{{$ttc->effectivedate}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <br/>
    <script>
        $('.btnDelete').click(function () {
            var id = $(this).attr('id');
            $('#myModal').modal('show');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{ url('assets/img/loading.gif') }}"/>');
            $('#myModal .modal-title').html('Confirm Deletion');
            $('#myModal .modal-body').html('<h5>Are you sure want to delete this Extra Transfer<h5/>');
            $('#modalBtn').html('<a class="btn btn-sm btn-danger" href="{{ url('extra_transfer') }}/' + id +
                '/delete"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirm</a>'
            );
        });
        $(".add-hotel").click(function () {
            $('#myModal').modal('show');
            $('.modal-title').html('Add Extra Transfer');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{url('assets/img/loading.gif')}}"/>');
            //alert(id);
            $.ajax({
                type: "GET",
                contentType: "application/json; charset=utf-8",
                url: "{{ url('extra_transfer/create') }}",
                success: function (data) {
                    $('.modal-body').html(data);
//            $('#modelBtn').visible(disabled);
                },
                error: function (xhr, status, error) {
                    $('.modal-body').html(xhr.responseText);
                    //$('.modal-body').html("Technical Error Occured!");
                }
            });

        });
        $(".edit-hotel_").click(function () {
            $('#myModal').modal('show');
            $('.modal-title').html('Edit Extra Transfer');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{url('assets/img/loading.gif')}}"/>');

            var id = $(this).attr('id');
            var editurl = '{{ url('/') }}' + "/extra_transfer/" + id + "/edit";
            $.ajax({
                type: "GET",
                contentType: "application/json; charset=utf-8",
                url: editurl,
                data: '{"data":"' + id + '"}',
                success: function (data) {
                    $('.modal-body').html(data);
                },
                error: function (xhr, status, error) {
                    $('.modal-body').html(xhr.responseText);
                    //$('.modal-body').html("Technical Error Occured!");
                }
            });
        });

        $(document).ready(function () {
            var table = $('#dataTable').DataTable({
                "columnDefs": [
                    {"width": "20px", "targets": 0}
                ]
            });

            $('.datatable-col').on('keyup change', function () {
                table.column($(this).attr('id')).search($(this).val()).draw();
            });
        });
    </script>
@stop
