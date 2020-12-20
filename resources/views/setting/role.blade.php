

@extends('layouts.layout')

@section('left_sidebar')
    @include('setting.left_sidebar')
@endsection

@section('sub_header')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                General Settings</h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{route('admin.setting.index')}}" class="kt-subheader__breadcrumbs-link">
                        Roles </a>

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
        <div class="col-md-1"></div>>
        <div class="col-md-10">
            <!-- begin:: Content -->
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">

                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">

                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-success btn-icon-sm" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#role_create_modal">
                                        <i class="flaticon2-plus"></i> Add New
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <!--begin: Search Form -->
                        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                            <div class="row align-items-center">
                                <div class="col-xl-8 order-2 order-xl-1">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                            <div class="kt-input-icon kt-input-icon--left">
                                                <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                  <span><i class="la la-search"></i></span>
                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                            <div class="kt-form__group kt-form__group--inline">
                                                <div class="kt-form__label">
                                                    <label>Status:</label>
                                                </div>
                                                <div class="kt-form__control">
                                                    <select class="form-control bootstrap-select" id="kt_form_status">
                                                        <option value="">All</option>
                                                        <option value="1">Pending</option>
                                                        <option value="2">Delivered</option>
                                                        <option value="3">Canceled</option>
                                                        <option value="4">Success</option>
                                                        <option value="5">Info</option>
                                                        <option value="6">Danger</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                            <div class="kt-form__group kt-form__group--inline">
                                                <div class="kt-form__label">
                                                    <label>Type:</label>
                                                </div>
                                                <div class="kt-form__control">
                                                    <select class="form-control bootstrap-select" id="kt_form_type">
                                                        <option value="">All</option>
                                                        <option value="1">Online</option>
                                                        <option value="2">Retail</option>
                                                        <option value="3">Direct</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                                    <a href="#" class="btn btn-default kt-hidden">
                                        <i class="la la-cart-plus"></i> New Order
                                    </a>
                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
                                </div>
                            </div>
                        </div>
                        <!--end: Search Form -->
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <!--begin: Datatable -->
                        <div class="kt-datatable" id="ajax_data"></div>
                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
            <!-- end:: Content -->
        </div>
        <div class="col-md-1"></div>>
    </div>

    <!--begin::Modal-->
    <div class="modal fade" id="role_create_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-m" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Role Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form id="modal_role_form">
                        <div class="form-group">
                            <label for="role_name" class="form-control-label">Name:</label>
                            <input type="text" class="form-control" id="role_name" name="role_name">
                        </div>
                        <span id="role_name_error"></span>
                        <div class="form-group">
                            <label for="role_display_name" class="form-control-label">Display Name:</label>
                            <input type="text" class="form-control" id="role_display_name" name="role_display_name">
                        </div>
                        <div class="form-group">
                            <label for="role_description" class="form-control-label">Description:</label>
                            <textarea class="form-control" id="role_description" name="role_description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary create-new-role">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
@endsection

@section('CustomJs')

    <script src="{{asset("assets/js/demo1/pages/components/extended/toastr.js")}}" type="text/javascript"></script>

    <script type="text/javascript">
        // Class definition

        var KTDatatableTranslationDemo = function() {
            // Private functions

            // basic demo
            var demo = function() {

                var datatable = $('.kt-datatable').KTDatatable({
                    // datasource definition
                    data: {
                        type: 'remote',
                        source: {
                            read: {
                                url: "",
                            },
                        },
                        pageSize: 10,
                        serverPaging: true,
                        serverFiltering: false,
                        serverSorting: true,
                    },

                    // layout definition
                    layout: {
                        scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                        height: null, // datatable's body's fixed height
                        footer: false, // display/hide footer
                    },

                    // column sorting
                    sortable: true,

                    pagination: true,

                    search: {
                        input: $('#generalSearch'),
                    },

                    // columns definition
                    columns: [
                        {
                            field: 'RecordID',
                            title: '#',
                            sortable: 'asc',
                            width: 30,
                            type: 'number',
                            selector: false,
                            textAlign: 'center',
                        }, {
                            field: 'OrderID',
                            title: 'Order ID',
                        }, {
                            field: 'Country',
                            title: 'Country',
                            template: function(row) {
                                return row.Country + ' ' + row.ShipCountry;
                            },
                        }, {
                            field: 'CompanyName',
                            title: 'Company Name',
                        }, {
                            field: 'Status',
                            title: 'Status',
                            // callback function support for column rendering
                            template: function(row) {
                                var status = {
                                    1: {'title': 'Pending', 'class': 'kt-badge--brand'},
                                    2: {'title': 'Delivered', 'class': ' kt-badge--danger'},
                                    3: {'title': 'Canceled', 'class': ' kt-badge--primary'},
                                    4: {'title': 'Success', 'class': ' kt-badge--success'},
                                    5: {'title': 'Info', 'class': ' kt-badge--info'},
                                    6: {'title': 'Danger', 'class': ' kt-badge--danger'},
                                    7: {'title': 'Warning', 'class': ' kt-badge--warning'},
                                };
                                return '<span class="kt-badge ' + status[row.Status].class + ' kt-badge--inline kt-badge--pill">' + status[row.Status].title + '</span>';
                            },
                        }, {
                            field: 'Type',
                            title: 'Type',
                            autoHide: false,
                            // callback function support for column rendering
                            template: function(row) {
                                var status = {
                                    1: {'title': 'Online', 'state': 'danger'},
                                    2: {'title': 'Retail', 'state': 'primary'},
                                    3: {'title': 'Direct', 'state': 'success'},
                                };
                                return '<span class="kt-badge kt-badge--' + status[row.Type].state + ' kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-' + status[row.Type].state + '">' +
                                    status[row.Type].title + '</span>';
                            },
                        }, {
                            field: 'Actions',
                            title: 'Actions',
                            sortable: false,
                            width: 110,
                            overflow: 'visible',
                            autoHide: false,
                            template: function() {
                                return '\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
							<i class="la la-edit"></i>\
						</a>\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">\
							<i class="la la-trash"></i>\
						</a>\
					';
                            },
                        }],
                });

                $('#kt_form_status').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_form_type').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Type');
                });

                $('#kt_form_status,#kt_form_type').selectpicker();

            };

            return {
                // public functions
                init: function() {
                    demo();
                },
            };
        }();

        jQuery(document).ready(function() {
            KTDatatableTranslationDemo.init();
        });

        $(".create-new-role").click(function(event){
            event.preventDefault();

            let name = $("input[name=role_name]").val();
            let display_name = $("input[name=role_display_name]").val();
            let description = $("input[name=role_description]").val();
            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{url('api/setting/roles/create')}}",
                type: "POST",
                data:{
                    name:name,
                    description:description,
                    display_name:display_name,
                },
                success:function(response){
                    if(response) {
                        $('.success').text(response.success);
                        $("#modal_role_form")[0].reset();
                    }
                },
                error: function (reject) {
                    if( reject.status === 422 ) {
                        var errors = $.parseJSON(reject.responseText);
                        $.each(errors)
                            $.each(errors, function (key, val) {
                                $("#" + key + "_error").text(val[0]);
                                console.log("#" + key + "_error");
                            });
                    }
                }
            });
        });
    </script>
@endsection
