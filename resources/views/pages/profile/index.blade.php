@extends('layouts.main')

@section('title')
    Profile
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <a href="{{ route('profile.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Create</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Profile</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Full Name</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">City</th>
                            <th class="text-center">State</th>
                            <th class="text-center">Zip</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Fullname</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">City</th>
                            <th class="text-center">State</th>
                            <th class="text-center">Zip</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($profile as $key => $row)
                        <tr>
                            <td class="text-center">{{ ++$key }}.</td>
                            <td>{{ $row->firstname }} {{ $row->lastname }}</td>
                            <td>{{ $row->username }}</td>
                            <td>{{ $row->city}}</td>
                            <td>{{ $row->state }}</td>
                            <td>{{ $row->zip }}</td>
                            <td>{{ $row->address }}</td>
                            <td class="text-center">
                                <a href="{{ route('profile.edit', [Crypt::encrypt($row->id)]) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Update</a> |
                                <a href="{{ route('profile.destroy', [Crypt::encrypt($row->id)]) }}" class="btn btn-danger btn-sm" data-confirm-delete="true"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
