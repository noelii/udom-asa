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
            <h3 class="card-title">Individual Target users</h3>
            <button type="button" class="btn btn-primary btn-sm" style="float:right;" data-toggle="modal" data-target="#modal-NewIndividual">
                <i class="fas fa-plus-circle"> Add New Individual Target </i>
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
                        <th>Description</th>
                        <th>Office Location</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($individuals as $individual)
                        <tr>
                            
                        <td>{{$loop->iteration}}</td>
                            <td>
                                @foreach($users as $user)
                                    @if($individual->user_id == $user->id)
                                    {{$user->firstName}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($users as $user)
                                    @if($individual->user_id == $user->id)
                                    {{$user->middleName}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($users as $user)
                                    @if($individual->user_id == $user->id)
                                    {{$user->lastName}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($users as $user)
                                    @if($individual->user_id == $user->id)
                                        {{$user->email}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$individual->phone}}</td>
                            <td>{{$individual->target_desc}}</td>
                            <td>{{$individual->office_location}}</td>

                            <td>
                                @foreach($users as $user)
                                    @if($individual->user_id == $user->id)
                                        {{$user->role}}
                                    @endif
                                @endforeach
                            </td>
                           
                            <td>
                                <center>
                                    <a href="{{ route('individual.edit', $individual->id)}}">
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></button>
                                    </a>
                                    
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete{{$individual->id}}"><i class="fas fa-trash-alt">  </i></button>
                                </center>
                            </td>
                        </tr>
                    <!-- delete modal -->
                    <div class="modal fade" id="modal-delete{{$individual->id}}">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h4 class="modal-title">Deleting {{$individual->firstName}} Target </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete <b> {{$individual->firstName}} Target </b> permanently? </p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <form action="{{ route('individual.destroy', $individual->id)}}" method="post">
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
    <div class="modal fade" id="modal-NewIndividual">
                <form role="form" method="post" action="{{ route('individual.store') }}" id="">
                    @csrf
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title">Add new Individual Target</h4>
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

                                        <div class="form-group">
                                            <label for="AssetSerialId">Office Location</label>
                                            <input type="text" class="form-control" id="AssetSerialId" placeholder="Enter Office Location" name="office_location">
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
                                            <label for="AssetSerialId">Target Description</label>
                                            <textarea class="form-control" placeholder="Enter description" name="target_desc"></textarea>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="AssetSerialId">Role</label>
                                            <input type="text" class="form-control" id="AssetSerialId" placeholder="Enter role email" name="role" value="Individual Target" readonly >
                                        </div>

                                        

                                            
                                </div>    
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add New Target</button>
                            </div>
                            
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </form>
                <!-- /.modal-dialog -->
            </div>
@endsection

