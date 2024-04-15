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
	<div class="card-header">
	<div class="row">
			<div class="col-md-10">
			<b>Found Items</b>
			</div>
			<div class="col-md-2">
			<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#AddModal">
													Add New Item
												</button>
			</div>
		</div>
</div>
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
									  @if($items->status_id == 3)
									  <span><b>Delivered</b></span>
									  @elseif($items->status_id == 4)
									  <span><b>Notified</b></span>
									  @else
									  <button type="button" class="btn btn-primary" style="background: #FFC70AFF; border:#FFC70AFF" data-bs-toggle="modal" data-bs-target="#claimModal" onclick="transfer({{$items->id}})">Mark as solved</button>
											@endif
                                      
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
<div class="card">
	<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="claimModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<form method="POST" action="{{ route('storeFound') }}" enctype="multipart/form-data">
    @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="claimModalLabel">Add New Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<div class="row">
						   <div class="col-lg-10 offset-lg-1">
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">What have you find?</label>
								<select class="form-select" id="category_id" name="category_id">
                                @foreach($category as $categories)
                                        <option value= "{{$categories->id}}">{{$categories->name}}</option>
                                    @endforeach
									  </select>
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Briefly describe the item</label>
								<textarea class="form-control" id="description" name="description" rows="3"></textarea>
							  </div>
                              <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Item title</label>
								<input class="form-control" id="item_title" name="item_title" >
							  </div>
							  <div class="mb-3">
								<label for="inputProductTitle" class="form-label">Where did you find?</label>
								<select class="form-select" id="campus_id" name="campus_id">
								@foreach($location as $locations)
                                        <option value= "{{$locations->id}}">{{$locations->name}}</option>
                                    @endforeach
									  </select>
							  </div>
                                  <div class="mb-3">
                            <label for="picture" class="form-label">Upload a picture of the item</label>
                            <input type="file" class="form-control" id="picture" name="picture">
                        </div>
						   </div>
					   </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" style="background:#00205BFF;border:#00205BFF;color:white;">Claim</button>
            </div>
			</form>
        </div>
    </div>
</div>
</div>

<div class="card">
	<div class="modal fade" id="claimModal" tabindex="-1" aria-labelledby="claimModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<form method="POST" action="{{ route('connectLost') }}" enctype="multipart/form-data">
    @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="claimModalLabel">Claim item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<div class="row">
						   <div class="col-lg-10 offset-lg-1">
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">Match lost item</label>
								<input class="form-control" id="l_item_id" name="l_item_id" style="display:none" >
								<select class="form-select" id="lost_item_id" name="lost_item_id">
								<option value= "0">No Record</option>
                                @foreach($litem as $litems)
                                        <option value= "{{$litems->id}}">{{$litems->id}}-{{$litems->item_title}}-{{$litems->description}}</option>
                                    @endforeach
									  </select>
							  </div>
						   </div>
					   </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" style="background:#00205BFF;border:#00205BFF;color:white;">Claim</button>
            </div>
			</form>
        </div>
    </div>
</div>
</div>
@endsection
<style>
	.hidden-input{
    display: none;
}

	</style>
@section('scripts')
    <script src="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets/plugins/chartjs/js/chart.js"></script>
    <script src="/assets/js/index.js"></script>
	<script>
		function transfer(id) {
			document.getElementById('l_item_id').value = id;
		}
</script>


@endsection
