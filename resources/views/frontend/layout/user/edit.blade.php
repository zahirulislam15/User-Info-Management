@extends('frontend.master')
@section('content')
<main class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="card-header py-3 bg-transparent">
                <div class="d-sm-flex align-items-center">
                    <h1 class="mb-2 mb-sm-0">Edit Information</h1>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-secondary" onclick="history.back()"><i class="bi bi-arrow-left-square">Back</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @isset($user)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded" style="margin-top: 20px;">
{{-- @dd($user) --}}
                            <form class="row g-3" method="post" id="studentData" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Name<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" placeholder="" name="name" value="{{ $user->name }}" required>
                                        </div>
                                        <div class="col-md-6"> 
                                            <label class="form-label">Birth Date<span style="color:red;">*</span></label>
                                            <input type="date" class="form-control" placeholder="" name="dob" value="{{ $user->dob }}">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="row">                                       
                                        <div class="col-md-6">
                                            <label class="form-label">Phone Number<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">NID / Birth Certificate No.</label>
                                            <input type="text" class="form-control" name="nid" value="{{ $user->nid }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Gender</label>
                                            <select class="col-md-12" name="gender" id="">
                                                <option value="1" @if (isset($user)) @if ($user->gender == 1) 'selected' @endif @endif>Male</option>
                                                <option value="2" @if (isset($user)) @if ($user->gender == 2) 'selected' @endif @endif>Female</option>
                                                <option value="3" @if (isset($user)) @if ($user->gender == 3) 'selected' @endif @endif>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label"> Blood Group</label>
                                            <select class="col-md-12" name="blood_group" id="">
                                                <option value="A+" @if (isset($user)) @if ($user->blood_group == 'A+') 'selected' @endif @endif> A+</option>
                                                <option value="A-" @if (isset($user)) @if ($user->blood_group == 'A+-') 'selected' @endif @endif>A-</option>
                                                <option value="B+" @if (isset($user)) @if ($user->blood_group == 'B+') 'selected' @endif @endif>B+</option>
                                                <option value="B-" @if (isset($user)) @if ($user->blood_group == 'B-') 'selected' @endif @endif>B-</option>
                                                <option value="AB+" @if (isset($user)) @if ($user->blood_group == 'AB+') 'selected' @endif @endif>AB+</option>
                                                <option value="AB-" @if (isset($user)) @if ($user->blood_group == 'AB-') 'selected' @endif @endif>AB-</option>
                                                <option value="O+" @if (isset($user)) @if ($user->blood_group == 'O+') 'selected' @endif @endif>O+</option>
                                                <option value="O-" @if (isset($user)) @if ($user->blood_group == 'O-') 'selected' @endif @endif>O-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">                                        
                                        <div class="col-md-6">
                                            <label class="form-label">Parmanent Address<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="permanent_address" value="{{ $user->permanent_address }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="form-label">Present Address<span style="color:red;">&nbsp;&nbsp;&nbsp;</span>
                                                <input type="checkbox" name="same" id="">&nbsp;<span><i>Same As Parmanent Address</i></span></label>
                                            </div>                                            
                                            <input type="text" class="form-control" placeholder="" name="present_address" value="{{ $user->present_address }}">
                                        </div>
                                    </div>
                                </div>                                

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Father Name<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" placeholder="" name="father_name" value="{{ $user->father_name }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label"> Mother Name<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="mother_name" value="{{ $user->mother_name }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded" style="margin-top: 20px;">

                            <form class="row g-3" method="post" id="studentData" action="{{ route('staff.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Name<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" placeholder="" name="name" value="{{ old('name') }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Name(Bangle)<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="name_bn" value="{{ old('name_bn') }}" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6"> 
                                            <label class="form-label">Birth Date</label>
                                            <input type="date" class="form-control" placeholder="" name="dob" value="{{ old('dob') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Phone Number<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Gender</label>
                                            <select class="col-md-12" name="gender" id="">
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label"> Blood Group</label>
                                            <select class="col-md-12" name="blood_group" id="">
                                                <option value="A+" >A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">                                        
                                        <div class="col-md-6">
                                            <label class="form-label">Parmanent Address<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="permanent_address" value="{{ old('permanent_address') }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="form-label">Present Address<span style="color:red;">&nbsp;&nbsp;&nbsp;</span>
                                                <input type="checkbox" name="same" id="">&nbsp;<span><i>Same As Parmanent Address</i></span></label>
                                            </div>                                            
                                            <input type="text" class="form-control" placeholder="" name="present_address" value="{{ old('present_address') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">NID / Birth Certificate No.</label>
                                            <input type="text" class="form-control" name="nid" value="{{ old('nid') }}">
                                        </div>
                                        <div class="col-md-6">                                            
                                            <label class="form-label">Image</label>
                                            <input type="file" class="form-control" placeholder="" name="image" value="{{ old('image') }}">
                                        </div>                                        
                                    </div>
                                </div>                                

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Father Name<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" placeholder="" name="father_name" value="{{ old('father_name') }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label"> Mother Name<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="mother_name" value="{{ old('mother_name') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    @endisset
        
    
    
</main>

@endsection