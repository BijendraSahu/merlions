<script src="{{ url('assets/js/validation.js') }}"></script>

{!! Form::open(['url' => 'meal/'.$meal->id, 'class' => 'form-horizontal', 'id'=>'hotel', 'method'=>'put']) !!}
<div class="container-fluid">
    <div class='form-group'>
        {!! Form::label('name', 'Lunch Amount *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('lunch', $meal->lunch, ['class' => 'form-control input-sm amount required', 'placeholder'=>'Lunch Amount']) !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('name', 'Dinner Amount *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('dinner', $meal->dinner, ['class' => 'form-control input-sm amount required', 'placeholder'=>'Dinner Amount']) !!}
        </div>
    </div>
    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>

</div>
{!! Form::close() !!}
