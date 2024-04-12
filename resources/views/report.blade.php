@extends('layouts.app')

@section('content')
  
    <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">File a report </h5>
					  <hr>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-10 offset-lg-1">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">What have you lost?</label>
								<select class="form-select" id="inputProductType">
										<option></option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									  </select>
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Briefly describe the item</label>
								<textarea class="form-control" id="inputProductDescription" rows="3"></textarea>
							  </div>
							  <div class="mb-3">
								<label for="inputProductTitle" class="form-label">Where did you see it last?</label>
								<select class="form-select" id="inputProductType">
										<option></option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									  </select>
							  </div>
							  <div class="mb-3">
									<label for="inputCompareatprice" class="form-label">When did you lose it?</label>
									<input type="date" class="form-control" id="lost_date">
								  </div>
								  <div class="mb-3">
									  <div class="d-grid">
                                         <button type="button" class="btn btn-primary">Submit</button>
									  </div>
								  </div>
                            </div>
						   </div>
					   </div><!--end row-->
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
