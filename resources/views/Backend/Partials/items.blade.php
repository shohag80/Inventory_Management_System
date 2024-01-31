<!-- Deshboard content -->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center gy-4">
                        <div class="col-sm-8">
                            <div class="box">
                                <h5 class="fs-20 text-truncate">Professional Invoices Made Easy.
                                </h5>
                                <p class="text-muted fs-15">
                                    Quickly understand who your best customers little and motivation to pay thair bills.
                                </p>
                                <a href="" class="btn btn-primary">Watch Tutorial</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center px-2">
                                <img src="https://invoika-laravel.themesbrand.website/build/images/invoice-widget.png" class="img-fluid" style="height: 141px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7">
            <div class="card dash-mini card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1" id="overviewText"></h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <select class="form-control" id="overviewDropdown" aria-label="Default select example">
                                <option selected value="today">Today</option>
                                <option value="last_week">Last Week</option>
                                <option value="last_month">Last Month</option>
                                <option value="current_year">Current Year</option>
                            </select>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body pt-1">
                    <div class="row">
                        <div class="col-lg-3 mini-widget pb-3 pb-lg-0">
                            <div class="d-flex align-items-end">
                                <div class="flex-grow-1">
                                    <h2 class="mb-0 fs-24"><span class="counter-value" data-target="" id="clientsAdded"></span></h2>
                                    <h5 class="text-muted fs-16 mt-2 mb-0">Clients Added</h5>
                                </div>
                                <div class="flex-shrink-0 me-1">
                                    <div class="avatar flex-shrink-0">
                                        <span class="avatar-title bg-soft-warning rounded fs-3">
                                            <i class="las la-user-circle text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mini-widget py-3 py-lg-0">
                            <div class="d-flex align-items-end">
                                <div class="flex-grow-1">
                                    <h2 class="mb-0 fs-24"><span class="counter-value" data-target="" id="invoiceSent"></span></h2>
                                    <h5 class="text-muted fs-16 mt-2 mb-0">Invoice Sent</h5>
                                </div>
                                <div class="flex-shrink-0 me-1">
                                    <div class="avatar flex-shrink-0">
                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                            <i class="las la-file-invoice text-info"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mini-widget py-3 py-lg-0">
                            <div class="d-flex align-items-end">
                                <div class="flex-grow-1">
                                    <h2 class="mb-0 fs-24"><span class="counter-value" data-target="" id="paidInvoice"></span></h2>
                                    <h5 class="text-muted fs-16 mt-2 mb-0">Paid Invoice</h5>
                                </div>
                                <div class="flex-shrink-0 me-1">
                                    <div class="avatar flex-shrink-0">
                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                            <i class="las la-dollar-sign text-success"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-lg-3 mini-widget pt-3 pt-lg-0">
                            <div class="d-flex align-items-end">
                                <div class="flex-grow-1">
                                    <h2 class="mb-0 fs-24"><span class="counter-value" data-target="" id="unpaidInvoice"></span></h2>
                                    <h5 class="text-muted fs-16 mt-2 mb-0">Unpaid Invoice</h5>
                                </div>
                                <div class="flex-shrink-0 me-1">
                                    <div class="avatar flex-shrink-0">
                                        <span class="avatar-title bg-soft-danger rounded fs-3">
                                            <i class="las la-dollar-sign text-danger"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Payment Activity</h4>
                    <div class="btnGroup">
                        <button type="button" id="BarIndexMonth" class="btn btn-soft-info btn-sm">
                            1M
                        </button>
                        <button type="button" id="BarIndexSixmonth" class="btn btn-soft-info btn-sm">
                            6M
                        </button>
                        <button type="button" id="BarIndexYear" class="btn btn-info btn-sm">
                            1Y
                        </button>

                    </div>
                </div>
                <div class="card-body py-1">
                    <div class="row gy-2">
                        <div class="col-md-4">
                            <h4 class="fs-22 mb-0"></h4>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex main-chart justify-content-end">
                                <div class="px-4 border-end">
                                    <h4 class="text-primary fs-18 mb-0" id="paymenActivityPaid"> <span class="text-muted d-inline-block fs-17 align-middle ms-0 ms-sm-2">Paid</span>
                                    </h4>
                                </div>
                                <div class="ps-4">
                                    <h4 class="text-primary fs-18 mb-0" id="paymenActivityUnpaid"> <span class="text-muted d-inline-block fs-17 align-middle ms-0 ms-sm-2">Unpaid</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="stacked-column-chart" class="apex-charts" data-colors='["--in-primary", "--in-light-rgb, 1.0"]' dir="ltr"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="card-title mb-2 text-truncate">Structure</h5>
                        </div>
                        <div class="flex-shrink-0 ms-2">
                            <div class="dropdown">
                                <input type="date" class="form-control" id="structureDatePicker" name="structureDatePicker" placeholder="Select date range">
                                <input type="hidden" name="_token" value="MreDUg3ps3tz6aZOzaTHaKuLHjZWqNPNjbvMYw70">
                            </div>
                        </div>
                    </div>

                    <div id="structure-widget" data-colors='["--in-primary", "--in-primary-rgb, 0.7", "--in-danger-rgb, 0.9"]' class="apex-charts" dir="ltr"></div>

                    <div class="px-2">
                        <div class="structure-list d-flex justify-content-between border-bottom">
                            <p class="mb-0"><i class="las la-dot-circle fs-18 text-primary me-2"></i>Paid
                            </p>
                            <div>
                                <span class="badge bg-primary" id="paidAmt"> $0
                                </span>
                                <input type="hidden" id="paidAmount" value="0">
                            </div>
                        </div>
                        <div class="structure-list d-flex justify-content-between border-bottom">
                            <p class="mb-0"><i class="las la-dot-circle fs-18 text-primary me-2"></i>Unpaid
                            </p>
                            <div>
                                <span class="badge bg-primary" id="pendingAmt"> $9510.48
                                </span>
                                <input type="hidden" id="pendingAmount" value="9510.48">
                            </div>
                        </div>
                        <div class="structure-list d-flex justify-content-between pb-0">
                            <p class="mb-0"><i class="las la-dot-circle fs-18 text-primary me-2"></i>Cancelled
                            </p>
                            <div>
                                <span class="badge bg-primary" id="cancelAmt"> $2712
                                </span>
                                <input type="hidden" id="cancelledAmount" value="2712">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-5">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex mb-3">
                    <h4 class="card-title mb-0 flex-grow-1">Latest Client List</h4>
                </div>

                <div class="card-body pt-0">

                    <div class="table-responsive table-card">
                        <table class="table table-borderless table-centered table-hover align-middle table-nowrap mb--0">
                            <thead class="table-warning">
                                <tr>
                                    <th scope="col">Sr. No</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" style="width: 12%;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <p class="mb-0">1</p>
                                    </td>
                                    <td><img src="/build/images/users/1705575045.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="#javascript: void(0);" class="text-body align-middle">xyz vxzasdf</a>
                                    </td>
                                    <td>quet663@gamail.comas</td>

                                    <td>
                                        <div class="dropdown">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Make Invoice">
                                                <a href="https://invoika-laravel.themesbrand.website/make-invoice/10" class="btn btn-soft-warning btn-sm d-inline-block"><i class="las la-file-invoice"></i></a>
                                            </li>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0">2</p>
                                    </td>
                                    <td><img src="/build/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="#javascript: void(0);" class="text-body align-middle">Layla Rosenbaum</a>
                                    </td>
                                    <td>lang.dariana@example.net</td>

                                    <td>
                                        <div class="dropdown">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Make Invoice">
                                                <a href="https://invoika-laravel.themesbrand.website/make-invoice/4" class="btn btn-soft-warning btn-sm d-inline-block"><i class="las la-file-invoice"></i></a>
                                            </li>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0">3</p>
                                    </td>
                                    <td><img src="/build/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                        <a href="#javascript: void(0);" class="text-body align-middle">Invoika II Client</a>
                                    </td>
                                    <td>client@themesbrand.com</td>

                                    <td>
                                        <div class="dropdown">
                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Make Invoice">
                                                <a href="https://invoika-laravel.themesbrand.website/make-invoice/3" class="btn btn-soft-warning btn-sm d-inline-block"><i class="las la-file-invoice"></i></a>
                                            </li>
                                        </div>
                                    </td>
                                </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end table responsive -->

                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header align-items-center d-flex pb-2">
                    <h4 class="card-title mb-0 flex-grow-1">Payment Overview</h4>
                    <div class="flex-shrink-0 ms-2">
                        <div class="dropdown">
                            <input type="date" class="form-control" id="overviewYearPicker" name="overviewYearPicker" placeholder="Select year">
                            <input type="hidden" name="_token" value="MreDUg3ps3tz6aZOzaTHaKuLHjZWqNPNjbvMYw70">
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div id="payment-overview" data-colors='["--in-primary", "--in-light"]' class="apex-charts" dir="ltr"></div>
                    <div class="row mt-3 text-center">
                        <div class="col-6 border-end">
                            <div class="my-1">
                                <p class="text-muted text-truncate mb-2">Paid Amount</p>
                                <h4 class="mt-2 mb-0 fs-20" id="overViewPaidAmt">$0
                                </h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="my-1">
                                <p class="text-muted text-truncate mb-2">Unpaid Amount</p>
                                <h4 class="mt-2 mb-0 fs-20" id="overViewUnpaidAmt">
                                    $9510.48</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card card-height-100">
                <div class="card-body">
                    <div class="d-flex align-items-start mb-1">
                        <div class="flex-grow-1">
                            <h5 class="card-title">Recent Transaction</h5>
                        </div>
                    </div>

                    <div class="mx-n3 px-3 recent-transaction" data-simplebar>
                        <div class="border-bottom sales-history">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary rounded-circle fs-3">
                                        <i class="lab la-paypal fs-22"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                    <h5 class="fs-15 mb-1 text-truncate">Invoice</h5>
                                    <p class="fs-14 text-muted text-truncate mb-0">
                                        20 Jan, 2024 04:12:39</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <span class="badge fs-12 badge-soft-success">$2712</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom sales-history">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary rounded-circle fs-3">
                                        <i class="lab la-paypal fs-22"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                    <h5 class="fs-15 mb-1 text-truncate">Invoice</h5>
                                    <p class="fs-14 text-muted text-truncate mb-0">
                                        20 Dec, 2023 03:52:05</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <span class="badge fs-12 badge-soft-success">$755.4</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom sales-history">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary rounded-circle fs-3">
                                        <i class="lab la-paypal fs-22"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                    <h5 class="fs-15 mb-1 text-truncate">Invoice</h5>
                                    <p class="fs-14 text-muted text-truncate mb-0">
                                        02 Dec, 2023 03:34:10</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <span class="badge fs-12 badge-soft-success">$1067</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mb-3">
        <input type="hidden" id="latlongArray" value="[]">
        <div class="col-xl-7">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Sales Revenue</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="py-3">
                                <div id="world-map-markers" style="height: 269px"></div>
                            </div>
                        </div>

                        <div class="col-xl-5">
                            <div class="table-responsive table-card">
                                <table class="table table-bordered table-centered align-middle table-nowrap mb-0">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Country</th>
                                            <th>Orders</th>
                                            <th>Earning</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr colspan="3">
                                            <td class="d-flex align-items-center">
                                                No Transaction Found</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5">
            <div class="card card-height-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Latest Invoice List</h5>
                </div>
                <div class="card-body pt-2">
                    <div class="table-responsive table-card">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <thead class="table-info">
                                <tr>
                                    <th scope="col">Invoice ID</th>
                                    <th scope="col">Client</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" style="width: 16%;">Status</th>
                                    <th scope="col" style="width: 12%;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <p class="mb-0 fs-14">#test104343441</p>
                                    </td>
                                    <td>
                                        <a href="#javascript: void(0);" class="text-body align-middle">Layla Rosenbaum</a>
                                    </td>
                                    <td>815.52</td>
                                    <td>24 Jan, 2024</td>
                                    <td><span class="badge badge-soft-danger p-2">Unpaid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/view-invoice/35"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                        View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/edit-invoice/35"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" href="https://invoika-laravel.themesbrand.website/delete-invoice/35">
                                                        <i class="las la-trash-alt fs-18 align-middle me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0 fs-14">#test76762371</p>
                                    </td>
                                    <td>
                                        <a href="#javascript: void(0);" class="text-body align-middle">Invoika II Client</a>
                                    </td>
                                    <td>377.04</td>
                                    <td>30 Jan, 2024</td>
                                    <td><span class="badge badge-soft-danger p-2">Unpaid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/view-invoice/34"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                        View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/edit-invoice/34"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" href="https://invoika-laravel.themesbrand.website/delete-invoice/34">
                                                        <i class="las la-trash-alt fs-18 align-middle me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0 fs-14">#pm110811175</p>
                                    </td>
                                    <td>
                                        <a href="#javascript: void(0);" class="text-body align-middle">Layla Rosenbaum</a>
                                    </td>
                                    <td>282</td>
                                    <td>30 Jan, 2024</td>
                                    <td><span class="badge badge-soft-danger p-2">Unpaid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/view-invoice/33"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                        View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/edit-invoice/33"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" href="https://invoika-laravel.themesbrand.website/delete-invoice/33">
                                                        <i class="las la-trash-alt fs-18 align-middle me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0 fs-14">#gtr53918888</p>
                                    </td>
                                    <td>
                                        <a href="#javascript: void(0);" class="text-body align-middle">Invoika II Client</a>
                                    </td>
                                    <td>1377.12</td>
                                    <td>26 Jan, 2024</td>
                                    <td><span class="badge badge-soft-danger p-2">Unpaid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/view-invoice/32"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                        View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/edit-invoice/32"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" href="https://invoika-laravel.themesbrand.website/delete-invoice/32">
                                                        <i class="las la-trash-alt fs-18 align-middle me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0 fs-14">#gtr53918888</p>
                                    </td>
                                    <td>
                                        <a href="#javascript: void(0);" class="text-body align-middle">Invoika II Client</a>
                                    </td>
                                    <td>1377.12</td>
                                    <td>26 Jan, 2024</td>
                                    <td><span class="badge badge-soft-danger p-2">Unpaid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/view-invoice/31"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                        View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/edit-invoice/31"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" href="https://invoika-laravel.themesbrand.website/delete-invoice/31">
                                                        <i class="las la-trash-alt fs-18 align-middle me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0 fs-14">#test22224935</p>
                                    </td>
                                    <td>
                                        <a href="#javascript: void(0);" class="text-body align-middle">Layla Rosenbaum</a>
                                    </td>
                                    <td>282</td>
                                    <td>02 Jan, 2024</td>
                                    <td><span class="badge badge-soft-danger p-2">Unpaid</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/view-invoice/30"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                        View</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="https://invoika-laravel.themesbrand.website/edit-invoice/30"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" href="https://invoika-laravel.themesbrand.website/delete-invoice/30">
                                                        <i class="las la-trash-alt fs-18 align-middle me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end table responsive -->

                </div>
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>