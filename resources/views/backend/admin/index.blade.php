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
            <button type="button" class="btn btn-primary btn-sm" style="float:right;" data-toggle="modal" data-target="#modal-NewAdmin">
                <i class="fas fa-plus-circle"> Add New Admin </i>
            </button>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>S/N</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone numbers</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            
                        <td>{{$loop->iteration}}</td>
                            <td>
                                @foreach($users as $user)
                                    @if($admin->user_id == $user->id)
                                    {{$user->firstName}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($users as $user)
                                    @if($admin->user_id == $user->id)
                                    {{$user->middleName}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($users as $user)
                                    @if($admin->user_id == $user->id)
                                    {{$user->lastName}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($users as $user)
                                    @if($admin->user_id == $user->id)
                                        {{$user->email}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$admin->phone}}</td>

                            <td>
                                @foreach($users as $user)
                                    @if($admin->user_id == $user->id)
                                        {{$user->role}}
                                    @endif
                                @endforeach
                            </td>
                           
                            <td>
                                <center>
                                    <a href="{{ route('admin.edit', $admin->id)}}">
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-edit">Edit</i></button>
                                    </a>
                                    
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete{{$admin->id}}"><i class="fas fa-trash-alt"> Delete </i></button>
                                </center>
                            </td>
                        </tr>
                    <!-- delete modal -->
                    <div class="modal fade" id="modal-delete{{$admin->id}}">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h4 class="modal-title">Deleting {{$admin->name}} admin </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete <b> {{$admin->firstName}} admin </b> permanently? </p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <form action="{{ route('admin.destroy', $admin->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Yes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>

    <!-- create new User modal -->
    <div class="modal fade" id="modal-NewAdmin">
                <form role="form" method="post" action="{{ route('admin.store') }}" id="">
                    @csrf
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title">Add new admin</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="assetNameId">First Name</label>
                                            <input type="text" class="form-control" id="assetNameId" placeholder="Enter Admin Name" name="firstName">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="assetNameId">Last Name</label>
                                            <input type="text" class="form-control" id="assetNameId" placeholder="Enter Admin Name" name="lastName">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="AssetSerialId">Phone Number</label>
                                            <input type="number" class="form-control" id="AssetSerialId" placeholder="Enter admin number" name="phone">
                                        </div>

                                       </div>

                                    <div class="col-6">
                                    <div class="form-group">
                                            <label for="assetNameId">Middle Name</label>
                                            <input type="text" class="form-control" id="assetNameId" placeholder="Enter Admin Name" name="middleName">
                                        </div>

                                        <div class="form-group">
                                            <label for="AssetSerialId">Email</label>
                                            <input type="email" class="form-control" id="AssetSerialId" placeholder="Enter admin email" name="email">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="AssetSerialId">Role</label>
                                            <input type="text" class="form-control" id="AssetSerialId" placeholder="Enter role email" name="role" value="Admin" readonly >
                                        </div>
                                            
                                </div>    
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add user</button>
                            </div>
                            
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </form>
                <!-- /.modal-dialog -->
            </div>
@endsection

