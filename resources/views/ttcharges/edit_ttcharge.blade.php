<script src="{{ url('assets/js/validation.js') }}"></script>

{!! Form::open(['url' => 'ttcharges/'.$ttc->id, 'class' => 'form-horizontal', 'id'=>'hotel', 'method'=>'put']) !!}
<div class="container-fluid">
    {{--<div class="form-group">--}}
        {{--{!! Form::label('tour_transferid', 'Select Tour Transfer *', ['class' => 'col-sm-2 control-label']) !!}--}}
        {{--<div class='col-sm-9'>--}}
            {{--{!! Form::select('tour_transferid', $tourtransfer, $ttc->tour_transferid,['class' => 'form-control requiredDD']) !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class='form-group'>
        {!! Form::label('name', 'Tour Transfer Name *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('transfer_name', $ttc->transfer_name, ['class' => 'form-control input-sm required', 'placeholder'=>'Tour Transfer Name']) !!}
        </div>
    </div>
    {{--<div class="form-group">--}}
    {{--{!! Form::label('type', 'Select Type *', ['class' => 'col-sm-2 control-label']) !!}--}}
    {{--<div class='col-sm-9'>--}}
    {{--{!! Form::select('type', array('0' => 'Select', 'SIC' => 'SIC', 'Private' => 'Private'),  $ttc->type,['class' => 'form-control requiredDD'])  !!}--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class='form-group'>
        {!! Form::label('name', 'Pax No *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('pax_no', $ttc->pax_no, ['class' => 'form-control input-sm required', 'placeholder'=>'Pax No']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('name', 'Sic Pax Charges *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('sic_pax_charges', $ttc->sic_pax_charges, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Sic Pax Charges']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('name', 'Private Pax Charges *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('private_pax_charges', $ttc->private_pax_charges, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Private Pax Charges']) !!}
        </div>
    </div>
    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>

</div>
{!! Form::close() !!}
