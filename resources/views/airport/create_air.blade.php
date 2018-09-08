<script src="{{ url('assets/js/validation.js') }}"></script>
@if($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
@endif
{!! Form::open(['url' => 'air', 'class' => 'form-horizontal', 'id'=>'hotel']) !!}
<div class="container-fluid">

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
            {!! Form::text('sic_pax_charges', null, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Pax Charges']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('name', 'Private Pax Charges *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('private_pax_charges', null, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Pax Charges']) !!}
        </div>
    </div>

    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}
