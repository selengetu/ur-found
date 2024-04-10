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
