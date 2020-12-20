

@extends('layouts.layout')

@section('left_sidebar')
    @include('stock.left_sidebar')
@endsection

@section('sub_header')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                Stock Management</h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{route('admin.stock.index')}}" class="kt-subheader__breadcrumbs-link">
                        Dashboard </a>

                    <!--<span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        Dashboard </a> -->
                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('contents')
    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <!--begin:: Widgets/Daily Sales-->
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-widget14">
                                    <div class="kt-widget14__header kt-margin-b-30">
                                        <h3 class="kt-widget14__title">
                                            Daily Sales
                                        </h3>
                                        <span class="kt-widget14__desc">
												Check out each collumn for more details
											</span>
                                    </div>
                                    <div class="kt-widget14__chart" style="height:120px;">
                                        <canvas id="kt_chart_daily_sales"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Daily Sales-->
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <!--begin:: Widgets/Profit Share-->
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-widget14">
                                    <div class="kt-widget14__header">
                                        <h3 class="kt-widget14__title">
                                            Profit Share
                                        </h3>
                                        <span class="kt-widget14__desc">
												Profit Share between customers
											</span>
                                    </div>
                                    <div class="kt-widget14__content">
                                        <div class="kt-widget14__chart">
                                            <div class="kt-widget14__stat">45</div>
                                            <canvas id="kt_chart_profit_share" style="height: 140px; width: 140px;"></canvas>
                                        </div>
                                        <div class="kt-widget14__legends">
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-success"></span>
                                                <span class="kt-widget14__stats">37% Sport Tickets</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-warning"></span>
                                                <span class="kt-widget14__stats">47% Business Events</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-brand"></span>
                                                <span class="kt-widget14__stats">19% Others</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Profit Share-->
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <!--begin:: Widgets/Revenue Change-->
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-widget14">
                                    <div class="kt-widget14__header">
                                        <h3 class="kt-widget14__title">
                                            Revenue Change
                                        </h3>
                                        <span class="kt-widget14__desc">
												Revenue change breakdown by cities
											</span>
                                    </div>
                                    <div class="kt-widget14__content">
                                        <div class="kt-widget14__chart">
                                            <div id="kt_chart_revenue_change" style="height: 150px; width: 150px;"></div>
                                        </div>
                                        <div class="kt-widget14__legends">
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-success"></span>
                                                <span class="kt-widget14__stats">+10% New York</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-warning"></span>
                                                <span class="kt-widget14__stats">-7% London</span>
                                            </div>
                                            <div class="kt-widget14__legend">
                                                <span class="kt-widget14__bullet kt-bg-brand"></span>
                                                <span class="kt-widget14__stats">+20% California</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Revenue Change-->
                        </div>
                    </div>
@endsection
