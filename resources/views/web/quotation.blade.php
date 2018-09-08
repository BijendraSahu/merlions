@extends('layout.master.web_master')

@section('title','Merlions Travels:Quotation')
@section('content')
    <style type="text/css">
        .quotation_show {
            display: block;
        }

        .font_added {
            font-family: 'Ubuntu', sans-serif;
        }

        .check_date {
            padding: 6px 3px;
            font-size: 12px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <section class="form-header_block">
        <div class="form-block">
            <div class="container-fluid font_added">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row-service">
                                            <div class="invoice_txt" align="center">Basic Details</div>
                                        </div>
                                        <form class="well form-horizontal" onclick="finalcalculation();">
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-3 label-font">Agency Name</label>
                                                    <div class="col-md-9"><input id="Agency_Name" name="AgencyName"
                                                                                 value="{{$user->agency_name}}" readonly
                                                                                 class="form-control"></div>
                                                </div>
                                                <div class="form-group guest_mainblock">
                                                    <label class="col-md-3 label-font"> Guest Name</label>
                                                    <div class="col-md-9"><input id="txtGuestName"
                                                                                 onkeypress="guestname();"
                                                                                 name="GuestName"
                                                                                 class="form-control"></div>
                                                    {{--<div class="col-md-2">--}}
                                                    {{--<button type="button" class="btn btn-info"--}}
                                                    {{--onclick="show_guest_popup();"><i class="fa fa-plus"></i>--}}
                                                    {{--</button>--}}
                                                    {{--</div>--}}

                                                    <div class="guest_box tab-pane" id="guest_popup">
                                                        <div class="guest-details">
                                                            <div class="">
                                                                <h5 class="guest-head">Guest-details
                                                                    <i class="close_guestbox mdi mdi-close pull-right"
                                                                       onclick="HidePopup();"></i>
                                                                </h5>
                                                            </div>
                                                            <div class="row guest_container">
                                                                <div class="col-sm-12">
                                                                    <div class="col-sm-3">Guest Name</div>
                                                                    <div class="col-sm-9"><input type="text"
                                                                                                 class="form-control guest_txt"
                                                                                                 placeholder="Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="col-sm-3">Phone</div>
                                                                    <div class="col-sm-9"><input type="text"
                                                                                                 class="form-control guest_txt"
                                                                                                 placeholder="Phone No.">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="col-sm-3">Email</div>
                                                                    <div class="col-sm-9"><input type="text"
                                                                                                 class="form-control guest_txt"
                                                                                                 placeholder="Email Id">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="col-sm-3">
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <button type="button"
                                                                                class="btn_guest btn btn-primary btn-sm">
                                                                            Save &amp; Continue
                                                                        </button>
                                                                        <button type="button"
                                                                                class="btn_guest btn btn-default btn-sm">
                                                                            Cancel
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="col-md-6 label-font">Arrival Flight </label>
                                                            <div class="col-md-6">
                                                                <input id="CheckIn" name="Arrivalflight"
                                                                       class="form-control" placeholder="SQ-423">
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <label class="col-md-6 label-font">Dept Flight </label>
                                                            <div class="col-md-6">
                                                                <input id="Checkout" name="Departureflight"
                                                                       class="form-control" placeholder="SQ-489"></div>
                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="col-md-6 label-font">Check In </label>
                                                            <div class="col-md-6">
                                                                <input type='text' class="form-control check_date"
                                                                       id='datepicker'
                                                                />
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <label class="col-md-6 label-font">Check Out </label>
                                                            <div class="col-md-6">
                                                                <input type='text' class="form-control check_date"
                                                                       id='datepicker1'
                                                                /></div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-3">Rooms</div>
                                                            <div class="col-md-9">
                                                                <div class="dropdown">
                                                                    <select id="rooms" class="form-control">
                                                                        <option selected="selected" value="1">Room 1
                                                                        </option>
                                                                        <option value="2">Room 2</option>
                                                                        <option value="3">Room 3</option>
                                                                        <option value="3">Room 4</option>
                                                                        <option value="5">Room 5</option>
                                                                        <option value="6">Room 6</option>

                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-3">Adults</div>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-success btn-number" onclick="changeperson();" disabled="disabled"
                      data-type="minus"
                      data-field="quant[11]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
                                                                    <input type="text" name="quant[11]"
                                                                           class="form-control input-number"
                                                                           id="personcount1" value="0"
                                                                           min="0" max="100"/>
                                                                    <span class="input-group-btn">
              <button type="button" class="btn btn-danger btn-number" onclick="changeperson();" data-type="plus"
                      data-field="quant[11]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-3">Child(0 to 9 years)</div>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-success btn-number" onclick="changeperson();" disabled="disabled"
                      data-type="minus"
                      data-field="quant[12]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
                                                                    <input type="text" name="quant[12]"
                                                                           class="form-control input-number"
                                                                           id="personcount2" value="0"
                                                                           min="0" max="100">
                                                                    <span class="input-group-btn">
              <button type="button" class="btn btn-danger btn-number" onclick="changeperson();" data-type="plus"
                      data-field="quant[12]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--<div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-3">Child(Above 9 years)</div>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
              <span class="input-group-btn">
                  <button type="button" class="btn btn-success btn-number" disabled="disabled" data-type="minus"
                          data-field="quant[3]">
                      <span class="glyphicon glyphicon-minus"></span>
                  </button>
              </span>
                                                                    <input type="text" name="quant[3]"
                                                                           class="form-control input-number" value="0"
                                                                           min="0" max="100">
                                                                    <span class="input-group-btn">
                  <button type="button" class="btn btn-danger btn-number" data-type="plus" data-field="quant[3]">
                      <span class="glyphicon glyphicon-plus"></span>
                  </button>
              </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>-->
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row-service">
                                            <div class="col-md-2">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="selecthotel"
                                                           onchange="CheckEnableDisableTextBox(this);"/>
                                                    <label for="selecthotel">
                                                        Hotel
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="padding-right:0px;">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="chktourtraval"
                                                           onchange="CheckEnableDisableTextBox(this);"/>
                                                    <label for="chktourtraval">
                                                        Tour & Transfer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="chkmeals"
                                                           onchange="CheckEnableDisableTextBox(this);"/>
                                                    <label for="chkmeals">
                                                        Meals
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox">
                                                    <input id="checkbox4" type="checkbox"/>
                                                    <label for="checkbox4">
                                                        Cruise
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="services_list" id="block_hotel">
                                            <h6 class="hotel_head">Hotels</h6>
                                            <div class="disable_layer"></div>
                                            <ul class="nav nav-pills nav-stacked nav-star  col-md-4">
                                                <li class="active"><a href="#tab_a" data-toggle="pill">
                                                        2 &nbsp;<span class="fa fa-star checked"></span></a>
                                                </li>
                                                <li class=""><a href="#tab_b" data-toggle="pill" title="hotel">
                                                        3&nbsp;<span class="fa fa-star checked"></span></a></li>
                                                <li class=""><a href="#tab_c" data-toggle="pill">
                                                        4&nbsp;<span class="fa fa-star checked"></span></a></li>
                                                <li><a href="#tab_d" data-toggle="pill">
                                                        5 &nbsp;<span class="fa fa-star checked"></span>
                                                    </a></li>
                                            </ul>
                                            <div class="col-md-12">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_a">
                                                        <ul class="hotal_star_list">
                                                            <input type="hidden" id="hotelextrarent">
                                                            <input type="hidden" id="hotelChildrent">
                                                            @foreach($hotels as $hotel)
                                                                @if($hotel->hotel_type == '2 Star')
                                                                    <li class="">
                                                                        <div class="radio radio-danger">
                                                                            <input type="radio" name="hotel"
                                                                                   onclick="getHotelPrice();"
                                                                                   onchange="gethotelname('{{$hotel->hotel_name}}');"
                                                                                   value="{{$hotel->rent}}"
                                                                                   id="fortuna_radio{{$hotel->id}}">
                                                                            <label for="fortuna_radio{{$hotel->id}}">{{$hotel->hotel_name}}</label>
                                                                        </div>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                            {{--<li class="">--}}
                                                            {{--<div class="radio radio-danger">--}}
                                                            {{--<input type="radio" name="2_star" id="cheery_radio">--}}
                                                            {{--<label for="cheery_radio">Cheery Loft</label>--}}
                                                            {{--</div>--}}
                                                            {{--</li>--}}
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" id="tab_b">
                                                        <ul class="hotal_star_list" id="3star">
                                                            @foreach($hotels as $hotel)
                                                                @if($hotel->hotel_type == '3 Star')
                                                                    <li class="service_checkbox">
                                                                        <div class=" radio radio-danger">
                                                                            <input type="radio" name="hotel"
                                                                                   onchange="gethotelname('{{$hotel->hotel_name}}');"
                                                                                   value="{{$hotel->rent}}"
                                                                                   id="radio_aqueen{{$hotel->id}}">
                                                                            <label for="radio_aqueen{{$hotel->id}}">{{$hotel->hotel_name}}</label>
                                                                        </div>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                            {{--<li class="service_checkbox">--}}
                                                            {{--<div class="radio radio-danger">--}}
                                                            {{--<input type="radio" name="3_star" id="radio_santa">--}}
                                                            {{--<label for="radio_santa">Santa Grand</label>--}}
                                                            {{--</div>--}}
                                                            {{--</li>--}}
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" id="tab_c">
                                                        <ul class="hotal_star_list">
                                                            @foreach($hotels as $hotel)
                                                                @if($hotel->hotel_type == '4 Star')
                                                                    <li class="service_checkbox">
                                                                        <div class="deluxe-hotel">
                                                                            <div class="radio radio-danger">
                                                                                <input type="radio" name="hotel"
                                                                                       onchange="gethotelname('{{$hotel->hotel_name}}');"
                                                                                       value="{{$hotel->rent}}"
                                                                                       id="parcwhitt_radio{{$hotel->id}}">
                                                                                <label for="parcwhitt_radio{{$hotel->id}}">{{$hotel->hotel_name}}</label>
                                                                            </div>

                                                                        </div>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                            {{--<li class="service_checkbox">--}}
                                                            {{--<div class="deluxe-hotel">--}}
                                                            {{--<div class="radio radio-danger">--}}
                                                            {{--<input type="radio" name="4_star"--}}
                                                            {{--id="hilton_radio">--}}
                                                            {{--<label for="hilton_radio">Hilton--}}
                                                            {{--Garden</label>--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="service_checkbox">--}}
                                                            {{--<div class="deluxe-hotel">--}}
                                                            {{--<div class="radio radio-danger">--}}
                                                            {{--<input type="radio" name="4_star"--}}
                                                            {{--id="royal_radio">--}}
                                                            {{--<label for="royal_radio">Parc Soveregien--}}
                                                            {{--tyrwhitt</label>--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--</li>--}}
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" id="tab_d">
                                                        <form id="hotel_block">
                                                            <ul class="hotal_star_list">
                                                                @foreach($hotels as $hotel)
                                                                    @if($hotel->hotel_type == '5 Star')
                                                                        <li class="service_checkbox">
                                                                            <div class="deluxe-hotel">
                                                                                <div class="radio radio-danger">
                                                                                    <input type="radio" name="hotel"
                                                                                           value="{{$hotel->rent}}"
                                                                                           onchange="gethotelname('{{$hotel->hotel_name}}');"
                                                                                           id="fareer_radio{{$hotel->id}}">
                                                                                    <label for="fareer_radio{{$hotel->id}}"> {{$hotel->hotel_name}}</label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                @endif
                                                            @endforeach
                                                            <!--   <li class="service_checkbox">
                                                                       <div class="deluxe-hotel">
                                                                           <div class="radio radio-danger">
                                                                               <input type="radio" name="5_star" >
                                                                               <label for="fareer_radio">Jabali Palace</label>
                                                                           </div>
                                                                       </div>
                                                                   </li>
                                                                   <li class="service_checkbox">
                                                                       <div class="deluxe-hotel">
                                                                           <div class="radio radio-danger">
                                                                               <input type="radio" name="5_star">
                                                                               <label for="fareer_radio">Taj Hotal</label>
                                                                           </div>
                                                                       </div>
                                                                   </li>-->
                                                            </ul>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="well well_meals_block" id="meal_block">
                                            <div class="disable_layer"></div>
                                            <div style="margin-bottom:3px;">Meals</div>
                                            <div class="row" onclick="finalcalculation();">

                                                <div class="col-md-6">

                                                    <select id="lunchamt"
                                                            name="lunchamt"
                                                            class="form-control">
                                                        <option value="0">0 Lunch</option>
                                                        <option value="{{$meal->lunch*1}}">1 Lunch
                                                        </option>
                                                        <option value="{{$meal->lunch*2}}">2 Lunch</option>
                                                        <option value="{{$meal->lunch*3}}">3 Lunch</option>
                                                        <option value="{{$meal->lunch*4}}">4 Lunch</option>
                                                        <option value="{{$meal->lunch*5}}">5 Lunch</option>
                                                        <option value="{{$meal->lunch*6}}">6 Lunch</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select id="dinner" class="form-control">
                                                        <option value="0">0
                                                            dinner
                                                        </option>
                                                        <option value="{{$meal->dinner*1}}">1
                                                            dinner
                                                        </option>
                                                        <option value="{{$meal->dinner*2}}">2 dinner</option>
                                                        <option value="{{$meal->dinner*3}}">3 dinner</option>
                                                        <option value="{{$meal->dinner*4}}">4 dinner</option>
                                                        <option value="{{$meal->dinner*5}}">5 dinner</option>
                                                        <option value="{{$meal->dinner*6}}">6 dinner</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <div class="well well_airport_height" id="travel_block">
                                            <div class="disable_layer"></div>
                                            <div class="form-group">
                                                <div class="row" onclick="finalcalculation();">
                                                    <div class="col-md-12 row_airport">
                                                        <div class="col-md-4 label-font">2 Way Arpt. transfer</div>
                                                        <div class="col-md-4">
                                                            <div class="radio radio-danger">
                                                                <input type="radio" name="airport"
                                                                       value="{{$airtourtrans->sic_pax_charges}}"
                                                                       id="SIC">
                                                                <label for="SIC">SIC</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="radio radio-danger">
                                                                <input type="radio" name="airport"
                                                                       value="{{$airtourtrans->private_pax_charges}}"
                                                                       id="Private">
                                                                <label for="Private">Private</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 row_airport">
                                                        <div class="col-md-4 label-font">Tour Transfer</div>
                                                        <div class="col-md-4">
                                                            <div class="radio radio-danger">
                                                                <input type="radio" name="ttransfer"
                                                                       id="share_transfer1" value="SIC">
                                                                <label for="share_transfer1">SIC</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="radio radio-danger">
                                                                <input type="radio" name="ttransfer" value="Private"
                                                                       id="private_transfer1">
                                                                <label for="private_transfer1">Private</label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    {{--<div class="col-md-12 row_airport">--}}
                                                    {{--<div class="col-md-4 label-font">Extra Transfer</div>--}}
                                                    {{--<div class="col-md-4">--}}
                                                    {{--<div class="radio radio-danger">--}}
                                                    {{--<input type="radio" name="extraIntertransfer"--}}
                                                    {{--id="inter"--}}
                                                    {{--value="{{$extratourtrans->interhotel}}">--}}
                                                    {{--<label for="inter">Inter hotel/city</label>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-4">--}}
                                                    {{--<div class="radio radio-danger">--}}
                                                    {{--<input type="radio" name="extraCruisetransfer"--}}
                                                    {{--id="cruise"--}}
                                                    {{--value="{{$extratourtrans->cruisetransfer}}">--}}
                                                    {{--<label for="cruise">Cruise Transfer</label>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}


                                                    <div class="col-md-12 row_airport">
                                                        <div class="col-md-4 label-font">Extra Transfer</div>
                                                        <div class="col-md-4">
                                                            <div class="checkbox checkbox-inline checkbox-inline-shift">
                                                                <input type="checkbox" name="extraIntertransfer"
                                                                       id="inter"
                                                                       value="{{$extratourtrans->interhotel}}">
                                                                <label for="inter">Hotel/City</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="checkbox checkbox-inline checkbox-inline-shift">
                                                                <input type="checkbox" name="extraCruisetransfer"
                                                                       id="cruise"
                                                                       value="{{$extratourtrans->cruisetransfer}}">
                                                                <label for="cruise" style="padding-left: 2px;">2 Way
                                                                    Cruise</label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12" style="background-color: white;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="all_containner_blk" id="tourtrans_id">
                                                <div class="disable_layer"></div>
                                                <div class="tour_head">
                                                    <div class="col-sm-4">Tours</div>
                                                    <div class="col-sm-8">Date</div>
                                                </div>
                                                <div class="ScrollStyle">
                                                    @foreach($tourtrans as $tourtran)
                                                        <div class="tours_selection_row">
                                                            <?php /*$ttcharge = \App\TTCharges::where(['tour_transferid' => $tourtran->id])->first(); */?>
                                                            <div class="tour_name">{{$tourtran->transfer_name}}</div>
                                                            <div class="tour_date_select">
                                                                <input type="hidden" class="tour_id"
                                                                       value="{{$tourtran->id}}"/>
                                                                <input type="hidden" class="sic_tour_amount"
                                                                       value="{{$tourtran->sic_pax_charges}}"/>
                                                                <input type="hidden"
                                                                       class="private_tour_amount"
                                                                       value="{{$tourtran->private_pax_charges}}"/>
                                                                <input type="text" class="form-control date_tour"
                                                                       onkeyup="TourDatePick(this);"
                                                                       onchange="TourDatePick(this);"/>
                                                                <div class="overlay_checkbox"></div>
                                                                <div class="checkbox select_checbox">
                                                                    <input type="checkbox" onchange="AppendTourDiv();"
                                                                           class="tour_checkbox"
                                                                           id="tour_{{$tourtran->id}}"/>
                                                                    <label for="tour_{{$tourtran->id}}"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="all_containner_blk">
                                                <div class="tour_head">
                                                    <div class="col-sm-6">Selected Tours</div>
                                                    <div class="col-sm-6">Date</div>
                                                </div>
                                                <div class="" id="append_tour_hide"></div>
                                                <div class="ScrollStyle" id="append_tour">
                                                    <!--  <div class="selected_tour_row">
                                                          <div class="selectedtour_name">City Tour</div>
                                                          <div class="selectedtour_date">
                                                              <input type="text" class="form-control selected_date"
                                                                     value="03/13/2018"/>
                                                          </div>
                                                      </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                 <div class="col-md-12" style="background-color: white;">

                                 </div>
                             </div>-->
                        </div>
                        <div class="col-md-4">
                            <div class="row-service">
                                <div class="invoice_txt" align="center">Generate Invoice</div>
                            </div>
                            <div class="well invoice_box">
                                <div class="invoice details">
                                    <div class="invoice_date pull-left">
                                        <span>Invoice Date:</span>
                                        <span>{{ date_format(date_create($user->last_login), "d-M-Y")}}</span>
                                    </div>
                                    <div class="invoice_Id pull-right">
                                        <span>Invoice Id:</span>
                                        <span id="invoice_id">All10210245</span>
                                    </div>
                                </div>
                                <table class="table table-bordered table_invoice">
                                    <tbody>
                                    {{--<tr>--}}
                                    {{--<td class="width_35 title-more">Agency Name :</td>--}}
                                    {{--<td class="width_65" id="ag_name">Merlion Travels</td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <td class="width_35 title-more">Guest Name :</td>
                                        <td class="width_65" id="showguest_name">-</td>
                                    </tr>
                                    <!--<tr>-->
                                    <!--<td class="width_35 title-more">Invoice Date :</td>-->
                                    <!--<td class="width_65" id="invoice_date">06-Mar-2018</td>-->
                                    <!--</tr>-->
                                    <!--<tr>-->
                                    <!--<td class="width_35 title-more">Invoice Id :</td>-->
                                    <!--<td class="width_65" id="invoice_id">TIN-2341-09</td>-->
                                    <!--</tr>-->

                                    <tr>
                                        <td class="width_35 title-more">Hotel Name :</td>
                                        <td class="width_65" id="hotel_name">-</td>
                                    </tr>

                                    <tr>
                                        <td class="width_35 title-more">No.of Nights :</td>
                                        <td class="width_65" id="no_nights">0</td>
                                    </tr>
                                    <tr>
                                        <td class="width_35 title-more">Room Plan :</td>
                                        <td class="width_65" id="roomplan">0</td>
                                    </tr>
                                    <tr>
                                        <td class="width_35 title-more">Pax :</td>
                                        <td class="width_65" id="pax">0</td>
                                    </tr>
                                    <tr>
                                        <td class="width_35 title-more">Hotel :</td>
                                        <td class="width_65 bold_txt" id="hotel">0</td>
                                    </tr>
                                    <tr>
                                        <td class="width_35 title-more">Meals :</td>
                                        <td class="width_65 bold_txt" id="meals">0</td>
                                    </tr>
                                    <tr>
                                        <td class="width_35 title-more">Tours & Travels :</td>
                                        <td class="width_65 bold_txt" id="travels">0</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="other_contentbox">
                                    <!--<div class="invoice_row">
                                    <div class="left_title width_35"> Hotel :</div>
                                    <div class="right_amount width_65">
                                        <div class="inner-addon left-addon rupee-position">
                                            <i class="fa fa-inr calculate-rupee"></i>
                                            <input type="text" class="form-control" readonly="">
                                        </div>
                                    </div>
                                </div>

                                    <div class="invoice_row">
                                        <div class="left_title width_35"> Meals:</div>
                                        <div class="right_amount width_65">
                                            <div class="inner-addon left-addon rupee-position">
                                                <i class="fa fa-inr calculate-rupee"></i>
                                                <input type="text" class="form-control" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice_row">
                                        <div class="left_title width_35"> Tour & Transfer :</div>
                                        <div class="right_amount width_65">
                                            <div class="inner-addon left-addon rupee-position">
                                                <i class="fa fa-inr calculate-rupee"></i>
                                                <input type="text" class="form-control" readonly="">
                                            </div>
                                        </div>

                                    </div>-->
                                    <div class="invoice_row">
                                        <div class="left_title width_35">Total:</div>
                                        <div class="right_amount width_65">
                                            <div class="inner-addon left-addon rupee-position">
                                                {{--<i class="fa fa-inr calculate-rupee"></i>--}}
                                                <input type="text" id="grandtotalAmt" class="form-control" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice_row">
                                        <div class="left_title width_35">GST:</div>
                                        <div class="right_amount width_65">
                                            <div class="inner-addon left-addon rupee-position">
                                                {{--<i class="fa fa-inr calculate-rupee"></i>--}}
                                                <div class="col-md-12">
                                                    <div class="col-sm-5">
                                                        <select name="gst" onchange="finalcalculation();"
                                                                class="form-control" id="gstper">
                                                            <option value="5">5%</option>
                                                            {{--<option value="18">18%</option>--}}
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <input type="text" id="gstamt" class="form-control" readonly="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice_row">
                                        <div class="left_title width_35">Net Total :</div>
                                        <div class="right_amount width_65">
                                            <div class="inner-addon left-addon rupee-position">
                                                {{--<i class="fa fa-inr calculate-rupee"></i>--}}
                                                <input type="text" id="netamount" class="form-control" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice_row">
                                        <div class="left_title width_35">Payment:</div>
                                        <div class="right_amount width_65">
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <div class="radio radio-danger">
                                                        <input type="radio" name="paymentfinal" id="partial_transfer"
                                                               onclick="getPaymentAmount('partial');" value="partial">
                                                        <label for="partial_transfer">Partial</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="radio radio-danger">
                                                        <input type="radio" value="full" name="paymentfinal"
                                                               id="total_transfer" onclick="getPaymentAmount('full');">
                                                        <label for="total_transfer">Final Payment</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice_row">
                                        <div class="left_title width_35">Total Payable:</div>
                                        <div class="right_amount width_65">
                                            <div class="inner-addon left-addon rupee-position">
                                                {{--<i class="fa fa-inr calculate-rupee"></i>--}}
                                                <input type="text" class="form-control" id="paybleamt" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="well well-estimation">
                                <div class="agency_head">
                                    <h5>AGENCY NAME</h5>
                                </div>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="pull-left text-font">Invoice Date:
                                                <input type="text" name="fname" class="bill-input">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pull-right text-font">Invoice Id:
                                                <input type="text" name="fname" class="bill-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class=" text-font">Guest Name:
                                                <input type="text" name="fname" class="bill-input">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pull-right text-font">
                                                &lt;!&ndash;<input type="text" name="fname" class="bill-input">&ndash;&gt;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="pull-left text-font">Hotel Name:
                                                <input type="text" name="fname" class="bill-input">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pull-right text-font">Hotel type:
                                                <input type="text" name="fname" class="bill-input">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>

                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class=" col-md-5 person_details text-font">Pax:
                                            </div>
                                            <div class="col-md-7"><input type="text" name="fname" class="bill-input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class=" col-md-5 person_details text-font">No of Nights:</div>
                                            <div class="col-md-7"><input type="text" name="fname" class="bill-input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class=" col-md-4 person_details text-font">Airport Transfer</div>
                                            <div class="col-md-8"><div class="inner-addon left-addon rupee-position">
                                                <i class="fa fa-inr calculate-rupee"></i>
                                                <input type="text" class="form-control" readonly />
                                            </div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class=" col-md-4 person_details text-font">Cruise Transfer</div>
                                            <div class="col-md-8"><div class="inner-addon left-addon rupee-position">
                                                <i class="fa fa-inr calculate-rupee"></i>
                                                <input type="text" class="form-control" readonly />
                                            </div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-4 text-font">2 Way Airport</div>
                                            <div class="col-md-8"><div class="inner-addon left-addon rupee-position">
                                                <i class="fa fa-inr calculate-rupee"></i>
                                                <input type="text" class="form-control" readonly />
                                            </div></div>

                                        </div>
                                    </div>

                                </div>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-4 text-font">2 Way Cruise</div>
                                            <div class="col-md-8"><div class="inner-addon left-addon rupee-position">
                                                <i class="fa fa-inr calculate-rupee"></i>
                                                <input type="text" class="form-control" readonly />
                                            </div></div>
                                        </div>
                                    </div>

                                </div><hr>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-4 text-font">City Tour</div>
                                            <div class="col-md-8"><div class="inner-addon left-addon rupee-position">
                                                <i class="fa fa-inr calculate-rupee"></i>
                                                <input type="text" class="form-control" readonly />
                                            </div></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-4 text-font">Universal Studio</div>
                                            <div class="col-md-8"><div class="inner-addon left-addon rupee-position">
                                                <i class="fa fa-inr calculate-rupee"></i>
                                                <input type="text" class="form-control" readonly />
                                            </div></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="invoice-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-4 text-font">Marina Bay</div>
                                            <div class="col-md-8"><div class="inner-addon left-addon rupee-position">
                                                <i class="fa fa-inr calculate-rupee"></i>
                                                <input type="text" class="form-control" readonly />
                                            </div></div>
                                        </div>
                                    </div>

                                </div>



                            </div>-->

                            <p id="err"></p>

                            <div class="estimate_button">
                                <button type="button" id="submitbtn" onclick="finalsubmit();" disabled="disabled"
                                        class="btn btn-danger btn-lg btn-block btn-color">I AM FEELING
                                    LUCKY
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        function TourDatePick(dis) {
            var val = $(dis).val();
            if (val.length > 0) {
                $(dis).next().hide();
                $(dis).parent().find('.tour_checkbox').prop('checked', 'checked');
                //AppendTourDiv();
            } else {
                $(dis).next().show();
                $(dis).parent().find('.tour_checkbox').prop('checked', false);
            }
            AppendTourDiv();
        }
        function AppendTourDiv() {
            debugger;
            $('#append_tour').html('');
            var checktotal_append = 0;
            $('.tours_selection_row').each(function () {
                debugger;
                if ($(this).find('input[type="checkbox"]').prop("checked") == true) {
                    var gettour_name = $(this).find('.tour_name').text();
                    var gettour_date = $(this).find('.date_tour').val();
                    var gettour_id = $(this).find('.tour_id').val();
                    var getsic_tour_amount = $(this).find('.sic_tour_amount').val();
                    var getprivate_tour_amount = $(this).find('.private_tour_amount').val();
                    var append_div = '<div class="selected_tour_row"><div class="selectedtour_name">' + gettour_name + '</div>'
                        + '<input type="hidden" class="tour_id" value="' + gettour_id + '"/>' + '<input type="hidden" class="tour_date" value="' + gettour_date + '"/>'
                        + '<input type="hidden" class="sic_tour_amount" value="' + getsic_tour_amount + '"/>'
                        + '<input type="hidden" class="private_tour_amount" value="' + getprivate_tour_amount + '"/>'
                        + '<div class="selectedtour_date"><div class="form-control append_date">' + gettour_date + '</div>'
                        + '</div></div>';
                    checktotal_append += 1;
                } else {
                    $(this).find('.date_tour').val('');
                    $(this).find('.overlay_checkbox').show();
                }
                $('#append_tour').append(append_div);
            });
            finalcalculation();
            var $content = $("#append_tour"),
                $elements = $(".selected_tour_row");
            var elements = Tour_Sortbydate($elements, "ASC"); //DESC---- For Use Descending date filter
            var html = "";
            for (var i = 0; i < elements.length; ++i) {
                html += elements[i].html;
            }
            $content[0].innerHTML = html;
            return false;
        }
        function Tour_Sortbydate(elements, order) {
            var arr = [];
            elements.each(function () {
                var obj = {},
                    $el = $(this),
                    time = $el.find(".append_date").text(),
                    date = new Date($.trim(time)),
                    timestamp = date.getTime();
                obj.html = $el[0].outerHTML;
                obj.time = timestamp;
                arr.push(obj);
            });
            var sorted = arr.sort(function (a, b) {
                if (order == "ASC") {
                    return a.time > b.time;
                } else {
                    return b.time > a.time;
                }
            });
            return sorted;
        }
    </script>
    <script type="text/javascript">
        function show_guest_popup() {
            $('#guest_popup').addClass('show_popup');
        }
        function HidePopup() {
            $('#guest_popup').removeClass('show_popup');
        }
        $(function () {
            $("#datepicker").datepicker();
        });
        $(function () {
            $(".date_tour").datepicker();
        });
        //        $(function () {
        //            $("#datepicker1").datepicker(
        //                onSelect: function () {
        //                datedifference();
        //            }
        //            );
        //        });
        $("#datepicker1").datepicker({
            onSelect: function () {
                datedifference();
            }
        });

        $(document).ready(function () {
            var checkbox = false;
            $('.top_menu_popup_click').click(function (event) {
                // event.preventDefault();
                event.stopPropagation();
                var chkopen = $(this).find('.login_popup').attr('class');
                if (chkopen == 'login_popup scale0') {
                    if (!checkbox) {
                        if (chkopen == 'login_popup scale0') {
                            $('.login_popup').addClass('scale0');
                            $(this).find('.login_popup').removeClass('scale0');
                            checkbox = true;
                        } else {
                            $('.login_popup').addClass('scale0');
                            checkbox = false;
                        }
                    }
                }
            });
            $(document).click(function (event) {
                // event.preventDefault();
                event.stopPropagation();
                $('.login_popup').addClass('scale0');
                checkbox = false;
            });

            /*  $('.btn-number').click(function (e) {
             e.preventDefault();
             fieldName = $(this).attr('data-field');
             type = $(this).attr('data-type');
             var input = $("input[name='" + fieldName + "']");
             var currentVal = parseInt(input.val());
             if (!isNaN(currentVal)) {
             if (type == 'minus') {

             if (currentVal > input.attr('min')) {
             input.val(currentVal - 1).change();
             }
             if (parseInt(input.val()) == input.attr('min')) {
             $(this).attr('disabled', true);
             }

             } else if (type == 'plus') {

             if (currentVal < input.attr('max')) {
             input.val(currentVal + 1).change();
             }
             if (parseInt(input.val()) == input.attr('max')) {
             $(this).attr('disabled', true);
             }

             }
             } else {
             input.val(0);
             }
             });*/
            $('.input-number').focusin(function () {
                $(this).data('oldValue', $(this).val());
            });
            $('.input-number').change(function () {

                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());

                name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }


            });
            $(".input-number").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
            $('#Agency_Name').keyup(function () {
                $('#ag_name').text($(this).val());
            });
            $('#txtGuestName').keyup(function () {
                $('#showguest_name').text($(this).val());
            });
            $('#selectnight').change(function () {
                debugger;
                $('#no_nights').text($(this).val());
            });
        });
        function CheckEnableDisableTextBox(dis) {
//            finalcalculation();
            var getchkid = $(dis).attr('id');
            var chkclickevent = $(dis).prop("checked");

            if (getchkid == "selecthotel") {
                if (chkclickevent == false) {
                    $('#block_hotel').find(".disable_layer").show();
                    $('#block_hotel').find('input[type="radio"]').prop('checked', false);
                } else {
                    $('#block_hotel').find(".disable_layer").hide();
                }
            } else if (getchkid == "chktourtraval") {
                if (chkclickevent == false) {
                    $('#travel_block').find(".disable_layer").show();
                    $('#tourtrans_id').find(".disable_layer").show();
                    $('#travel_block').find('input[type="checkbox"]').prop('checked', false);
                } else {
                    $('#travel_block').find(".disable_layer").hide();
                    $('#tourtrans_id').find(".disable_layer").hide();
                }
            } else if (getchkid == "chkmeals") {
                if (chkclickevent == false) {
                    $('#meal_block').find(".disable_layer").show();
                    $('#meal_block').find('input[type="checkbox"]').prop('checked', false);
                } else {
                    $('#meal_block').find(".disable_layer").hide();
                }
            }
        }

        /**********Bijendra**********/
        function changeperson() {
            debugger;
            var per1 = $('#personcount1').val();
            var per2 = $('#personcount2').val();
            var all = per1 + per2;
            $('#pax').val(all);
            finalcalculation();
        }
        $('#block_hotel').click(function () {
            finalcalculation();
        });


        /**********finalcalculation**********/
        function finalcalculation() {
            var per1 = $('#personcount1').val();
            var per2 = $('#personcount2').val();
            totalperson = 0;
            totalperson += (parseFloat(per1) + parseFloat(per2)); //totalperson
            totalpax = 0;
            if (totalperson == 0) {
                totalpax += (parseFloat(1)); //totalperson
                $('#personcount1').val(1);
                $('#pax').html(totalpax);
            }
            else {
                $('#pax').html(totalperson);
                totalpax += (parseFloat(totalperson));
            }
            var lunchamt = $('#lunchamt :selected').val();
            var dinneramt = $('#dinner :selected').val();
            var totalrooms = $('#rooms :selected').val();
            var totaldays = $('#no_nights').html() <= 0 ? $('#no_nights').html(1) : $('#no_nights').html();
//            $('#invoice_id').html(totalpax); ////test


            /*******Meals Amt******/
            subtotalmeals = 0;
            totalmeals = 0;
            subtotalmeals += (parseFloat(lunchamt) + parseFloat(dinneramt) ) * parseFloat(totalpax);
            totalmeals += (parseFloat(subtotalmeals));
            /*******Meals Amt******/

            var hotelamt = $("input[name=hotel]:checked").val();
            var hotelextrarent = $("#hotelextrarent").val();
            var hotelChildrent = $("#hotelChildrent").val();
            var airportamt = $("input[name=airport]:checked").val();
            var extraIntertransfer = $('#inter').is(":checked") ? $("input[name=extraIntertransfer]:checked").val() : 0;
            var extraCruisetransfer = $('#cruise').is(":checked") ? $("input[name=extraCruisetransfer]:checked").val() : 0;


            /*******Hotel Amt******/
            var occu = totalrooms * 2;


            Totalhotelamt = 0;
            extraper = 0;
//            Totalhotelamt += (parseFloat(totalpax) * parseFloat(hotelamt) * parseFloat(totalrooms) * parseFloat(totaldays));
            if (per1 > occu) {
                extraper += (parseFloat(per1) - parseFloat(occu));
                Totalhotelamt += (parseFloat(hotelamt) * parseFloat(totalrooms) * parseFloat(totaldays));
                Totalhotelamt += (parseFloat(hotelextrarent) * parseFloat(extraper) * parseFloat(totaldays));
            }
            if (per1 <= occu) {
                Totalhotelamt += (parseFloat(hotelamt) * parseFloat(totalrooms) * parseFloat(totaldays));
            }
            if (per2 > 0) {
                Totalhotelamt += parseFloat(per2) * parseFloat(hotelChildrent) * parseFloat(totaldays);
            }

            //if ($('#pcount').val() % 5 != 0)
            /*******Hotel Amt******/


            /*******Tour Amt******/
            TotalTouramt = 0;
            TotalTouramt += (parseFloat(totalpax) * parseFloat(airportamt) + parseFloat(extraIntertransfer) + parseFloat(extraCruisetransfer));
            /*******Tour Amt******/


            /*******FinalAdd******/
            $('#hotel').html(Totalhotelamt);
            $('#meals').html(totalmeals);
            $('#travels').html(TotalTouramt);
            $('#roomplan').html(totalrooms);


            $('.selected_tour_row').each(function () {
                var gettour_id = $(this).find('.tour_id').val();
                var getsic_tour_amount = $(this).find('.sic_tour_amount').val();
                var getprivate_tour_amount = $(this).find('.private_tour_amount').val();
                var ttransfer = $("input[name=ttransfer]:checked").val();  // tt check sic/private
                var ttamt = $('#travels').html();

                myTotalTouramt = 0;
                if (ttransfer == 'SIC') {
                    myTotalTouramt += (parseFloat(getsic_tour_amount) + parseFloat(ttamt));
                    $('#travels').html(myTotalTouramt);
                }
                else {
                    myTotalTouramt += (parseFloat(getprivate_tour_amount) + parseFloat(ttamt));
                    $('#travels').html(myTotalTouramt);
                }
//                $('#ttr_id').append($("<option/>", {
//                    value: gettour_id,
//                    text: gettour_id
//                }));
            });
            /*******FinalAdd******/


            /*******FinalAmtWithGst******/
            totalAmount = 0;
            gstamt = 0;
            withgstamt = 0;
            mytravel = $('#travels').html();
            var gstper = $('#gstper :selected').val();

            totalAmount += (parseFloat(Totalhotelamt) + parseFloat(totalmeals) + parseFloat(TotalTouramt) + parseFloat(mytravel)); //totalperson
            gstamt += (totalAmount * parseFloat(gstper) / 100);
            $('#gstamt').val(gstamt);
            $('#grandtotalAmt').val(totalAmount);
            $('#netamount').val((parseFloat(totalAmount) + parseFloat(gstamt)));
            /*******FinalAmtWithGst******/

            if (totalAmount > 0) {
                $("#submitbtn").removeAttr("disabled");
            }

        }
        /**********finalcalculation**********/

        /****Get Guest Name*****/
        function guestname() {
            var edValue = document.getElementById("txtGuestName");
            var s = edValue.value;
            $('#showguest_name').html(s);
        }
        /****Get Guest Name*****/

        /****Get Date Diff*****/
        function datedifference() {
            var start = $("#datepicker").datepicker("getDate");
            var end = $("#datepicker1").datepicker("getDate");
            days = (end - start) / (1000 * 60 * 60 * 24);
            $('#no_nights').html(Math.round(days));
            finalcalculation();
        }
        /****Get Date Diff*****/

        /****Get Hotel Name*****/
        function gethotelname(dis) {
            var hotel_name = dis;
            $('#hotel_name').html(dis);
        }
        /****Get Hotel Name*****/

        function getPaymentAmount(dis) {
            var hotel_total = $('#hotel').html();
            var netamount = $('#netamount').val();
            payment = 0;
            payment += (parseFloat(hotel_total) + (parseFloat(netamount) * 30 / 100));
            var pay = $("input[name=paymentfinal]:checked").val();
            if (dis == 'partial')
                $('#paybleamt').val(payment);////////////////////////////////////////////
            else
                $('#paybleamt').val(netamount);
        }


        function getHotelPrice() {
            var hotel = $("input[name=hotel]:checked").attr("id");
            var hotelid = hotel.replace(/[^0-9]/g, '');
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "{{ url('getHotelPrice') }}",
                //                data: '{"data":"' + endid + '"}',
                data: '{"hotelid":"' + hotelid + '"}',
                success: function (data) {
                    $('#hotelextrarent').val(data.extra);
                    $('#hotelChildrent').val(data.child);
//                    console.log(data);
                },
                error: function (xhr, status, error) {
//                    alert('xhr.responseText');
                    $('#err').html(xhr.responseText);
                }
            });
        }


        /****Submit*****/
        function finalsubmit() {
            var guest_name = $('#showguest_name').html();
            var checkin = $('#CheckIn').val();//Arrivalflight
            var checkout = $('#Checkout').val();//Arrivalflight
            var checkdatepicker = $('#datepicker').val();
            var checkdatepicker2 = $('#datepicker1').val();
            var totalrooms = $('#rooms :selected').val();//total rooms
            var totaldays = $('#no_nights').html(); //total days
            var pax = $('#pax').html();
            var personcount1 = $('#personcount1').val(); //adult
            var personcount2 = $('#personcount2').val();//child
            var hotel = $("input[name=hotel]:checked").attr("id");
            var hotelid = hotel.replace(/[^0-9]/g, '');
            var meallunch = $('#lunchamt :selected').text();
            var mealdinner = $('#dinner :selected').text();
            var meallunchcount = meallunch.replace(/[^0-9]/g, '');
            var mealdinnercount = mealdinner.replace(/[^0-9]/g, '');
            var airport_transfer_type = $("input[name=airport]:checked").attr("id");
            var interhotel = $('#inter').is(":checked") ? 1 : 0;
            var cruisetransfer = $('#cruise').is(":checked") ? 1 : 0;
            var tour_type = $("input[name=ttransfer]:checked").val();
            tour_ids = new Array();
            tour_dates = new Array();
            $('.selected_tour_row').each(function () {
                var gettour_id = $(this).find('.tour_id').val();
                var gettour_date = $(this).find('.tour_date').val();
                tour_ids.push(gettour_id);
                tour_dates.push(gettour_date);
//                tour_ids.push({gettour_id: gettour_id, gettour_date: gettour_date});
            });

            var tids = tour_ids;
            var tour_date = tour_dates;
//            alert(tids);
//            alert(tour_date);
//            var tdates = tour_dates;

            /////total
            var hotel_total = $('#hotel').html();
            var meals_total = $('#meals').html();
            var tour_total = $('#travels').html();
            var gstper = $('#gstper :selected').val();
            var gstamt = $('#gstamt').val();
            var grand_total = $('#grandtotalAmt').val();
            var netamount = $('#netamount').val();
            {{--var email = $('.email_id').val();--}}
            {{--var contact = $('.contact').val();--}}
            {{--var dob = $('.dtp').val();--}}
            {{--var password = $('.password1').val();--}}
            {{--var country = $('.country').val();--}}
            {{--var city = $('.city').val();--}}
            {{--var gender = $('input[name=gender_radio]:checked').val();--}}
            {{--var formData = '_token=' + $('.token').val();--}}
            {{--//        alert(gender);--}}
            {{--if (email.trim() == '') {--}}
            {{--return false;--}}
            {{--} else if (email.trim() != '' && !reg.test(email)) {--}}
            {{--//            alert('Please enter valid email.');--}}
            {{--//            $('#inputEmail').focus();--}}
            {{--return false;--}}
            {{--} else if (fname.trim() == '') {--}}
            {{--//            alert('Please enter your fname.');--}}
            {{--//            $('#inputMessage').focus();--}}
            {{--return false;--}}
            {{--} else if (lname.trim() == '') {--}}
            {{--//            alert('Please enter your last name.');--}}
            {{--//            $('#inputMessage').focus();--}}
            {{--return false;--}}
            {{--}--}}
            {{--else if (contact.trim() == '') {--}}
            {{--//            alert('Please enter your contact.');--}}
            {{--//            $('#inputMessage').focus();--}}
            {{--return false;--}}
            {{--} else if (dob.trim() == '') {--}}
            {{--//            alert('Please enter your dob.');--}}
            {{--//            $('#inputMessage').focus();--}}
            {{--return false;--}}
            {{--} else if (password.trim() == '') {--}}
            {{--//            alert('Please enter your pass.');--}}
            {{--//            $('#inputMessage').focus();--}}
            {{--return false;--}}
            {{--} else if (country.trim() == '') {--}}
            {{--//            alert('Please enter your country.');--}}
            {{--//            $('#inputMessage').focus();--}}
            {{--return false;--}}
            {{--} else if (city.trim() == '') {--}}
            {{--//            alert('Please enter your city.');--}}
            {{--//            $('#inputMessage').focus();--}}
            {{--return false;--}}
            {{--}--}}
            {{--else {--}}
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "{{ url('postQtn') }}",
                //                data: '{"data":"' + endid + '"}',
                data: '{"guest_name":"' + guest_name + '", "arr_flight":"' + checkin + '", "dept_flight":"' + checkout + '", "chkin":"' + checkdatepicker + '", "chkout":"' + checkdatepicker2 + '", "totaldays":"' + totaldays + '", "roomno":"' + totalrooms + '", "totaladults":"' + personcount1 + '", "totalchilds":"' + personcount2 + '", "hotelid":"' + hotelid + '" , "mealdinnercount":"' + mealdinnercount + '", "meallunchcount":"' + meallunchcount + '", "airport_transfer_type":"' + airport_transfer_type + '", "interhotel":"' + interhotel + '", "cruisetransfer":"' + cruisetransfer + '", "tour_type":"' + tour_type + '", "hotel_total":"' + hotel_total + '", "meals_total":"' + meals_total + '", "tour_total":"' + tour_total + '", "gstperc":"' + gstper + '", "gst_total":"' + gstamt + '", "grand_total":"' + grand_total + '", "net_total":"' + netamount + '", "tour_ids":"' + tids + '", "tdates":"' + tour_date + '"}',
                success: function (data) {
                    console.log(data);
                    ShowSuccessPopupMsg('Qoutation has been generated...');
                    setTimeout(function () {
                        window.location.href = "{{url('qtn')}}"
                    }, 3000);
                },
                error: function (xhr, status, error) {
                    alert('xhr.responseText');
                    $('#err').html(xhr.responseText);
                }
            });
//        }
        }
        /****Submit*****/

        /**********Bijendra**********/


    </script>
@stop
