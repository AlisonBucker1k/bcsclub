<div class="container-fluid dashboard-inner-body-container">
    
    <div class="row">
        
        <div class="col-lg-3 col-md-6">
            <div class="card-item dashboard-stat">
                <div class="card-content">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="card-title font-size-40">10</h2>
                            <p class="card-sub font-size-18 line-height-24">Active Listings</p>
                        </div>
                        <div class="col-auto font-size-60">
                            <i class="la la-map-marked text-primary"></i>
                        </div>
                    </div><!-- end row -->
                </div><!-- end card-content -->
            </div><!-- end card-item -->
        </div><!-- end col-lg-3 -->
        <div class="col-lg-3 col-md-6">
            <div class="card-item dashboard-stat">
                <div class="card-content">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="card-title font-size-40">1,020</h2>
                            <p class="card-sub font-size-18 line-height-24">Total Views</p>
                        </div>
                        <div class="col-auto font-size-60">
                            <i class="la la-line-chart text-success"></i>
                        </div>
                    </div><!-- end row -->
                </div><!-- end card-content -->
            </div><!-- end card-item -->
        </div><!-- end col-lg-3 -->
        <div class="col-lg-3 col-md-6">
            <div class="card-item dashboard-stat">
                <div class="card-content">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="card-title font-size-40">200</h2>
                            <p class="card-sub font-size-18 line-height-24">Total Reviews</p>
                        </div>
                        <div class="col-auto font-size-60">
                            <i class="la la-star-o text-info"></i>
                        </div>
                    </div><!-- end row -->
                </div><!-- end card-content -->
            </div><!-- end card-item -->
        </div><!-- end col-lg-3 -->
        <div class="col-lg-3 col-md-6">
            <div class="card-item dashboard-stat">
                <div class="card-content">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="card-title font-size-40">120</h2>
                            <p class="card-sub font-size-18 line-height-24">Bookmarked</p>
                        </div>
                        <div class="col-auto font-size-60">
                            <i class="la la-bookmark text-warning"></i>
                        </div>
                    </div><!-- end row -->
                </div><!-- end card-content -->
            </div><!-- end card-item -->
        </div><!-- end col-lg-3 -->
        <div class="col-lg-7">
            <div class="block-card dashboard-card mb-4">
                <div class="block-card-header d-flex flex-wrap align-items-center justify-content-between">
                    <div id="myChartLegend">
                        <ul class="0-legend d-flex align-items-center">
                            <li class="btn-gray mr-2"><span></span>Listings Views</li>
                            <li class="btn-gray"><span></span>Bookings</li>
                        </ul>
                    </div>
                    <div class="user-chosen-select-container">
                        <select class="user-chosen-select">
                            <option value="1">Today</option>
                            <option value="2">Week</option>
                            <option value="3" selected>Month</option>
                            <option value="4">This Year</option>
                        </select>
                    </div>
                </div>
                <div class="block-card-body">
                    <div class="chart-block">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div><!-- end block-card-body -->
            </div><!-- end block-card -->
        </div><!-- end col-lg-7 -->
        <div class="col-lg-5">
            <div class="block-card dashboard-card mb-4">
                <div class="block-card-header">
                    <h2 class="widget-title pb-0">Recent Activities</h2>
                </div>
                <div class="block-card-body">
                    <div class="generic-list-card d-flex align-items-center justify-content-between">
                        <div class="generic-list-card-content d-flex align-items-center mr-2">
                            <span class="icon-element bg-1 mr-2 after-none"><i class="la la-check"></i></span>
                            <span class="font-weight-medium font-size-15">Your listing <a href="#" class="generic-link">Hotel Gulshan</a> has been approved!</span>
                        </div>
                        <a href="javascript:void(0)" class="generic-close"><i class="la la-times"></i></a>
                    </div><!-- end generic-list-card -->
                    <div class="generic-list-card d-flex align-items-center justify-content-between">
                        <div class="generic-list-card-content d-flex align-items-center mr-2">
                            <span class="icon-element bg-2 mr-2 after-none"><i class="la la-check"></i></span>
                            <span class="font-weight-medium font-size-15">Your listing <a href="#" class="generic-link">Burger House</a> has been approved!</span>
                        </div>
                        <a href="javascript:void(0)" class="generic-close"><i class="la la-times"></i></a>
                    </div><!-- end generic-list-card -->
                    <div class="generic-list-card d-flex align-items-center justify-content-between">
                        <div class="generic-list-card-content d-flex align-items-center mr-2">
                            <span class="icon-element bg-3 mr-2 after-none"><i class="la la-star-o"></i></span>
                            <span class="font-weight-medium font-size-15">Pitter Parker left a review <span class="badge badge-warning text-white">3.4</span> on <a href="#" class="generic-link">John's Coffee Shop</a></span>
                        </div>
                        <a href="javascript:void(0)" class="generic-close"><i class="la la-times"></i></a>
                    </div><!-- end generic-list-card -->
                    <div class="generic-list-card d-flex align-items-center justify-content-between">
                        <div class="generic-list-card-content d-flex align-items-center mr-2">
                            <span class="icon-element bg-4 mr-2 after-none"><i class="la la-bookmark"></i></span>
                            <span class="font-weight-medium font-size-15">Someone bookmarked your <a href="#" class="generic-link">Super Duper Burgers</a></span>
                        </div>
                        <a href="javascript:void(0)" class="generic-close"><i class="la la-times"></i></a>
                    </div><!-- end generic-list-card -->
                    <div class="generic-list-card d-flex align-items-center justify-content-between">
                        <div class="generic-list-card-content d-flex align-items-center mr-2">
                            <span class="icon-element bg-5 mr-2 after-none"><i class="la la-star-o"></i></span>
                            <span class="font-weight-medium font-size-15">Alex Smith left a review <span class="badge badge-warning text-white">4.4</span> on <a href="#" class="generic-link">Tom's Restaurant</a></span>
                        </div>
                        <a href="javascript:void(0)" class="generic-close"><i class="la la-times"></i></a>
                    </div><!-- end generic-list-card -->
                </div><!-- end block-card-body -->
            </div><!-- end block-card -->
        </div><!-- end col-lg-5 -->
        <div class="col-lg-7">
            <div class="block-card dashboard-card mb-4 px-0">
                <div class="block-card-header d-flex flex-wrap align-items-center justify-content-between px-4 border-bottom-0 pb-0">
                    <h2 class="widget-title pb-0">Invoices</h2>
                    <a href="#" class="btn-gray">View More <i class="la la-arrow-right ml-1"></i></a>
                </div>
                <div class="block-card-body">
                    <div class="my-table table-responsive">
                        <table class="table align-items-center table-flush mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Item</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#" class="order-id">RA0449</a></td>
                                    <td>Udin Wayang</td>
                                    <td>Nasi Padang</td>
                                    <td>20/02/2020</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><a href="invoice.html" class="btn btn-sm theme-btn-primary">Invoice</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="order-id">RA5324</a></td>
                                    <td>Jaenab Bajigur</td>
                                    <td>Gundam 90' Edition</td>
                                    <td>20/02/2020</td>
                                    <td><span class="badge badge-warning text-white">Shipping</span></td>
                                    <td><a href="invoice.html" class="btn btn-sm theme-btn-primary">Invoice</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="order-id">RA8568</a></td>
                                    <td>Rivat Mahesa</td>
                                    <td>Oblong T-Shirt</td>
                                    <td>20/02/2020</td>
                                    <td><span class="badge badge-danger">Unpaid</span></td>
                                    <td><a href="invoice.html" class="btn btn-sm theme-btn-primary">Invoice</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="order-id">RA1453</a></td>
                                    <td>Indri Junanda</td>
                                    <td>Hat Rounded</td>
                                    <td>20/02/2020</td>
                                    <td><span class="badge badge-info">Processing</span></td>
                                    <td><a href="invoice.html" class="btn btn-sm theme-btn-primary">Invoice</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="order-id">RA1998</a></td>
                                    <td>Udin Cilok</td>
                                    <td>Baby Powder</td>
                                    <td>20/02/2020</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><a href="invoice.html" class="btn btn-sm theme-btn-primary">Invoice</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end block-card-body -->
            </div><!-- end block-card -->
        </div><!-- end col-lg-7 -->
        <div class="col-lg-5">
            <div class="block-card dashboard-card mb-4 px-0 pb-0">
                <div class="block-card-header px-4">
                    <h2 class="widget-title pb-0">Message From Customer</h2>
                </div>
                <div class="block-card-body pt-0">
                    <div class="generic-list msg-from-customer">
                        <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                            <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                <img src="images/avatar-img.jpg" alt="author-image">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="ml-2">
                                <p class="text-truncate text-color font-size-14 font-weight-medium">Hi there! I am wondering if you can help me with a problem I've been having.</p>
                                <p class="small text-gray">Udin Cilok · 1m</p>
                            </div>
                        </a>
                        <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                            <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                <img src="images/avatar-img2.jpg" alt="author-image">
                                <div class="status-indicator"></div>
                            </div>
                            <div class="ml-2">
                                <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                <p class="small text-gray">Joynal Ali · 4m</p>
                            </div>
                        </a>
                        <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                            <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                <img src="images/avatar-img3.jpg" alt="author-image">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="ml-2">
                                <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                <p class="small text-gray">Colin Smith · 10m</p>
                            </div>
                        </a>
                        <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                            <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                <img src="images/avatar-img4.jpg" alt="author-image">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="ml-2">
                                <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                <p class="small text-gray">Alex Smith · 1h</p>
                            </div>
                        </a>
                        <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                            <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                <img src="images/avatar-img5.jpg" alt="author-image">
                                <div class="status-indicator"></div>
                            </div>
                            <div class="ml-2">
                                <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                <p class="small text-gray">Kamran adi · Yesterday</p>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray font-weight-medium py-2" href="dashboard-messages.html">View More <i class="la la-arrow-right ml-1"></i></a>
                    </div><!-- end generic-list -->
                </div><!-- end block-card-body -->
            </div><!-- end block-card -->
        </div><!-- end col-lg-5 -->
    </div><!-- end row -->
</div><!-- end dashboard-inner-body-container -->