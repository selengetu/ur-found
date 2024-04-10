@extends('layouts.app')

@section('content')
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Found items</p>
                            <h4 class="my-1 text-info">4805</h4>
                            <p class="mb-0 font-13">+2.5% from last week</p>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto">
                            <i class="bx bxs-cart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Claimed</p>
                            <h4 class="my-1 text-danger">$84,245</h4>
                            <p class="mb-0 font-13">+5.4% from last week</p>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto">
                            <i class="bx bxs-wallet"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">User Count</p>
                            <h4 class="my-1 text-success">34.6%</h4>
                            <p class="mb-0 font-13">-4.5% from last week</p>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                            <i class="bx bxs-bar-chart-alt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Users</p>
                            <h4 class="my-1 text-warning">8.4K</h4>
                            <p class="mb-0 font-13">+8.4% from last week</p>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto">
                            <i class="bx bxs-group"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-12 col-lg-12 d-flex">
            <div class="card radius-10 w-100">
                
                <div class="card-body">
                    <div class="d-flex align-items-right ms-auto font-13 gap-2 mb-3">
                    <img src="assets/images/app/img_114.png" alt="product img" style="width:100%"/>
                    </div>
                   
                </div>
                
            </div>
        </div>
    
    </div>
    <!--end row-->

    <div class="card radius-10">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h6 class="mb-0">Recent Orders</h6>
                </div>
                <div class="dropdown ms-auto">
                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i
                            class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="javascript:;">Action</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th>Photo</th>
                            <th>Product ID</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Shipping</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Iphone 5</td>
                            <td>
                                <img src="assets/images/products/01.png" class="product-img-2" alt="product img" />
                            </td>
                            <td>#9405822</td>
                            <td>
                                <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                            </td>
                            <td>$1250.00</td>
                            <td>03 Feb 2020</td>
                            <td>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%">
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Earphone GL</td>
                            <td>
                                <img src="assets/images/products/02.png" class="product-img-2" alt="product img" />
                            </td>
                            <td>#8304620</td>
                            <td>
                                <span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span>
                            </td>
                            <td>$1500.00</td>
                            <td>05 Feb 2020</td>
                            <td>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-gradient-blooker" role="progressbar" style="width: 60%">
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>HD Hand Camera</td>
                            <td>
                                <img src="assets/images/products/03.png" class="product-img-2" alt="product img" />
                            </td>
                            <td>#4736890</td>
                            <td>
                                <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span>
                            </td>
                            <td>$1400.00</td>
                            <td>06 Feb 2020</td>
                            <td>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-gradient-bloody" role="progressbar" style="width: 70%">
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Clasic Shoes</td>
                            <td>
                                <img src="assets/images/products/04.png" class="product-img-2" alt="product img" />
                            </td>
                            <td>#8543765</td>
                            <td>
                                <span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span>
                            </td>
                            <td>$1200.00</td>
                            <td>14 Feb 2020</td>
                            <td>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sitting Chair</td>
                            <td>
                                <img src="assets/images/products/06.png" class="product-img-2" alt="product img" />
                            </td>
                            <td>#9629240</td>
                            <td>
                                <span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span>
                            </td>
                            <td>$1500.00</td>
                            <td>18 Feb 2020</td>
                            <td>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-gradient-blooker" role="progressbar" style="width: 60%">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Hand Watch</td>
                            <td>
                                <img src="assets/images/products/05.png" class="product-img-2" alt="product img" />
                            </td>
                            <td>#8506790</td>
                            <td>
                                <span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span>
                            </td>
                            <td>$1800.00</td>
                            <td>21 Feb 2020</td>
                            <td>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-gradient-bloody" role="progressbar" style="width: 40%">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-5 col-xl-4 d-flex">
            <div class="card w-100 radius-10">
                <div class="card-body">
                    <div class="card radius-10 border shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Likes</p>
                                    <h4 class="my-1">45.6M</h4>
                                    <p class="mb-0 font-13">+6.2% from last week</p>
                                </div>
                                <div class="widgets-icons-2 bg-gradient-cosmic text-white ms-auto">
                                    <i class="bx bxs-heart-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card radius-10 border shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Comments</p>
                                    <h4 class="my-1">25.6K</h4>
                                    <p class="mb-0 font-13">+3.7% from last week</p>
                                </div>
                                <div class="widgets-icons-2 bg-gradient-ibiza text-white ms-auto">
                                    <i class="bx bxs-comment-detail"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card radius-10 mb-0 border shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Shares</p>
                                    <h4 class="my-1">85.4M</h4>
                                    <p class="mb-0 font-13">+4.6% from last week</p>
                                </div>
                                <div class="widgets-icons-2 bg-gradient-kyoto text-dark ms-auto">
                                    <i class="bx bxs-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    <div class="row row-cols-1 row-cols-lg-3">
        <div class="col d-flex">
            <div class="card radius-10 w-100">
                <div class="card-body">
                    <p class="font-weight-bold mb-1 text-secondary">
                        Weekly Revenue
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div>
                            <h4 class="mb-0">$89,540</h4>
                        </div>
                        <div class="">
                            <p class="mb-0 align-self-center font-weight-bold text-success ms-2">
                                4.4% <i class="bx bxs-up-arrow-alt mr-2"></i>
                            </p>
                        </div>
                    </div>
                    <div class="chart-container-0 mt-5">
                        <canvas id="chart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Orders Summary</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown"><i
                                    class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container-1 mt-3">
                        <canvas id="chart4"></canvas>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li
                        class="list-group-item d-flex bg-transparent justify-content-between align-items-center border-top">
                        Completed
                        <span class="badge bg-gradient-quepal rounded-pill">25</span>
                    </li>
                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        Pending
                        <span class="badge bg-gradient-ibiza rounded-pill">10</span>
                    </li>
                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                        Process
                        <span class="badge bg-gradient-deepblue rounded-pill">65</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Top Selling Categories</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown"><i
                                    class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container-0">
                        <canvas id="chart5"></canvas>
                    </div>
                </div>
                <div class="row row-group border-top g-0">
                    <div class="col">
                        <div class="p-3 text-center">
                            <h4 class="mb-0 text-danger">$45,216</h4>
                            <p class="mb-0">Clothing</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 text-center">
                            <h4 class="mb-0 text-success">$68,154</h4>
                            <p class="mb-0">Electronic</p>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end row-->
@endsection

@section('scripts')
    <script src="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets/plugins/chartjs/js/chart.js"></script>
    <script src="/assets/js/index.js"></script>
@endsection
