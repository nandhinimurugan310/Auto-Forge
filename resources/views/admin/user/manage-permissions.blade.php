@extends('admin_layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Permissions</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between align-items-center position-relative mb-4">
            <h1>Manage Permissions</h1>
            <a href="/permissions" class="btn btn-primary">
                <i class="ti-plus"></i> Set Permissions
            </a>
        </div>
        <div class="table-responsive">
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">{{ __('Role') }}</th>
                        <th scope="col">{{ __('Assigned Permissions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->role }}</td>
                            <td>
                                <ul>
                                    @foreach ($role->permissions as $permission)
                                        <li>{{ $permission->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
