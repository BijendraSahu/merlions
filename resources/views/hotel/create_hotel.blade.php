<script src="{{ url('assets/js/validation.js') }}"></script>
@if($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
@endif
{!! Form::open(['url' => 'hotel', 'class' => 'form-horizontal', 'id'=>'hotel']) !!}
<div class="container-fluid">

    <div class='form-group'>
        {!! Form::label('name', 'Hotel Name *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('hotel_name', null, ['class' => 'form-control input-sm required', 'placeholder'=>'Hotel Name']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Select Type *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {{--            {!! Form::select('hotel_type', ['Select','2 Star', '3 Star', '4 Star'], null,['class' => 'form-control requiredDD']) !!}--}}
            {!! Form::select('hotel_type', array('0' => 'Select', '2 Star' => '2 Star', '3 Star' => '3 Star', '4 Star' => '4 Star', '5 Star' => '5 Star'), 'hotel_type' ,['class' => 'form-control requiredDD'])  !!}

            {{--><select name="hotel_type" class="form-control requiredDD" id="">--}}
            {{--<option value="0">Select</option>--}}
            {{--<option value="2 Star">2 Star</option>--}}
            {{--<option value="3 Star">3 Star</option>--}}
            {{--<option value="4 Star">4 Star</option>--}}
            {{--</select--}}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('country_id', 'Select Country *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::select('country_id', $country, null,['class' => 'form-control requiredDD']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('rent', 'Rent *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('rent', null, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Rent']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('rent', 'Extra Rent *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('extra_rent', null, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Extra Rent']) !!}
        </div>
    </div>
    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}
