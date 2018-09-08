<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
</script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<header class="prihul_header">
    <div class="logo_imgbox">
        <img src="{{url('images/logo21.png')}}"/>
    </div>
    <div class="header-airlines">
        <div class="airlines-menuhead">
            <div class="airlines-menu"><a href=""><img src="{{url('images/air1.png')}}" class="air-width"></a></div>
            <div class="airlines-menu"><img src="{{url('images/air2.png')}}" class="air-width"></div>
            <div class="airlines-menu"><img src="{{url('images/air55.png')}}" class="air-width"></div>
            <div class="airlines-menu"><img src="{{url('images/ys.png')}}" class="air-width"></div>
            <div class="airlines-menu"><img src="{{url('images/aa.png')}}" class="air-width"></div>

        </div>
    </div>
    <div class="head_rightblock">
        {{--        @if(is_null($_SESSION['web_user']))--}}
        <div class="basic_menu home_show">
            <div class="top_btnlogin">

            </div>
            <div class="top_login_signup">
                @if(!isset($_SESSION['web_master']))
                    <a href="{{url('/')}}" class="top_login a_mainhead"> <i class="fa fa-home"></i>
                        <span> Home |</span></a>
                    <div class="top_login top_menu_popup_click">
                        <span> Login |</span>
                        <div class="login_popup scale0">
                            <div class="menu_popup_head">Login Your Account</div>
                            <div class="popup_containner">

                                <form action="{{url('login')}}" method="post" enctype="multipart/form-data"
                                      id="frmloginid">
                                    <input type="hidden" name="_token" class="token" value="{{ csrf_token() }}">
                                    <div class="entry-group">
                                        <input type="email" class="form-control pop_txt" name="email" id="lemail"
                                               placeholder="Email address"/>
                                        <input type="password" class="form-control pop_txt" name="password" id="lpass"
                                               placeholder="Password"/>
                                        <button class="btn btn-lg btn-danger btn-block btn_login" type="submit">Sign
                                            in
                                        </button>
                                        {{--<input type="button" class="btn btn-lg btn-danger btn-block btn_login"--}}
                                        {{--onclick="loginuser();" value="Sign in"/>--}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="top_login top_menu_popup_click">
                        <span>Signup</span>
                        <div class="login_popup scale0">
                            <div class="menu_popup_head">Create Your Account</div>
                            <div class="popup_containner">
                                <form enctype="multipart/form-data" id="frmid">
                                    <input type="hidden" name="_token" class="token" value="{{ csrf_token() }}">
                                    <div class="entry-group">
                                        <input type="text" name="agency_name" id="agency_name"
                                               class="form-control pop_txt"
                                               placeholder="Agency Name"/>
                                        <input type="text" name="agent_name" id="agent_name"
                                               class="form-control pop_txt"
                                               placeholder="Agent Name"/>
                                        <input type="text" name="mobile_no" id="mobile_no"
                                               class="form-control pop_txt"
                                               placeholder="Mobile No." required=""/>
                                        <input type="email" name="email" id="email" class="form-control pop_txt"
                                               placeholder="Email address" required=""/>
                                        <input type="password" id="password" name="password"
                                               class="form-control pop_txt"
                                               placeholder="Password" required=""/>
                                        <input type="password" id="cpassword" name="cpassword"
                                               class="form-control pop_txt"
                                               placeholder="Retype Password" required=""/>
                                        <input type="button" class="btn btn-lg btn-danger btn-block btn_login"
                                               onclick="NewRegistration();" value="Sign Up"/>
                                        <p id="err"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{--                {{Auth::user()->name}}!--}}
                @else
                    <a href="{{url('lg')}}" class="top_btnlogin a_mainhead">Logout</a>
                    <a href="{{url('qtn')}}" class="top_btnlogin a_mainhead">Quotation |</a>
                    <a href="{{url('/')}}" class="top_btnlogin a_mainhead"><i class="fa fa-home"></i> Home |</a>
                @endif
            </div>
        </div>
        <div class="basic_menu quotation_show">
            {{-- <div class="add_cardblk">
                 <i class="fa fa-home"></i>
                 <div class="baskit_txt">HOME }</div>
             </div>--}}

            <div class="top_btnlogin">
                <a href="{{url('/')}}" class="top_btnlogin a_mainhead">Logout</a>
                <a href="{{url('agent')}}" class="top_btnlogin a_mainhead">History |</a>
                <a href="{{url('/')}}" class="top_btnlogin a_mainhead"> <i class="fa fa-home"></i> Home |</a>
            </div>
        </div>
        <div class="basic_menu history_show">
            <div class="top_btnlogin">
                <a href="{{url('/')}}" class="top_btnlogin a_mainhead">Logout</a>
                <a href="{{url('qtn')}}" class="top_btnlogin a_mainhead">Quotation |</a>
                <a href="{{url('/')}}" class="top_btnlogin a_mainhead"><i class="fa fa-home"></i> Home |</a>
            </div>
        </div>
        {{-- <div class="head_btnblock">
             --}}{{--<span class="top_btnlogin"><a class="a_mainhead" href="#"> |</a></span>--}}{{--
             <span class="top_btnsign"><a class="a_mainhead" href="{{url('qtn')}}">Quotation</a></span>
         </div>--}}

        {{--@else--}}
        {{--@endif--}}
    </div>
    <div class="head_contact">
        <p align="right"><b>Hotline Number:9424389077</b></p>
    </div>
</header>
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
        $('#append_tour').html('');
        var checktotal_append = 0;
        $('.tours_selection_row').each(function () {
            if ($(this).find('input[type="checkbox"]').prop("checked") == true) {
                var gettour_name = $(this).find('.tour_name').text();
                var gettour_date = $(this).find('.date_tour').val();
                var gettour_id = $(this).find('.tour_id').val();
                var gettour_amount = $(this).find('.tour_amount').val();
                var append_div = '<div class="selected_tour_row"><div class="selectedtour_name">' + gettour_name + '</div>'
                    + '<input type="hidden" class="tour_id" value="' + gettour_id + '"/>'
                    + '<input type="hidden" class="tour_amount" value="' + gettour_amount + '"/>'
                    + '<div class="selectedtour_date"><div class="form-control append_date">' + gettour_date + '</div>'
                    + '</div></div>';
                checktotal_append += 1;
            } else {
                $(this).find('.date_tour').val('');
                $(this).find('.overlay_checkbox').show();
            }
            $('#append_tour').append(append_div);
        });
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
        $(".form-margin").datepicker();
        $(".date_tour").datepicker();
    });
    $(function () {
        $("#datepicker1").datepicker();
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

        $('.btn-number').click(function (e) {
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
        });
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
    })
    function CheckEnableDisableTextBox(dis) {
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
                $('#travel_block').find('input[type="checkbox"]').prop('checked', false);
            } else {
                $('#travel_block').find(".disable_layer").hide();
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
</script>

{{------------------Bijendra------------------}}
<script>
    function NewRegistration() {
        debugger;
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var agency_name = $('#agency_name').val();
        var agent_name = $('#agent_name').val();
        var mobile_no = $('#mobile_no').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var cpassword = $('#cpassword').val();
        var formData = '_token=' + $('.token').val();
//        alert(gender);
        if (agency_name.trim() == '') {
            alert('Please enter your agency name');
//            $('#inputMessage').focus();
//            return false;
        } else if (agent_name.trim() == '') {
            alert('Please enter your agent name.');
//            $('#inputMessage').focus();
//            return false;
        } else if (mobile_no.trim() == '') {
            alert('Please enter your contact.');
//            $('#inputMessage').focus();
//            return false;
        } else if (email.trim() == '') {
//            return false;
        } else if (email.trim() != '' && !reg.test(email)) {
            alert('Please enter valid email');
//            $('#inputEmail').focus();
//            return false;
        } else if (password.trim() == '') {
            alert('Please enter your password');
//            $('#inputMessage').focus();
//            return false;
        } else if (cpassword.trim() == '') {
            alert('Please enter your confirm password');
//            $('#inputMessage').focus();
//            return false;
        } else if (password.trim() != cpassword.trim()) {
            alert('Password mismatch');
//            $('#inputMessage').focus();
//            return false;
        }
        else {
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "{{ url('agency_register') }}",
                cache: false,
                processData: false,
//                data: '{"data":"' + endid + '"}',
                data: '{"formData":"' + formData + '", "agency_name":"' + agency_name + '", "agent_name":"' + agent_name + '", "mobile":"' + mobile_no + '", "email":"' + email + '", "password":"' + password + '"}',
                success: function (data) {
//                    console.log(data);
//                    $('#err').html(data);
                    $('#err').html('<span style="color:red;">You have successfully register with us</span>');
                    $('#agency_name').val('');
                    $('#agent_name').val('');
                    $('#mobile_no').val('');
                    $('#email').val('');
                    $('#password').val('');
                    $('#cpassword').val('');
                },
                error: function (xhr, status, error) {
//                    alert('xhr.responseText');
                    $('#err').html(xhr.responseText);
                }
            });
        }
    }

    function loginuser() {
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var email = $('#lemail').val();
        var password = $('#lpass').val();
        var formData = '_token=' + $('.token').val();
//        alert(gender);
        if (email.trim() == '') {
//            return false;
        } else if (email.trim() != '' && !reg.test(email)) {
            alert('Please enter valid email');
//            $('#inputEmail').focus();
//            return false;
        } else if (password.trim() == '') {
            alert('Please enter your password');
//            $('#inputMessage').focus();
//            return false;
        } else {
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "{{ url('login') }}",
                cache: false,
                processData: false,
//                data: '{"data":"' + endid + '"}',
                data: '{"formData":"' + formData + '", "email":"' + email + '", "password":"' + password + '"}',
                success: function (data) {
//                    console.log(data);
//                    $('#err').html(data);
//                    $('#lofib').html('<span style="color:red;">You have successfully register with us</span>');
                    window.location.href = "{{url('/')}}";
//                    $('#agency_name').val('');
//                    $('#agent_name').val('');
//                    $('#mobile_no').val('');
//                    $('#email').val('');
//                    $('#password').val('');
//                    $('#cpassword').val('');
                },
                error: function (xhr, status, error) {
//                    alert('xhr.responseText');
                    $('#err').html(xhr.responseText);
                }
            });
        }
    }
</script>
{{------------------Bijendra------------------}}