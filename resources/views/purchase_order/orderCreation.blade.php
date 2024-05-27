@extends('admin_layouts.app')

@section('content')

 <header>
    <nav>
      <ul class="breadcrumb">
          <li><a href="{{route('dashboard')}}">Dashboard /</a></li>
        <li><a href="#">Purchase Order - Allocation</a></li>
 
      </ul>
    </nav>
  </header>
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="mb-0">Purchase Order - Allocation</h3>
            </div>
            <div class="card-body">


                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Vehicle Details</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" onclick="showImagePreview(this)" data-image-src="" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-car mdi-24px"></i>
                        </button>
                        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel">Vehicle Image Preview</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <img id="modalVehicleImage" src="" alt="Vehicle Image" class="img-fluid">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="row g-3">
                        <!-- Name -->
                        <div class="col-md-2 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial btn-secondary rounded shadow">
                                        <i class="mdi mdi-account-outline mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1">Name</div>
                                    <h6 class="small mb-1">John Doe</h6> <!-- Example name -->
                                </div>
                            </div>
                        </div>
                        <!-- Mobile -->
                        <div class="col-md-2 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial btn-dark rounded shadow">
                                        <i class="mdi mdi-phone mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1">Mobile</div>
                                    <h6 class="small mb-1">1234567890</h6> <!-- Example mobile number -->
                                </div>
                            </div>
                        </div>
                        <!-- Vehicle Number -->
                        <div class="col-md-2 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-success rounded shadow">
                                        <i class="mdi mdi-car mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1">Vehicle Number</div>
                                    <h6 class="small mb-1">ABC123</h6> <!-- Example vehicle number -->
                                </div>
                            </div>
                        </div>
                        <!-- Type of Work -->
                        <div class="col-md-2 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-success rounded shadow">
                                        <i class="mdi mdi-wrench mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1">Type of Work</div>
                                    <h6 class="small mb-1">Repair</h6> <!-- Example type of work -->
                                </div>
                            </div>
                        </div>
                        <!-- Sector -->
                        <div class="col-md-2 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-warning rounded shadow">
                                        <i class="mdi mdi-office-building mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1">Sector</div>
                                    <h6 class="small mb-1">Automobile</h6> <!-- Example sector -->
                                </div>
                            </div>
                        </div>
                        <!-- Reviewed By -->
                        <div class="col-md-2 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-info rounded shadow">
                                        <i class="mdi mdi-check mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1">Reviewed By</div>
                                    <h6 class="small mb-1">Manager</h6> <!-- Example reviewed by -->
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="mt-4">
                    <h5 class="mb-3">Allocate Material For Supplier</h5>
                  </div>

                  <div class="mt-4">
                    <div class="row mt-2">
                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-none bg-transparent border border-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Supplier Name</h5>
                                    <p class="card-text">Price: $200 <br> Date: dd/mm/yyyy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-none bg-transparent border border-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Supplier Name</h5>
                                    <p class="card-text">Price: $200 <br> Date: dd/mm/yyyy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-none bg-transparent border border-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Supplier Name</h5>
                                    <p class="card-text">Price: $200 <br> Date: dd/mm/yyyy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-none bg-transparent border border-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Supplier Name</h5>
                                    <p class="card-text">Price: $200 <br> Date: dd/mm/yyyy</p>
                                </div>
                            </div>
                        </div>
                    </div>


                  </div>

                  <div class="mt-4">
                    <h5 class="mb-3">Allocate Supplier for TN 07 CX 3084 Material</h5>
                </div>



                     <div class="mt-4">
                        <div class="row mb-6">

                            <div class="table-responsive">
                              <table id="example" style="width:100%" class="table table-striped table-bordered mt-4 pt-4">
                                <thead class="bg-primary" >
                                  <tr>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Material Name</th>
                                      <th  scope="col" style="color:white;font-size:medium;text-align:center">Select Supplier</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Brand</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Quanity</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Unit</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <tr class="bg-white">
                                      <td style="color:black">Material 1 Name</td>
                                      <td style="color:black">
                                        <div>
                                        <select id="smallSelect" class="form-select form-select-sm">
                                          <option>Select Supplier</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                        </select>
                                      </div></td>
                                      <td style="color:black">Tata Steel</td>
                                      <td style="color:black;text-align:center"> 1450</td>
                                      <td style="color:black;text-align:center"> Unit</td>
                                      <td style="color:black;text-align:center">
                                          <div class="dropdown">
                                              <button type="button" class="btn rounded-pill btn-outline-primary" class="dropdown-toggle hide-arrow p-1" data-bs-toggle="dropdown">
                                                  More <i class="mdi mdi-dots-vertical"></i>
                                              </button>
                                              <div class="dropdown-menu">

                                                      <a class="dropdown-item" href="">
                                                          <i class="mdi mdi-pencil-outline me-1"></i> Edit Material
                                                      </a>

                                                  <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this vehicle?')">
                                                      <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                                                  </a>

                                              </div>
                                          </div>
                                      </td>
                                  </tr>

                              </tbody>
                          </table>
                        </div>
                    </div>
                     </div>


                  <div class="mt-4">
                    <h5 class="mb-3">TN 07 CX 3084 Supplier list</h5>
                  </div>
                  {{-- <div class="row">
                    <div class="d-flex justify-content-between w-100">
                        <div class="input-group m-1 p-1">
                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                <option selected>-----Select----</option>
                                <option value="1">Supplier 1 Name</option>
                                <option value="2">Supplier 2 Name</option>
                                <option value="3">Supplier 3 Name</option>
                            </select>
                            <button class="btn btn-outline-primary" type="button">Button</button>
                        </div>

                        <div class="input-group">
                            <button type="button" class="btn btn-outline-success">Print Purchase Order</button>
                        </div>
                    </div>
                </div>

                      <div class="row mb-6">
                        <div class="table-responsive">
                          <table id="example1" style="width:100%" class="table table-striped table-bordered mt-4 pt-4">
                            <thead class="bg-primary" >
                              <tr>
                                  <th scope="col" style="color:white;font-size:medium;text-align:center">Material Name</th>
                                  <th  scope="col" style="color:white;font-size:medium;text-align:center">Brand</th>
                                  <th scope="col" style="color:white;font-size:medium;text-align:center">Quantity</th>
                                  <th scope="col" style="color:white;font-size:medium;text-align:center">Unit of Measurement</th>
                                  <th scope="col" style="color:white;font-size:medium;text-align:center">Actions</th>
                              </tr>
                            </thead>
                            <tbody>

                              <tr class="bg-white">
                                  <td style="color:black">Iron Rod</td>
                                  <td style="color:black">Tata Steel</td>
                                  <td style="color:black">100</td>
                                  <td style="color:black;text-align:center">Unit</td>
                                  <td style="color:black;text-align:center">
                                      <div class="dropdown">
                                          <button type="button" class="btn rounded-pill btn-outline-primary" class="dropdown-toggle hide-arrow p-1" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-trash-can-outline me-1"></i>   Delete
                                          </button>

                                      </div>
                                  </td>
                              </tr>

                          </tbody>
                      </table>
                    </div>

                  </div> --}}

                  <div class="row">
                    <div class="col-xl-12">
                      <div class="nav-align-top mb-4">
                        <ul class="nav nav-pills mb-3" role="tablist">
                          <li class="nav-item">
                            <button
                              type="button"
                              class="nav-link active"
                              role="tab"
                              data-bs-toggle="tab"
                              data-bs-target="#navs-pills-top-home"
                              aria-controls="navs-pills-top-home"
                              aria-selected="true">
                              Supplier1
                            </button>
                          </li>
                          <li class="nav-item">
                            <button
                              type="button"
                              class="nav-link"
                              role="tab"
                              data-bs-toggle="tab"
                              data-bs-target="#navs-pills-top-profile"
                              aria-controls="navs-pills-top-profile"
                              aria-selected="false">
                              Supplier2
                            </button>
                          </li>
                          <li class="nav-item">
                            <button
                              type="button"
                              class="nav-link"
                              role="tab"
                              data-bs-toggle="tab"
                              data-bs-target="#navs-pills-top-messages"
                              aria-controls="navs-pills-top-messages"
                              aria-selected="false">
                              Supplier3
                            </button>
                          </li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                            <table id="example2" style="width:100%" class="table table-striped table-bordered mt-4 pt-4">
                                <thead class="bg-primary" >
                                  <tr>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Material Name</th>
                                      <th  scope="col" style="color:white;font-size:medium;text-align:center">Brand</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Quantity</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Unit</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <tr class="bg-white">
                                      <td style="color:black">Supplier 1 Material</td>
                                      <td style="color:black">Tata Steel</td>
                                      <td style="color:black">100</td>
                                      <td style="color:black;text-align:center">Unit</td>
                                      <td style="color:black;text-align:center">
                                          <div class="dropdown">
                                              <button type="button" class="btn rounded-pill btn-outline-primary" class="dropdown-toggle hide-arrow p-1" data-bs-toggle="dropdown">
                                                <i class="mdi mdi-trash-can-outline me-1"></i>   Delete
                                              </button>

                                          </div>
                                      </td>
                                  </tr>

                              </tbody>
                          </table>
                          </div>
                          <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                            <table id="example1" style="width:100%" class="table table-striped table-bordered mt-4 pt-4">
                                <thead class="bg-primary" >
                                  <tr>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Material Name</th>
                                      <th  scope="col" style="color:white;font-size:medium;text-align:center">Brand</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Quantity</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Unit</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <tr class="bg-white">
                                      <td style="color:black">Supplier 2 Material</td>
                                      <td style="color:black">Tata Steel</td>
                                      <td style="color:black">100</td>
                                      <td style="color:black;text-align:center">Unit</td>
                                      <td style="color:black;text-align:center">
                                          <div class="dropdown">
                                              <button type="button" class="btn rounded-pill btn-outline-primary" class="dropdown-toggle hide-arrow p-1" data-bs-toggle="dropdown">
                                                <i class="mdi mdi-trash-can-outline me-1"></i>   Delete
                                              </button>

                                          </div>
                                      </td>
                                  </tr>

                              </tbody>
                          </table>
                          </div>
                          <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                            <table id="example3" style="width:100%" class="table table-striped table-bordered mt-4 pt-4">
                                <thead class="bg-primary" >
                                  <tr>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Material Name</th>
                                      <th  scope="col" style="color:white;font-size:medium;text-align:center">Brand</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Quantity</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Unit</th>
                                      <th scope="col" style="color:white;font-size:medium;text-align:center">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <tr class="bg-white">
                                      <td style="color:black">Supplier 3 Material</td>
                                      <td style="color:black">Tata Steel</td>
                                      <td style="color:black">100</td>
                                      <td style="color:black;text-align:center">Unit</td>
                                      <td style="color:black;text-align:center">
                                          <div class="dropdown">
                                              <button type="button" class="btn rounded-pill btn-outline-primary" class="dropdown-toggle hide-arrow p-1" data-bs-toggle="dropdown">
                                                <i class="mdi mdi-trash-can-outline me-1"></i>   Delete
                                              </button>

                                          </div>
                                      </td>
                                  </tr>

                              </tbody>
                          </table>

                          </div>
                        </div>
                      </div>
                    </div>
                 </div>




            </div>
        </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.delete-material').click(function() {
            var materialId = $(this).data('material-id');
            var $rowToDelete = $(this).closest('tr');

            $.ajax({
                url: '/delete-material/' + materialId,
                type: 'get',
                success: function(response) {
                    console.log('Material deleted successfully');
                    $rowToDelete.remove();
                },
                error: function(xhr, status, error) {
                    console.error('Error deleting material:', error);
                }
            });
        });
    });

    $(document).on('click', '.add-more-button', function() {
        var newRow = `<tr class="material-row">
            <td>
                <input type="text" name="material_name[]" class="form-control" placeholder="Material Name" required>
            </td>
            <!-- Other input fields for material details -->
            <td>
                <button type="button" class="btn btn-danger close-button">Delete</button>
            </td>
        </tr>`;
        $('#material-table tbody').append(newRow);
    });

    $(document).on('click', '.close-button', function() {
        $(this).closest('tr').remove();
    });

    var currentDate = new Date();
    var formattedDate = currentDate.toISOString().slice(0, 10);
    document.getElementById("allocation-date").textContent = formattedDate;
</script>
<script>
    function showImagePreview(button) {
        var imageSrc = button.getAttribute('data-image-src');
        var modalVehicleImage = document.getElementById('modalVehicleImage');
        modalVehicleImage.src = imageSrc;
        var imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
        imageModal.show();
    }
</script>
