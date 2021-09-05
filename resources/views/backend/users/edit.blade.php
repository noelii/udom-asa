@extends('layouts.master')

@section('content')
<br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12">
                
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit {{$user->firstName}} informations</h3>
                            <a href="{{ route('users.index')}}">
                                <button type="submit" class="btn btn-success" style="float:right">Back to all user</button>
                            </a>
                            
                        </div>

                        
                        <form role="form" method="post" action="{{ route('users.update', $user->id) }}" id="editUserForm">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputfirstName">First Name</label>
                                        <input type="text" name="firstName" class="form-control" id="exampleInputfirstName" value="{{$user->firstName}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputLastName">Last Name</label>
                                        <input type="text" name="lastName" class="form-control" id="exampleInputLastName" value="{{$user->lastName}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Role</label>
                                        
                                        <select class="form-control" name="role_id">
                                            <option value="{{$user->role->id}}" selected> {{$user->role->name}} </option>
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}"> {{$role->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputSecondName">Second Name</label>
                                        <input type="text" name="secondName" class="form-control" id="exampleInputSecondName" value="{{$user->secondName}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$user->email}}">
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <button type="button" class="btn btn-danger">Reset Password</button>
                                <button type="submit" class="btn btn-primary" style="float:right">Save data</button>                                
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
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

        $(document).ready(function () {
            $.validator.setDefaults({
                // submitHandler: function () {
                // alert( "Form successful submitted!" );
                // }
            });
            $('#quickForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    firstName: {
                        required: true
                    },
                    secondName: {
                        required: true
                    },
                    lastName: {
                        required: true
                    },
                    role_id: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
                    },
                    firstName: {
                        required: "Please enter first name",
                    },
                    secondName: {
                        required: "Please enter second name",
                    },
                    lastName: {
                        required: "Please enter last name",
                    },
                    role_id: {
                        required: "Please select a role",
                    },
                        
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                }
            });
        });

    </script>
@endsection