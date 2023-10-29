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
        <div class="row">
            <div class="container">
                <div class="card" style="padding: 10px;">
                    <div class="border border-dark border-2">
                        <div class="card-body" >
                            <center>
                                <div>
                                    <h1 style="margin: 0px; margin-top:10px; padding:0px;">গণপ্রজাতন্ত্রী বাংলাদেশ</h1>                                
                                    <h3 style="margin: 0px; padding:0px;">জন্ম ও মৃত্যু নিবন্ধকের কার্যালয়</h3> 
                                    <h4 style="margin: 0px; padding:0px;">কমালছড়ি ইউনিয়ন পরিষদ</h4>
                                    <h4 style="margin: 0px; padding:0px;">খাগড়াছড়ি সদর, খাগড়াছড়ি </h4>
                                    <h4 style="margin: 0px; padding:0px;"><b> জন্ম সনদ </b></h4>
                                </div>
                            </center>
                            {{-- <div class="d-flex justify-content-center">
                                
                                
                                
                            </div> --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="col-md">নবন্ধনের তারিখঃ</div>
                                        <div class="col-md">{{ now()->format('Y-m-d') }}</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md">সনদ ইস্যুর তারিখঃ</div>
                                        <div class="col-md"></div>
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