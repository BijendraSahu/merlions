<script src="{{ url('assets/js/validation.js') }}"></script>

{!! Form::open(['url' => 'extra_transfer/'.$extra->id, 'class' => 'form-horizontal', 'id'=>'hotel', 'method'=>'put']) !!}
<div class="container-fluid">
    <div class='form-group'>
        {!! Form::label('name', 'Inter Hotel *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('interhotel', $extra->interhotel, ['class' => 'form-control input-sm amount required', 'placeholder'=>'Inter Hotel']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('cruisetransfer', 'Cruise Transfer *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('cruisetransfer', $extra->cruisetransfer, ['class' => 'form-control input-sm amount required', 'placeholder'=>'Cruise Transfer']) !!}
        </div>
    </div>
    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>

</div>
{!! Form::close() !!}
