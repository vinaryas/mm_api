@extends('adminlte::page')

@section('title', 'User Management')

@section('content_header')
<h1 class="m-0 text-dark"></h1>
@stop

@section('content')
<form class="card" action="{{ route('user.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <label>NIK</label>
                <input type="text" id="id" name="id" class="form-control form-control-sm" maxlength="9" required>
            </div>
            <div class="col-md-4">
                <label>Name</label>
                <input type="text" id="name" name="name" class="form-control form-control-sm" required>
            </div>
            <div class="col-md-4">
                <label>Password</label>
                <input type="text" id="password" name="password" class="form-control form-control-sm" required>
            </div>
            <div class="col-md-4">
                <label> Email </label>
                <input type="email" id="email" name="email" class="form-control form-control-sm" required>
            </div>
            <div class="col-md-4">
                <label> Region </label>
                <select name="region_id" id="region_id" class="select2 form-control form-control-sm" required>
                    <option> </option>
                    @foreach ($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->region }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label>Role</label>
                <select  name="role_id" id="role_id" class="select2 form-control form-control-sm" required>
                    <option> </option>
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="float-right">
            <button type="submit" class="btn btn-sm btn-info" name="submit" id="submit" >
                <i class="fas fa-save"></i> Submit
            </button>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped" id="table" style="width: 100%;">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Role</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>{{ $detail->roles->displayname }}</td> --}}
                        <td> tester </td>
                        <td><a href="" class="btn btn-info btn-sm"> Detail <i class="fas fa-angle-right"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</form>
@stop

@section('js')
    <script>
        $(document).ready(function () {
            console.log('teast');
            $('#table').DataTable();
        });
    </script>
@stop
