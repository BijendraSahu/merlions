<script src="{{ url('assets/js/validation.js') }}"></script>
@if($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
@endif
{!! Form::open(['url' => 'ttcharges', 'class' => 'form-horizontal', 'id'=>'hotel']) !!}
<div class="container-fluid">

    {{--<div class="form-group">--}}
    {{--{!! Form::label('tour_transferid', 'Select Tour Transfer *', ['class' => 'col-sm-2 control-label']) !!}--}}
    {{--<div class='col-sm-9'>--}}
    {{--{!! Form::select('tour_transferid', $tourtransfer, null,['class' => 'form-control requiredDD']) !!}--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--{!! Form::label('type', 'Select Type *', ['class' => 'col-sm-2 control-label']) !!}--}}
    {{--<div class='col-sm-9'>--}}
    {{--            {!! Form::select('hotel_type', ['Select','2 Star', '3 Star', '4 Star'], null,['class' => 'form-control requiredDD']) !!}--}}
    {{--{!! Form::select('type', array('0' => 'Select', 'SIC' => 'SIC', 'Private' => 'Private'), 'type' ,['class' => 'form-control requiredDD'])  !!}--}}

    {{--><select name="hotel_type" class="form-control requiredDD" id="">--}}
    {{--<option value="0">Select</option>--}}
    {{--<option value="2 Star">2 Star</option>--}}
    {{--<option value="3 Star">3 Star</option>--}}
    {{--<option value="4 Star">4 Star</option>--}}
    {{--</select--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class='form-group'>
        {!! Form::label('name', 'Tour Transfer Name *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('transfer_name', null, ['class' => 'form-control input-sm required', 'placeholder'=>'Tour Transfer Name']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('name', 'Pax No *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('pax_no', null, ['class' => 'form-control input-sm required', 'placeholder'=>'Pax No']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('name', 'Sic Pax Charges *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('sic_pax_charges', null, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Sic Pax Charges']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('name', 'Private Pax Charges *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('private_pax_charges', null, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Private Pax Charges']) !!}
        </div>
    </div>
    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}
