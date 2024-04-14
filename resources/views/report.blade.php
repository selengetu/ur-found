@extends('layouts.app')

@section('content')
  
    <div class="card">
    <form method="POST" action="{{ route('storeReport') }}" enctype="multipart/form-data">
    @csrf
				  <div class="card-body p-4">
					  <h5 class="card-title">File a report </h5>
					  <hr>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-10 offset-lg-1">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">What have you lost?</label>
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
								<label for="inputProductTitle" class="form-label">Where did you see it last?</label>
								<select class="form-select" id="campus_id" name="campus_id">
                                @foreach($campus as $campus)
                                        <option value= "{{$campus->id}}">{{$campus->name}}</option>
                                    @endforeach
									  </select>
							  </div>
							  <div class="mb-3">
									<label for="inputCompareatprice" class="form-label">When did you lose it?</label>
									<input type="date" class="form-control" id="lost_date" name="lost_date">
								  </div>
                                  <div class="mb-3">
                            <label for="picture" class="form-label">Upload a picture of the item</label>
                            <input type="file" class="form-control" id="picture" name="picture">
                        </div>
								  <div class="mb-3">
									  <div class="d-grid">
                                         <button type="submit" class="btn btn-primary" style="background:#00205BFF;border:#00205BFF;color:white;">Submit</button>
									  </div>
								  </div>
                            </div>
						   </div>
					   </div><!--end row-->
					</div>
				  </div>
</form>
			  </div>
    <!--end row-->
    <div class="card">
					<div class="card-body">
						
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>№</th>
                                        <th>Status</th>
										<th>Category</th>
										<th>Item</th>
										<th>Description</th>
										<th>Date</th>
										<th>On</th>
										
									
									</tr>
								</thead>
								<tbody>
								<?php $no = 1; ?>
                                    @foreach($item as $items)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$items->status_name}}</td>  
											<td>{{$items->name}}</td>
                                            <td>{{$items->item_title}}</td>
                                            <td>{{$items->description}}</td>
                                            <td>{{$items->location_name}}</td>
											<td>{{$items->lost_date}}</td>
                                            
                                        </tr>
                                        <?php $no++; ?>
                                    @endforeach
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
