@extends('layouts.app')

@section('content')
    
    <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Claim a Found Item</h5>
					  <hr>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-10 offset-lg-1">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">Where do you want to pick your item?</label>
								<select class="form-select" id="inputProductType">
										<option></option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									  </select>
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">[Optional] Provide any additional preferences</label>
								<textarea class="form-control" id="inputProductDescription" rows="3"></textarea>
							  </div>
							  <div class="mb-3">
								<label for="inputProductTitle" class="form-label"><b>We will do our best to deliver to your desired location under 24 hours</b></label>
							  </div>
							  <div class="mb-3">
									  <div class="d-grid">
                                         <button type="button" class="btn btn-primary" style="background:#00205BFF;border:#00205BFF;color:white;">Claim</button>
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
