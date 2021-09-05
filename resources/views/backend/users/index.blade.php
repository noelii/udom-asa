@extends('layouts.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" id="success_element">
            <p>{{ $message }}</p>
        </div> 
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" >
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All users</h3>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newDepartment">
                <i class="fas fa-plus-circle"> Add new Department </i>
            </button>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Second Name</th>
                        <th>Last Name</th>
                        <th>Roles</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->email}}</td>
                            <td>{{$user->firstName}}</td>
                            <td>{{$user->secondName}}</td>
                            <td>{{$user->lastName}}</td>
                            <td>{{$user->role->name}}</td>
                            <td>
                                <center>
                                    <a href="{{ route('users.edit', $user->id)}}">
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></button>
                                    </a>
                                    
                                    <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
@endsection

@section('pagescripts')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
   
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript">

        $(function () {
            $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            
            });
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });     

        

    </script>
@endsection