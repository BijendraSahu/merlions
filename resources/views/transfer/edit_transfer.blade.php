<script src="{{ url('assets/js/validation.js') }}"></script>

{!! Form::open(['url' => 'transfer/'.$transfer->id, 'class' => 'form-horizontal', 'id'=>'hotel', 'method'=>'put']) !!}
<div class="container-fluid">
    <div class='form-group'>
        {!! Form::label('name', 'Transfer Name *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('transfer_name', $transfer->transfer_name, ['class' => 'form-control input-sm required', 'placeholder'=>'Transfer Name']) !!}
        </div>
    </div>
    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}
