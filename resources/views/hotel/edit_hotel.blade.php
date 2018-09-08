<script src="{{ url('assets/js/validation.js') }}"></script>

{!! Form::open(['url' => 'hotel/'.$hotel->id, 'class' => 'form-horizontal', 'id'=>'hotel', 'method'=>'put']) !!}
<div class="container-fluid">
    <div class='form-group'>
        {!! Form::label('name', 'Hotel Name *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('hotel_name', $hotel->hotel_name, ['class' => 'form-control input-sm required', 'placeholder'=>'Hotel Name']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Select Type *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::select('hotel_type', array('0' => 'Select', '2 Star' => '2 Star', '3 Star' => '3 Star', '4 Star' => '4 Star', '5 Star' => '5 Star'), $hotel->hotel_type ,['class' => 'form-control requiredDD'])  !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('country_id', 'Select Country *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::select('country_id', $country, $hotel->country_id,['class' => 'form-control requiredDD']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('rent', 'Rent *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('rent', $hotel->rent, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Rent']) !!}
        </div>
    </div>
    <div class='form-group'>
        {!! Form::label('rent', 'Extra Rent *', ['class' => 'col-sm-2 control-label']) !!}
        <div class='col-sm-9'>
            {!! Form::text('extra_rent', $hotel->extra_rent, ['class' => 'form-control input-sm required amount', 'placeholder'=>'Extra Rent']) !!}
        </div>
    </div>
    <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-9'>
            {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>

</div>
{!! Form::close() !!}
