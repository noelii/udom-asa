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
            <h3 class="card-title">All Predefined Issues</h3>
            <button type="button" class="btn btn-primary btn-sm" style="float:right;" data-toggle="modal" data-target="#modal-NewIssue">
                <i class="fas fa-plus-circle"> Add New Prdefined Issues </i>
            </button>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>S/N</th>
                        <th>Predefined Issue</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pissues as $p_issue)
                        <tr>
                            
                        <td>{{$loop->iteration}}</td>
                            
                            <td>{{$p_issue->p_issue}}</td>

                            <td>
                                <center>
                                    <a href="{{ route('p_issue.edit', $p_issue->id)}}">
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-edit">Edit</i></button>
                                    </a>
                                    
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete{{$p_issue->id}}"><i class="fas fa-trash-alt"> Delete </i></button>
                                </center>
                            </td>
                        </tr>
                    <!-- delete modal -->
                    <div class="modal fade" id="modal-delete{{$p_issue->id}}">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h4 class="modal-title">Deleting {{$p_issue->p_issue}} issue </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete <b> {{$p_issue->p_issue}} issue  </b> permanently? </p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <form action="{{ route('p_issue.destroy', $p_issue->id)}}" method="post">
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

    <!-- create new pre-defined issue modal -->
    <div class="modal fade" id="modal-NewIssue">
                <form role="form" method="post" action="{{ route('p_issue.store') }}" id="">
                    @csrf
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title">Add new pre-defined Issue</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="assetNameId">Pre-defined Issue</label>
                                            <textarea class="form-control" placeholder="Enter Pre-defined Issue.... " name="p_issue" ></textarea>
                                        </div>

                                       </div>  
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add pre-defined issuse</button>
                            </div>
                            
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </form>
                <!-- /.modal-dialog -->
            </div>
@endsection

