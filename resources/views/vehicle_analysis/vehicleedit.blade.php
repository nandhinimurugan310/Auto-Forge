@extends('admin_layouts.app')

@section('content')


<style>






   .details-table th, .details-table td {
    vertical-align: middle;
}


.img-fluid {
    transition: transform 0.3s ease-in-out;
}
.zoom-out-on-hover:hover {
    transform: scale(2);
}
    /css for popup window/
   .details-table th, .details-table td {
    vertical-align: left;

}
.modal-dialog {
    max-width: 60%;

}
.modal-body {
    max-height: 80vh;
    overflow-y: auto;
}

 /css for popup window/



    .icon-btn {
        font-size: 0.8rem;
        padding: 0.25rem 0.5rem;
        border: none;
        background: none;
        cursor: pointer;
    }



    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #e9ecef;
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5;
    }

    .close {
        padding: 0;
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
    }

    .modal-body {
        padding: 1.5rem;
    }

    .modal-body p {
        margin-bottom: 0.75rem;
    }

    /* Styles for table-like modal content */
    .details-modal .modal-body {
        padding: 0;
    }

    .details-table {
        width: 100%;
        border-collapse: collapse;
        margin: 0;
    }

    .details-table th, .details-table td {
        padding: 8px 12px;
        border: 1px solid #dee2e6;
    }

    .details-table th {
        background-color: #f8f9fa;
        font-weight: bold;
        text-align: left;
        width: 100%;
    }

    .details-table td {
        background-color: #ffffff;
    }
</style>

 <header>
    <nav>
      <ul class="breadcrumb">
          <li><a href="{{route('dashboard')}}">Dashboard /</a></li>
        <li><a href="#">Manage Vehicles</a></li>
 
      </ul>
    </nav>
  </header>

<div class="card p-4" >
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">

            </nav>
            <div class="d-flex justify-content-between align-items-center position-relative mb-4">
                <h3>Manage Vehicles</h3>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


     <table id="example" style="width:100%" class="table table-striped table-bordered mt-4 pt-4">
                          <thead class="bg-primary" >
                            <tr>
                                <th scope="col" style="color:white;font-size:medium;text-align:center">Sno</th>
                            <th scope="col" style="color:white;font-size:medium;text-align:center">Vehicle Numbers</th>
                                <th scope="col" style="color:white;font-size:medium;text-align:center">Customer Name</th>
                                <th scope="col" style="color:white;font-size:medium;text-align:center">Phone</th>
                                <th scope="col" style="color:white;font-size:medium;text-align:center">Work Types</th>
                                <th scope="col" style="color:white;font-size:medium;text-align:center">Status</th>
                                <th scope="col" style="color:white;font-size:medium;text-align:center">Actions</th>

                            </tr>
                          </thead>
                          <tbody>
                          @foreach($vehicleData as $key=>$data)
            <tr>
                <td style="color:black">{{ $key+1 }}</td>
                <td style="color:black" > {{ $data['vehicle_number'] }}
                </td>
                <td style="color:black" >{{ $data['customer_name'] }}</td>
                <td style="color:black">{{ $data['customer_mobile'] }}</td>
                <td style="color:black">{{ $data['work_types'] }}</td>
                <td style="color:black">
                @if($data['status'] == 1)
                    <span class="badge rounded-pill bg-label-primary">Vehicle Analysed</span>
                @elseif($data['status'] == 2)
                    <span class="badge rounded-pill bg-label-info">Materials allocated</span>
                @elseif($data['status'] == 3)
                    <span class="badge rounded-pill bg-label-success">PO Created</span>
                @elseif($data['status'] == 4)
                    <span class="badge rounded-pill bg-label-danger">Store Checked</span>
                @elseif($data['status'] == 5)
                    <span class="badge rounded-pill bg-label-warning">Delivery Ready</span>
                @else
                    <span class="badge rounded-pill bg-label-dark">Status Unknown</span>
                @endif</td>
                <td style="color:black;text-align:center">
                    <div class="dropdown">
                        <button type="button" class="btn rounded-pill btn-outline-primary" class="dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          More  <i class="mdi mdi-dots-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item view-btn" data-toggle="modal" data-target="#detailsModal{{$data['id']}}">
                                <i class="mdi mdi-eye-outline me-1"></i> View
                                </a>
                                <a href="{{ route('vehicle.edit', ['vehicle' => $data['id']]) }}" class="dropdown-item">
                                    <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                </a>
                                                           <button type="button" class="btn btn delete-vehicle" data-vehicle-id="{{ $data['vehicle_id'] }}">
    <i class="fas fa-trash-alt"></i>&nbsp;&nbsp;<span style="text-transform: capitalize;">delete</span>
</button>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
                        </tbody>
                    </table>


</div>

@foreach($vehicleData as $data)
<!-- Details Modal -->
<!-- Details Modal -->
<div class="modal fade details-modal" id="detailsModal{{$data['id']}}" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel{{$data['id']}}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="detailsModalLabel{{$data['id']}}">Vehicle Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered details-table">
                                <tr>
                                    <th>Vehicle Number</th>
                                    <td>{{$data['vehicle_number']}}</td>
                                </tr>
                                <tr>
                                    <th>Customer Name</th>
                                    <td>{{$data['customer_name']}}</td>
                                </tr>
                                <tr>
                                    <th>Customer Mobile</th>
                                    <td>{{$data['customer_mobile']}}</td>
                                </tr>
                                <tr>
                                    <th>Customer Address</th>
                                    <td>{{$data['address']}}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{$data['city']}}</td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td>{{$data['state']}}</td>
                                </tr>
                                <tr>
                                    <th>Referral Name</th>
                                    <td>{{$data['referred_by']}}</td>
                                </tr>
                                <tr>
                                    <th>Referral Number</th>
                                    <td>{{$data['referred_mobile']}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered details-table">
                                <tr>
                                    <th>Size Of Vehicle</th>
                                    <td>{{$data['vehicle_size']}}</td>
                                </tr>
                                <tr>
                                    <th>Vehicle Image</th>
                                    <td>
                                        <img src="{{ asset('storage/app/public/' . $data['vehicle_image']) }}" alt="Vehicle Image" class="img-fluid zoom-out-on-hover">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Work Category</th>
                                    <td>{{$data['work_category']}}</td>
                                </tr>
                                <tr>
                                    <th>Work Types</th>
                                    <td>{{$data['work_types']}}</td>
                                </tr>
                                <tr>
                                    <th>Sector</th>
                                    <td>{{$data['sector']}}</td>
                                </tr>
                                <tr>
                                    <th>Work Description</th>
                                    <td>{{$data['work_description']}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Edit Modal -->

@endforeach

<script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("vehicleTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function validateMobileNumber(input) {
        var value = input.value;
        var errorDiv = input.nextElementSibling;
        if (/^\d{10}$/.test(value)) {
            errorDiv.style.display = "none";
        } else {
            errorDiv.textContent = "Please enter a valid 10-digit mobile number.";
            errorDiv.style.display = "block";
        }
    }
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('.delete-vehicle').click(function () {
            var vehicleId = $(this).data('vehicle-id');
            if (confirm('Are you sure you want to delete this vehicle?')) {
                $.ajax({
                    url: '/delete-vehicle/' + vehicleId,
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        alert(response.message);
                        // Reload the page or update the table as needed
                        location.reload(); // For example, reload the page
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
</script>


@endsection
