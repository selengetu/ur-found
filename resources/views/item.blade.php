@extends('layouts.app')

@section('content')
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Orders</p>
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
                            <p class="mb-0 text-secondary">Total Revenue</p>
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
                            <p class="mb-0 text-secondary">Bounce Rate</p>
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
                            <p class="mb-0 text-secondary">Total Customers</p>
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
    <div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						  <div class="ms-auto"><a href="javascript:;" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Order</a></div>
						</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>Order#</th>
										<th>Company Name</th>
										<th>Status</th>
										<th>Total</th>
										<th>Date</th>
										<th>View Details</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000354</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class="bx bxs-circle me-1"></i>FulFilled</div></td>
										<td>$485.20</td>
										<td>June 10, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000986</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>Confirmed</div></td>
										<td>$650.30</td>
										<td>June 12, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000536</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>Partially shipped</div></td>
										<td>$159.45</td>
										<td>June 14, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000678</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>FulFilled</div></td>
										<td>$968.40</td>
										<td>June 16, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000457</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>Confirmed</div></td>
										<td>$689.50</td>
										<td>June 18, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000685</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>Confirmed</div></td>
										<td>$478.60</td>
										<td>June 20, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000356</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>Partially shipped</div></td>
										<td>$523.30</td>
										<td>June 21, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000875</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>FulFilled</div></td>
										<td>$960.20</td>
										<td>June 24, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000658</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>FulFilled</div></td>
										<td>$428.10</td>
										<td>June 25, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#OS-000689</h6>
												</div>
											</div>
										</td>
										<td>Gaspur Antunes</td>
										<td><div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>Partially shipped</div></td>
										<td>$876.60</td>
										<td>June 26, 2020</td>
										<td><button type="button" class="btn btn-primary btn-sm radius-30 px-4">View Details</button></td>
										<td>
											<div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

@endsection

@section('scripts')
    <script src="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets/plugins/chartjs/js/chart.js"></script>
    <script src="/assets/js/index.js"></script>
@endsection
