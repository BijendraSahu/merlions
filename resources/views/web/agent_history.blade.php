@extends('layout.master.web_master')

@section('title','Merlions Travels:Home')

@section('content')
    <style type="text/css">
        .history_show
        {
            display: block;
        }
    </style>
    <section class="grid_section">
        <div class="container">
            <div class="row">
                <div class="advertiselist_block">
                    <div class="dash_boxcontainner">
                        <div class="advertise_withhead margin0">
                            <div class="col-sm-6 col-md-4 col-xs-12 head_caption">Agent History</div>
                            <div class="btn-group gridbtn-group pull-right" id="TotalRecords"><span class="grid-counter-text">Counter</span><span class="btn btn-counter btn-sm">5</span></div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-condensed table-hover table-responsive grid-table">
                                <tbody>
                                <tr class="tr-header globe-header-tr">
                                    <th class="width_16">Agency Name</th>
                                    <th class="width_14">Guest Name</th>
                                    <th class="width_16">Hotel</th>
                                    <th class="width_10">Travel Date</th>
                                    <th class="width_7 align_center">Days</th>
                                    <th class="width_7 align_center">Pax</th>
                                    <th class="width_10">Status</th>
                                    <th class="width_12">Amount</th>
                                    <th class="width_8">Details</th>
                                </tr>
                                </tbody>
                                <tbody id="ListContainerSection">
                                <tr>
                                    <td class="tab-grid width_16 col1" data-line="Agency Name">Merlion Travel</td>
                                    <td class="tab-grid width_14 col2" data-line="Guest Name">Pinku Kesharwani</td>
                                    <td class="tab-grid width_16 col3" data-line="Hotel">Anantara Hotel</td>
                                    <td class="tab-grid width_10 col4" data-line="Travel">12-Jun-2018</td>
                                    <td class="tab-grid width_7 col5 align_center" data-line="Days">4</td>
                                    <td class="tab-grid width_7 col6 align_center" data-line="Pax">6</td>
                                    <td class="tab-grid width_10 align_center" data-line="Status">
                                        <div class="status pending">Pending</div>
                                    </td>
                                    <td class="tab-grid width_12 col8 align_right" data-line="Amount">15.100.00</td>
                                    <td class="tab-grid width_8 text_right col9" data-line="Details">
                                        <button type="button" class="btn btn-primary btn-sm action-btn" href="#Modal_AgentHistoryDetails" data-toggle="modal">
                                            <i class="btn_icon mdi mdi-more i-tag"></i>More</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tab-grid width_16 col1" data-line="Agency Name">Merlion Travel</td>
                                    <td class="tab-grid width_14 col2" data-line="Guest Name">Pinku Kesharwani</td>
                                    <td class="tab-grid width_16 col3" data-line="Hotel">Anantara Hotel</td>
                                    <td class="tab-grid width_10 col4" data-line="Travel">12-Jun-2018</td>
                                    <td class="tab-grid width_7 col5 align_center" data-line="Days">4</td>
                                    <td class="tab-grid width_7 col6 align_center" data-line="Pax">6</td>
                                    <td class="tab-grid width_10 align_center" data-line="Status">
                                        <div class="status excepted">Excepted</div>
                                    </td>
                                    <td class="tab-grid width_12 col8 align_right" data-line="Amount">15.100.00</td>
                                    <td class="tab-grid width_8 text_right col9" data-line="Details">
                                        <button type="button" class="btn btn-primary btn-sm action-btn" href="#Modal_AgentHistoryDetails" data-toggle="modal">
                                            <i class="btn_icon mdi mdi-more i-tag"></i>More</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--<div class="grid_pagination">
                                <div class="drop_downpagination">
                                    <select class="form-control" data-live-search="true">
                                        <option data-tokens="10">10</option>
                                        <option data-tokens="25">25</option>
                                        <option data-tokens="50">50</option>
                                        <option data-tokens="50">100</option>
                                        <option data-tokens="50">All</option>
                                    </select>
                                </div>
                                <div class="pagination_box">
                                    <ul class="pagination pagination_ul">
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="Modal_AgentHistoryDetails" class="modal fade" data-easein="bounceIn" role="dialog">
        <div class="modal-dialog view_model">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" onclick="GloCloseModel();">×</button>
                    <h4 class="modal-title">View Details</h4>
                </div>
                <div class="modal-body light_bgcolor">
                    <table class="table table-bordered white_bgcolor">
                        <tbody><tr>
                            <td class="width_35 title-more">Agency Name :</td>
                            <td class="width_65" id="acc_holdername">Merlion Travel</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Guest Name :</td>
                            <td class="width_65" id="acc_no">Pinku Kesharwani</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Hotel :</td>
                            <td class="width_65" id="acc_bank">	Anantara Hotel</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Travel Date :</td>
                            <td class="width_65" id="acc_ifsccode">12-Jun-2018</td>
                        </tr>

                        <tr>
                            <td class="width_35 title-more">No.of Days :</td>
                            <td class="width_65" id="acc_redeemamount">4 Daya</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Pax :</td>
                            <td class="width_65" id="redeem_date">5 People</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Amount :</td>
                            <td class="width_65" >15.100.00</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Status :</td>
                            <td class="width_65" id="redeem_status">
                                <div class="status excepted">Excepted</div></td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Room Plan :</td>
                            <td class="width_65">Bed & Breakfast</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Meals :</td>
                            <td class="width_65" >2 Lunch, 2 Dinner</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Tours & Travels :</td>
                            <td class="width_65">Airport transfer</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Payment :</td>
                            <td class="width_65" >Partial</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Partial Payment :</td>
                            <td class="width_65" >1500.00</td>
                        </tr>
                        <tr>
                            <td class="width_35 title-more">Tours :</td>
                            <td class="width_65">City Tour, Universal Studio, 19 attraction</td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="GloCloseModel();">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop
