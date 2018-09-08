<script src="{{ url('assets/js/validation.js') }}"></script>
@if($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
@endif
{!! Form::open(['url' => 'extra_transfer', 'class' => 'form-horizontal', 'id'=>'hotel']) !!}
<div class="container-fluid">

    <div class='form-group'>
        {!! Form::label('name', 'Inter Hotel *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('interhotel', null, ['class' => 'form-control input-sm amount required', 'placeholder'=>'Inter Hotel']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('cruisetransfer', 'Cruise Transfer *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('cruisetransfer', null, ['class' => 'form-control input-sm amount required', 'placeholder'=>'Cruise Transfer']) !!}
        </div>
    </div>

    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}
