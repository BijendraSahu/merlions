<script src="{{ url('assets/js/validation.js') }}"></script>

{!! Form::open(['url' => 'air/'.$air->id, 'class' => 'form-horizontal', 'id'=>'hotel', 'method'=>'put']) !!}
<div class="container-fluid">

    <div class='form-group'>
        {!! Form::label('name', 'Tour Transfer Name *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('transfer_name', $air->transfer_name, ['class' => 'form-control input-sm required', 'placeholder'=>'Tour Transfer Name']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('name', 'Pax No *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('pax_no', $air->pax, ['class' => 'form-control input-sm required', 'placeholder'=>'Pax No']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('name', 'Sic Pax Charges *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('sic_pax_charges', $air->sic_pax_charges, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Pax Charges']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('name', 'Private Pax Charges *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('private_pax_charges', $air->private_pax_charges, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Pax Charges']) !!}
        </div>
    </div>
    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>

</div>
{!! Form::close() !!}
