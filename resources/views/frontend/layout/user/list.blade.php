@extends('frontend.master')
@section('content')
    <main class="page-content">

        <div class="row">
            <div class="col-xl-12">
                <div class="card-header py-3 bg-transparent">
                    <div class="d-sm-flex align-items-center">
                        <h1 class="mb-2 mb-sm-0"><a href="{{route('user.list')}}"><span style="color:black;"> User List</span></a></h1>
                        <div class="ms-auto">
                            <button type="button" class="btn btn-secondary" onclick="history.back()"><i class="bi bi-arrow-left-square">Back</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (count($users) > 0 AND isset($users) )
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Unique No.</th>
                            <th>DoB</th>
                            <th>Gender</th>
                            <th>father name</th>
                            <th>Mother name</th>
                            <th>Address</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $data)
                            <tr id="user_ids{{$data->id}}">
                                
                                <td>{{strtoupper($data->name)}}</td>
                                <td>{{$data->unique_no}}</td>
                                <td>{{$data->dob}}</td>
                                <td>@if ($data->gender == 1) Male
                                    @elseif ($data->gender == 2 ) Female
                                    @else Other
                                    @endif
                                </td>
                                <td>{{$data->father_name}}</td>
                                <td>{{$data->mother_name}}</td>
                                <td>{{$data->present_address}}</td>
                                <td>
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        {{-- <button class="print_div">Download</button> --}}
                                        <button type="button" class="btn btn-primary btn-sm" title="{{__('app.Download')}}" data-bs-toggle="modal" data-bs-target="#downloadModal{{$data->id}}">Download</button>
                                        <button type="button" class="btn btn-danger btn-sm" title="{{__('app.Delete')}}" data-bs-toggle="modal" data-bs-target="#deleteModal{{$data->id}}"><i class="bi bi-trash-fill">Delete</i></button>

                                    </div>
                                </td>
                                <div class="modal fade" id="DownloadModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:blueviolet;">
                                                <h4 class="modal-title text-white" id="exampleModalLabel">Download User Information</h4>
                                                <button type="button" class="btn-close btn-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body d-flex justify-content-center">
                                                        <h1>User Information Management</h1>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-primary btn-sm">Yes</button>
                                            </div>
                                            

                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="deleteModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:blueviolet;">
                                                <h4 class="modal-title text-white" id="exampleModalLabel">Delete User</h4>
                                                <button type="button" class="btn-close btn-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="get" action="{{route('user.delete',$data->id)}}">
                                                <div class="modal-body">
                                                    <h5>Are You Sure You Want to Delete This User?</h5>
                                                    <h6 style="color: red;">You will lost information about this user.</h6>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-primary btn-sm">Yes</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <center>
            <div class="card">
                <div class="card-body mb-3">
                    <img src="{{asset('images/no_data_found.svg')}}" alt="" width="200px;" height="200px;" srcset="">                                        
                </div>  
                <div class="text-muted">
                    <h5 style="padding: 0px;">No Data Found.</h5>
                </div>

            </div>                            
        </center>
    @endif


    </main>

@endsection