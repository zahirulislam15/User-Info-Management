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
                            <button class="btn btn-success" onclick="printDiv()"><i class="fa fa-print" aria-hidden="true">Print</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="card" style="padding: 10px;" id="printDiv">
                        <div class="border border-dark border-2">
                            <div class="card-body" >
                                <center>
                                    <div>
                                        <h1 style="margin: 0px; margin-top:15px; padding:0px;">গণপ্রজাতন্ত্রী বাংলাদেশ</h1>                                
                                        <h3 style="margin: 0px; padding:0px;">জন্ম ও মৃত্যু নিবন্ধকের কার্যালয়</h3> 
                                        <h4 style="margin: 0px; padding:0px;">কমালছড়ি ইউনিয়ন পরিষদ</h4>
                                        <h4 style="margin: 0px; padding:0px;">খাগড়াছড়ি সদর, খাগড়াছড়ি </h4>
                                        <h4 style="margin: 0px; padding:0px;"><b> জন্ম সনদ </b></h4>
                                    </div>
                                </center>
                                {{-- <div class="d-flex justify-content-center">
                                    
                                    
                                    
                                </div> --}}
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-12">
                                        <div class="col-md-6" style="float: left;">
                                            <div class="row">
                                                <div class="col-md-10">নিবন্ধনের তারিখঃ {{ now()->format('d-m-Y') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end" style="float: right;">
                                            <div class="row">
                                                <div class="col-md-10" style="white-space: nowrap">সনদ ইস্যুর তারিখঃ {{ now()->format('d-m-Y') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       জন্ম নিবন্ধন নম্বরঃ {{$data->nid}} <br>
                                       নামঃ {{$data->name}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6" style="float: left;">
                                            <div class="row">
                                                <div class="col-md-10">জন্ম তারিখঃ {{  date('d-m-Y',strtotime($data->dob)) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end" style="float: right;">
                                            <div class="row">
                                                <div class="col-md-10" style="white-space: nowrap">লিঙ্গঃ @if ($data->gender == 1) পুরুষ 
                                                    @elseif ($data->gender == 2) নারী
                                                    @else অন্যান্য 
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-10">জন্ম স্থানঃ {{ $data->present_address }}</div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6" style="float: left;">
                                            <div class="row">
                                                <div class="col-md-10">পিতার নামঃ {{ $data->father_name }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end" style="float: right;">
                                            <div class="row">
                                                <div class="col-md-10" style="white-space: nowrap">জাতীয়তাঃ {{ $data->f_nationality }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6" style="float: left;">
                                            <div class="row">
                                                <div class="col-md-10">মাতার নামঃ {{ $data->mother_name }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end" style="float: right;">
                                            <div class="row">
                                                <div class="col-md-10" style="white-space: nowrap">জাতীয়তাঃ {{ $data->m_nationality }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6" style="float: left;">
                                            <div class="row">
                                                <div class="col-md-10">স্থায়ী ঠিকানাঃ {{ $data->permanent_address }}</div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>


    </main>

@endsection

@push('js')
    <script>
        function printDiv(printDiv) {
            var printContents = document.getElementById('printDiv').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endpush