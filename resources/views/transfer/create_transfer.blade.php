<script src="{{ url('assets/js/validation.js') }}"></script>
@if($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
@endif
{!! Form::open(['url' => 'transfer', 'class' => 'form-horizontal', 'id'=>'hotel']) !!}
<div class="container-fluid">

    <div class='form-group'>
        {!! Form::label('name', 'Transfer Name *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('transfer_name', null, ['class' => 'form-control input-sm required', 'placeholder'=>'Transfer Name']) !!}
        </div>
    </div>
    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}
