<script src="{{ url('assets/js/validation.js') }}"></script>
@if($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
@endif
{!! Form::open(['url' => 'meal', 'class' => 'form-horizontal', 'id'=>'hotel']) !!}
<div class="container-fluid">

    <div class='form-group'>
        {!! Form::label('name', 'Lunch Amount *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('lunch', null, ['class' => 'form-control input-sm amount required', 'placeholder'=>'Lunch Amount']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('name', 'Dinner Amount *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('dinner', null, ['class' => 'form-control input-sm amount required', 'placeholder'=>'Dinner Amount']) !!}
        </div>
    </div>

    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}
