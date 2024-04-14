@extends('layouts.app')

@section('content')
<div class=row>
	<div class="col-md-3">
	<div class="card">
<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
							  <label for="inputPrice" class="form-label"><h4>Filter</h4></label>
								<div class="col-md-12">
									<label for="inputPrice" class="form-label">Category</label>
									<select class="form-select" id="inputProductType">
									@foreach($category as $categories)
                                        <option value= "{{$categories->id}}">{{$categories->name}}</option>
                                    @endforeach
									  </select>
								  </div>
								  <div class="col-md-12">
									<label for="inputCompareatprice" class="form-label">Location</label>
									<select class="form-select" id="inputProductType">
									@foreach($campus as $campus)
                                        <option value= "{{$campus->id}}">{{$campus->name}}</option>
                                    @endforeach
									  </select>
								  </div>
								  <div class="col-md-12">
									<label for="inputCostPerPrice" class="form-label">Lost Date</label>
									<input type="date" class="form-control" id="inputCostPerPrice" id="inputDate">
								  </div>
								  <div class="mb-3">
									  <div class="d-grid">
                                      <button type="button" class="btn btn-primary" style="background:#00205BFF;border:#00205BFF;color:white;">View result</button>
									  </div>
								  </div>
							  </div> 
						  </div>

</div>
	</div>
	<div class="col-md-8">
	<div class="card">
	<div class="card-header"><b>Found Items</b></div>
					<div class="card-body">
						
					
								<?php $no = 1; ?>
                                    @foreach($item as $items)
										<div class="card">
								<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
							  <img src="{{ asset('assets/images/item/' . $items->img_path) }}" alt="product img" style="width:60%"/>
								<div class="col-md-12">
									<label for="inputPrice" class="form-label"><b>Category</b>: {{$items->category_name}}</label>
								  </div>
								  <div class="col-md-12">
									<label for="inputCompareatprice" class="form-label"><b>Description</b>: {{$items->description}}</label>
								  </div>
								  <div class="col-md-12">
									<label for="inputCostPerPrice" class="form-label"><b>Find Date</b>: {{$items->find_date}}</label>
								  </div>
								  <div class="col-md-12">
									<label for="inputCostPerPrice" class="form-label"><b>On</b>: {{$items->location_name}}</label>
								  </div>
								  <div class="col-md-12">
									<label for="inputCostPerPrice" class="form-label"><b>Status</b>: {{$items->status_name}}</label><br>
									
								  </div>
								  <div class="col-md-9">
									<label for="inputCostPerPrice" class="form-label"><b>Posted at</b>: {{$items->find_date}}</label><br>
									
								  </div>
								  <div class="col-md-3">
									  <div class="d-grid">
                                         <button type="button" class="btn btn-primary" style="background: #FFC70AFF; border:#FFC70AFF">Mark as solved</button>
									  </div>
								  </div>
							  </div> 
						  </div>

</div>
                                    @endforeach	
					</div>
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
