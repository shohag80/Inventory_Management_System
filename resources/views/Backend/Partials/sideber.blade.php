<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="" class="logo logo-dark">
            <span class="logo-sm">
                <h4 class="mt-4 bg-warning p-2 rounded"><b>IMS</b></h4>
            </span>
            <span class="logo-lg">
                <h4 class="mt-4 bg-warning p-2 rounded"><b>Inv. Manag. Sys.</b></h4>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="" class="logo logo-light">
            <span class="logo-sm">
            <h4 class="mt-4 bg-warning p-2 rounded"><b>IMS</b></h4>
            </span>
            <span class="logo-lg">
            <h4 class="mt-4 bg-warning p-2 rounded"><b>Inv. Manag. Sys.</b></h4>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('Deshboard')}}">
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li class="menu-title"><span data-key="t-pages">Pages</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="">
                        <span data-key="t-taxes">Company</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                        <span data-key="t-invoices">Invoices</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarInvoice">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-invoice"> Invoice </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-add-invoice"> Add Invoice </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link " href="">
                        <span data-key="t-payments">Payments</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTax" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTax">
                        <span data-key="t-tax">Tax/Charges</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTax">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link menu-link" href=""><span data-key="t-taxes">Tax</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href=""><span data-key="t-taxes">Discount</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href=""><span data-key="t-taxes">Shipping Charge</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                        <span data-key="t-products">Products</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProducts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-product-list"> Product List </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-add-product"> Add Product </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-add-product"> Add New Brand </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-add-product"> Add New Category </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-add-product"> Add Product Color </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarReport" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarReport">
                        <span data-key="t-report">Reports</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarReport">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-sale-report"> Sale Report </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="">
                        <span data-key="t-users">Clients</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="">
                        <span data-key="t-users">Accountants</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>