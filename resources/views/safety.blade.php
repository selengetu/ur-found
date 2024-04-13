@extends('layouts.app')

@section('content')
<div class="card">
<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								<div class="col-md-3">
									<label for="inputPrice" class="form-label">Category</label>
									<select class="form-select" id="inputProductType">
									@foreach($category as $categories)
                                        <option value= "{{$categories->id}}">{{$categories->name}}</option>
                                    @endforeach
									  </select>
								  </div>
								  <div class="col-md-3">
									<label for="inputCompareatprice" class="form-label">Location</label>
									<select class="form-select" id="inputProductType">
									@foreach($campus as $campus)
                                        <option value= "{{$campus->id}}">{{$campus->name}}</option>
                                    @endforeach
									  </select>
								  </div>
								  <div class="col-md-3">
									<label for="inputCostPerPrice" class="form-label">Lost Date</label>
									<input type="date" class="form-control" id="inputCostPerPrice">
								  </div>
							  </div> 
						  </div>

</div>
    <div class="card">
					<div class="card-body">
						
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>№</th>
										<th>Category</th>
										<th>Item</th>
										<th>Description</th>
										<th>Date</th>
										<th>On</th>
										<th>Status</th>
										<th>Picture</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1; ?>
                                    @foreach($item as $items)
                                        <tr>
                                            <td>{{$no}}</td>
											<td>{{$items->name}}</td>
                                            <td>{{$items->item_title}}</td>
                                            <td>{{$items->description}}</td>
                                            <td>{{$items->location_name}}</td>
											<td>{{$items->lost_date}}</td>
                                            <td>{{$items->status_name}}</td>
                                            <td><img src="{{$items->img_path}}" alt="product img" style="width:200px" onclick="openModal(this.src)"/></td>
											<td><div class="d-flex order-actions">
												<a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
												<a href="javascript:;" class="ms-3"><i class="bx bxs-trash"></i></a>
											</div>   </td>
											  
                                        </tr>
                                        <?php $no++; ?>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
                <div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Product Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="modal-img" id="modalImg" style="width:300px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

    <script>

    // Function to open the modal with the clicked image
function openModal(src) {
  var modal = document.getElementById('myModal');
  var modalImg = document.getElementById("modalImg");
  modal.style.display = "block";
  modalImg.src = src;

  // Close the modal when clicked outside of the image or on close button
  modal.onclick = function() {
    modal.style.display = "none";
  }
}


    </script>
@endsection
