@extends('admin_layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Supplier</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between align-items-center position-relative mb-4">
                <h3>Manage Supplier</h3>
                <!-- Button to trigger modal for creating a new vendor -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#createCustomerModal">
            <i class="fas fa-plus"></i> Create Supplier
        </button>

            </div>
        </div>
    </div>

    <!-- Display success message if it exists -->
      @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <!-- Close button -->
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<table id="example" style="width:100%" class="table table-striped table-bordered mt-4 pt-4">
        <thead class="bg-primary">
            <tr>
                <th scope="col" style="color:white;font-size:medium;text-align:center">Supplier ID</th>
                <th scope="col" style="color:white;font-size:medium;text-align:center">Name</th>
                <th scope="col" style="color:white;font-size:medium;text-align:center">Phone</th>
                <th scope="col" style="color:white;font-size:medium;text-align:center">Email</th>
                <th scope="col" style="color:white;font-size:medium;text-align:center">GST-NO</th>
                <th scope="col" style="color:white;font-size:medium;text-align:center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your vendors here to populate the table -->
            @foreach($vendors as $vendor)
            <tr>
                <td style="color:black">{{ $vendor->vendor_id }}</td>
                <td style="color:black">{{ $vendor->name }}</td>
                <td style="color:black">{{ $vendor->contact }}</td>
                <td style="color:black">{{ $vendor->email }}</td>
                <td style="color:black">{{ $vendor->tax_number }}</td>
                <td style="color:black">
                    <!-- Button to trigger modal for editing a vendor -->
                    <button class="btn btn-primary" data-toggle="modal" data-target="#editVendorModal{{$vendor->id}}">Edit</button>

                    <!-- Form to handle delete action -->
                    <form action="{{ route('vendor.destroy', $vendor->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this vendor?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal for creating a new vendor -->
@include('vendor.create')

<!-- Modals for editing vendors -->
@foreach($vendors as $vendor)
<div class="modal fade" id="editVendorModal{{$vendor->id}}" tabindex="-1" role="dialog" aria-labelledby="editVendorModalLabel{{$vendor->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Include the content of edit.blade.php here -->
            @include('vendor.edit')
        </div>
    </div>
</div>
@endforeach

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
