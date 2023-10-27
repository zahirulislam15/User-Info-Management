<!doctype html>
<?php
    use Illuminate\Support\Carbon;

    $i = 1;
?>
<html lang="en" class=" {{  (Auth::user()->color == 0) ? 'light-theme' : 'dark-theme'  }}">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/favicon.svg')}}" type="image/svg" />
    <link href="{{ asset('schools/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--plugins-->
    <link href="{{asset('schools/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('schools/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('schools/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

    <!-- Toastr style -->
    <link href="{{ asset('assets/admin/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Bootstrap CSS -->
    <link href="{{asset('schools/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('schools/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="{{asset('schools/assets/css/icons.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    {{-- <link rel="{{asset('schools/')}}stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css"> --}}

    <!-- loader-->
    <link href="{{asset('schools/assets/css/pace.min.css')}}" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{asset('schools/assets/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('schools/assets/css/light-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('schools/assets/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{asset('schools/assets/css/header-colors.css')}}" rel="stylesheet" />
    <link href="{{asset('schools/assets/css/style.css')}}" rel="stylesheet" />

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>{{isset($seo_array['seoTitle']) ? $seo_array['seoTitle'] : "Loan Management" }}</title>
    <meta name="description" content="{{isset($seo_array['seoDescription']) ? $seo_array['seoDescription'] : "Loan Management" }}">
    <meta name="keywords" content="{{isset($seo_array['seoKeyword']) ? $seo_array['seoKeyword'] : "Loan Management" }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    @stack('css')

    <style>
        .nav-link{
            display: inline;
        }

        @media print {
            .graph-img img {
                display: inline;
            }
        }

        @media print {
            * {
                -webkit-print-color-adjust: exact;
            }
        }

        /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }

            /* Firefox */
            input[type=number] {
            -moz-appearance: textfield;
            }
    </style>

</head>

<body>
    <!--start wrapper-->
    <?php
        use Illuminate\Support\Facades\Request;
        $date = Carbon::parse(Auth::user()->created_at);
        $now = Carbon::now();

        $diff = $date->diffInDays($now);
        $data = 38 - $diff;
    ?>

    <!-- modal -->

    <div class="wrapper">
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-icon d-xl-none">
                    <i class="bi bi-list"></i>
                </div>
                <div class="top-navbar d-none d-xl-block">
                    <ul class="navbar-nav align-items-center">

                    </ul>
                </div>
                <div class="search-toggle-icon d-xl-none ms-auto">
                    <i class="bi bi-search"></i>
                </div>
                <div class="searchbar d-none d-xl-flex ms-auto">
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3"></div>

                </div>
                {{-- <div class="dropdown bg-primary rounded">
                    <a class="btn btn-sm dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        EN/বাং
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('change.language', 'bn')}}">Bangla</a></li>
                        <li><a class="dropdown-item" href="{{route('change.language', 'en')}}">English</a></li>
                    </ul>
                </div> --}}

                <div class="top-navbar-right ms-3">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                <div class="user-setting d-flex align-items-center" style="padding: 0 10px;">
                                    <div class="user-name d-none d-sm-block mt-50" style="margin-top: 9px;">
                                        <h5 style="background-color:#3361FF;color: #f1f1f1;border-radius: 50%; height: 25px;
                                          width: 25px;text-align: center;">{{substr(Auth::user()->name, 0, 1)}} </h5>
                                    </div>

                                    <div class="">ABC Corporation</div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                    {{-- <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <h6 class="mb-0 dropdown-user-name">{{Auth::user()->loan_name}}</h6>

                                                <small class="mb-0 dropdown-user-designation text-secondary">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li> --}}
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <h6 class="mb-0 dropdown-user-name">{{Auth::user()->name}}</h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">User Profile</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                
                                
                                <li><hr class="dropdown-divider"></li>
                                {{-- <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                                            <div class="setting-text ms-3"><span>{{__('app.Account')}} {{__('app.Status')}}</span></div>
                                        </div>
                                    </a>
                                </li> --}}
                                {{-- <li><hr class="dropdown-divider"></li> --}}
                                {{-- <li>
                                    <a class="dropdown-item" target="_blank" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-bell"></i></div>
                                            <div class="setting-text ms-3"><span>{{__('app.Notice')}}</span></div>
                                        </div>
                                    </a>
                                </li> --}}
                                {{-- <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="btn btn-light" onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">{{ __('app.Logout') }}</a>
                                            <form id="logout-form" action="#" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            <div class="setting-text ms-3">

                                            </div>
                                        </div>
                                    </a>
                                </li> --}}
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper">
        <div class="iconmenu">
            <div class="nav-toggle-box">
                <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
            </div>
            <ul class="nav nav-pills flex-column" style="align-items: center">
                <li class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right" title="dashboard">
                    <a href="#"><button class="nav-link mb-0" data-bs-toggle="pill" data-bs-target="#pills-mdashboards" type="button"> <img src="{{asset('assets/nav-icons/dashboard.svg')}}" alt="dashboard" width="20"> </button></a>
                    <br> dashboard
                </li>
                
                <li class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right" title="Student">
                    <a href="#"><button class="nav-link mb-0" data-bs-toggle="pill" data-bs-target="#pills-student" type="button"><img src="{{asset('assets/nav-icons/staff.svg')}}" alt="student" width="20"></button></a>
                    <br> Staff
                </li>
                <li class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right" title="Exam">
                    <a href="#"><button class="nav-link mb-0" data-bs-toggle="pill" data-bs-target="#pills-exam" type="button"><img src="{{asset('assets/nav-icons/teacher.svg')}}" alt="exam" width="20"></button></a>
                    <br>Client
                </li>
                <li class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right" title="Attendance">
                    <a href="#"><button class="nav-link mb-0" data-bs-toggle="pill" data-bs-target="#pills-attentdance" type="button"><img src="{{asset('assets/nav-icons/attendence.svg')}}" alt="attendence" width="20"></button></a>
                    <br>Attendance
                </li>

                <li class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right" title="Finance">
                    <a href="#"><button class="nav-link mb-0" data-bs-toggle="pill" data-bs-target="#pills-finance" type="button"><img src="{{asset('assets/nav-icons/finance.svg')}}" alt="finance" width="20"></button></a>
                    <br>Finance
                </li>

                <li class="nav-item mb-2 text-center" data-bs-toggle="tooltip" data-bs-placement="right" title="Setting">
                    <a href="#"><button class="nav-link mb-0" data-bs-toggle="pill" data-bs-target="#pills-settings" type="button"><img src="{{asset('assets/nav-icons/settings.svg')}}" alt="settings" width="20"></button></a>
                    <br>Setting
                </li>

                

            </ul>
        </div>
        <div class="textmenu">
            <div class="brand-logo">
                {{-- <h6>{{Auth::user()->school_name}}<br>
                <button class="btn btn-danger btn-sm" style="font-size: 12px;">
                    {{90-$diff}} days left
                </button>
                </h6> --}}
            </div>
            <div class="tab-content">

                {{-- Dashboard --}}
                
                <div class="tab-pane fade <?php if (Request::segment(1) == 'dashboard') {
                    echo 'active show';
                } ?>"id="pills-mdashboards">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">{{__('app.dashboard')}}</h5>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="list-group-item  @if (Auth::user()->color == 1) text-light @else text-dark @endif "><i class="fadeIn animated bi bi-speedometer"></i>{{__('app.dashboard')}}</a>
                            
                        </div>
                    </div>
                </div>

                {{-- Teacher --}}
                <div class="tab-pane fade <?php if (Request::segment(1) == 'school' and Request::segment(2) == 'teacher') {
                                                echo 'active show';
                                            } ?>" id="pills-teacher">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">{{__('app.Teacher')}}</h5>
                            </div>
                        </div>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-street-view"></i>{{__('app.Client')}} {{__('app.Show')}} </a>
                        <a href="#" class="list-group-item"><i class="bi bi-cast"></i>create Client</a>
                        {{-- <a href="{{route('client.create')}}" class="list-group-item"><i class="bi bi-cast"></i>create Client</a> --}}
                    </div>
                </div>

                {{-- Student --}}
                <div class="tab-pane fade <?php if (Request::segment(1) == 'school'
                and Request::segment(2) == 'student'
                and (Request::segment(3) == 'create'
                    or Request::segment(3) == 'edit'
                    or Request::segment(3) == 'studentshow'
                    or (Request::segment(3) == 'student')
                and Request::segment(4) == 'singleShow')
                    or Request::route()->getName() == 'student.find') {
                                                echo 'active show';
                                            } ?>" id="pills-student">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">{{__('app.Student')}}</h5>
                            </div>
                            {{-- <small class="mb-0">{{__('app.dashboard1')}}</small> --}}
                        </div>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-user-circle"></i>Staff Show</a>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-user-plus"></i>Staff Create</a>

                    </div>
                </div>

                {{-- Attendance --}}
                {{-- <div class="tab-pane fade <?php if (Request::segment(1) == 'school'
                and Request::segment(2) == 'student'
                and ((Request::segment(3) == 'attendanceshow')
                    or (Request::segment(3) == 'all' and Request::segment(4) == 'attendanceshow')
                    or (Request::segment(3) == 'attendance' and Request::segment(4) == 'attendanceshow'))) {
                                                echo 'active show';
                                            } ?>" id="pills-attentdance">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">{{__('app.Student')}} {{__('app.Attendance')}}</h5>
                            </div>
                            <small class="mb-0">{{__('app.dashboard1')}}</small>
                        </div>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-user-voice"></i>{{__('app.Student')}} {{__('app.Attendance')}}</a>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-clipboard"></i>{{__('app.All')}} {{__('app.Attendance')}}</a>

                        <a href="javascript::" data-bs-target="#attendance-upload-modal" data-bs-toggle="modal" class="list-group-item">
                            <i class="fas fa-file-upload"></i>{{__('app.upload_attendance')}}
                        </a>

                        <a href="javascript::" data-bs-toggle="modal" data-bs-target="#get_attendance" class="list-group-item">
                            <i class="fas fa-file-upload"></i>{{__('Get Attendance')}}
                        </a>
                    </div>
                </div> --}}

                {{-- Finance --}}
                <div class="tab-pane fade
                    @if ( ((Request::segment(1) == 'loan' or Request::segment(1) == 'receipt' or Request::segment(1) == 'accesories')
                            and ((Request::segment(2) == 'finance' and (Request::segment(3) == 'dashboard' or Request::segment(3) == 'fees' or Request::segment(3) == 'student')) or (Request::segment(2) == 'assign' and Request::segment(3) == 'fees')                                or (Request::segment(2) == 'staff-salary' and Request::segment(3) == 'teacher' and Request::segment(4) == 'add' and Request::segment(5) == 'salary')                                or (Request::segment(2) == 'bankadd' and Request::segment(3) == 'create')                                or (Request::segment(2) == 'student' and Request::segment(3) == 'finance' and (Request::segment(4) == 'expense' or Request::segment(4) == 'fund') and Request::segment(5) == 'create')
                                or Request::segment(2) == 'staff-salary'
                                or Request::segment(2) == 'create'))
                            or Request::route()->getName() == "loan.finance.find.student.fee"
                            or Request::route()->getName() == "loan.teacher.salary.edit"
                            or Request::route()->getName() == "loan.staff.salary.Add"

                        )

                        'active show'
                    @endif " id="pills-finance">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">{{__('app.Finance')}}</h5>
                            </div>
                            {{-- <small class="mb-0">{{__('app.dashboard1')}}</small> --}}
                        </div>
                        {{-- <a href="{{route('student.fees.create')}}" class="list-group-item"><i class="bi bi-cast"></i>Student Fees Create</a>--}}
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-door-open"></i>{{__('app.dashboard')}}</a>
                        {{-- <a href="{{route('loan.finance.fees.index')}}" class="list-group-item"><i class="fadeIn animated bx bx-door-open"></i>{{__('app.loan')}} {{__('app.Fees')}}</a>
                        <a href="{{route('loan.finance.assign.fees.index')}}" class="list-group-item"><i class="fadeIn animated bx bx-door-open"></i>{{__('app.Assign')}} {{__('app.Fees')}}</a>
                        <a href="{{route('loan.finance.students')}}" class="list-group-item"><i class="fadeIn animated bx bx-receipt"></i>{{__('app.Student')}} {{__('app.List')}}</a> --}}
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-credit-card-alt"></i>{{__('app.Stuff')}} {{__('app.Salery')}}</a>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-credit-card-alt"></i>{{__('app.Teacher')}} {{__('app.Salery')}}</a>

                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-credit-card-alt"></i>{{__('app.BankAccount')}}</a>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-credit-card-alt"></i>{{__('app.Expenses')}}</a>

                        <a href="#}" class="list-group-item"><i class="fadeIn animated bx bx-credit-card-alt"></i>{{__('app.Funds')}}</a>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-credit-card-alt"></i>Fund List</a>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-credit-card-alt"></i>Expenses List</a>
                        {{-- <a href="{{route('reciept.create')}}" class="list-group-item"><i class="fadeIn animated bx bx-credit-card-alt"></i>{{__('app.Accessories')}} {{__('app.Receipt')}}</a> --}}

                    </div>
                </div>


                {{-- Staff --}}
                <div class="tab-pane fade @if(Request::segment(1) == 'loan' and Request::segment(2) == 'staff') active show @endif " id="pills-staff">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">{{__('app.Stuff')}} </h5>
                            </div>
                            {{-- <small class="mb-0">{{__('app.dashboard1')}} </small> --}}
                        </div>

                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-male"></i>{{__('app.Stuff')}} {{__('app.List')}} </a>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-male"></i>{{__('app.Stuff')}}  {{__('app.Type')}} </a>
                        {{-- <a href="{{route('loan.staff.create')}}" class="list-group-item"><i class="bi bi-cast"></i>Staff Type create</a>--}}
                        {{-- <a href="{{route('loan.staff.List.create')}}" class="list-group-item"><i class="bi bi-cast"></i>Staff Create</a>--}}

                    </div>
                </div>

                {{-- SMS --}}
                {{-- <div class="tab-pane fade <?php if (Request::segment(1) == 'loan' and Request::segment(2) == 'send' and Request::segment(3) == 'sms' and (Request::segment(4) == 'teacher' or Request::segment(4) == 'student')) {
                                                echo 'active show';
                                            } ?>" id="pills-sms">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">{{__('app.SMS')}} </h5>
                            </div>
                            <small class="mb-0">{{__('app.dashboard1')}} </small>
                        </div>

                        <a href="{{route('send.sms.student')}}" class="list-group-item"><i class="fadeIn animated bx bx-message-rounded-add"></i>{{__('app.SMS')}} {{__('app.Student')}}</a>
                        <a href="{{route('send.sms.teacher')}}" class="list-group-item"><i class="fadeIn animated bx bx-message-rounded-detail"></i>{{__('app.SMS')}} {{__('app.Teacher')}}</a>
                        <a href="{{route('send.sms.employee')}}" class="list-group-item"><i class="fadeIn animated bx bx-message-rounded-add"></i>{{__('app.SMS')}} {{__('app.Employee')}}</a>

                        <a href="{{route('loan.message')}}" class="list-group-item"><i class="fadeIn animated bx bx-message-rounded-add"></i>{{__('app.SMS')}} {{__('app.Purchase')}}</a>

                    </div>
                </div> --}}

                {{-- Exams --}}
                {{-- <div class="tab-pane fade <?php if ((Request::segment(1) == 'loan' and Request::segment(2) == 'term') or ( Request::segment(3) == 'exam' or Request::segment(3) == 'create/question')) {
                                                echo 'active show';
                                            } ?>" id="pills-exam">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">{{__('app.Exam')}}</h5>
                            </div>
                            <small class="mb-0">{{__('app.dashboard1')}}</small>
                        </div>


                        <a href="{{route('term.index')}}" class="list-group-item"><i class="fadeIn animated bi bi-list"></i>{{__('app.Exam')}} {{__('app.Terms')}}</a>
                        <a href="{{route('exam.routine.create')}}" class="list-group-item"><i class="fadeIn animated bx bx-task-x"></i>{{__('app.Exam')}} {{__('app.Routine')}} {{__('app.Create')}}</a>
                        <a href="{{route('create.question.show')}}" class="list-group-item"><i class="fadeIn animated bx bx-task-x"></i>{{__('app.Question')}} {{__('app.Create')}}</a>
                        <a href="{{route('show.question')}}" class="list-group-item"><i class="fadeIn animated bx bx-task-x"></i>{{__('app.Question')}} {{__('app.Show')}}</a>

                    </div>
                </div> --}}

                {{-- Settings --}}
                <div class="tab-pane fade <?php if (Request::segment(1) == 'loan' and Request::segment(2) == 'settings') {
                                                echo 'active show';
                                            } ?>" id="pills-settings">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">{{__('app.Setting')}}</h5>
                            </div>
                            {{-- <small class="mb-0">{{__('app.dashboard1')}}</small> --}}
                        </div>

                        <a href="#" class="list-group-item"><i class="fadeIn animated bx bx-task-x"></i>{{__('app.Class')}}</a>
                        <a href="#" class="list-group-item"><i class="fadeIn animated bi bi-fingerprint"></i>{{__('app.FingerprintDevice')}}</a>
                    </div>
                </div>


            </div>

        </div>
    </aside>


    @yield('content')

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="#" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
        <form method="post" action="{{route('user.update.post.color')}}" enctype="multipart/form-data">
            @csrf
            @if(Auth::user()->color == 0)
            <input type="hidden" name="color" value="1">
            <button class="btn btn-dark btn-switcher shadow-sm" type="submit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="lni lni-night"></i> <br><span>Dark</span> </button>
            @else
            <input type="hidden" name="color" value="0">
            <button class="btn btn-light btn-switcher" type="submit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="background-color: #f1f1f1;color: black;"><i class="lni lni-sun"></i><br><span>light</span></button>
            @endif
        </form>
    </div>
    <!--end switcher-->

    </div>
    <!--end wrapper-->

<!-- Bootstrap bundle JS -->
{{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Bootstrap bundle JS -->
<script src="{{ asset('schools/assets/js/bootstrap.bundle.min.js')}}"></script>

<!--plugins-->
<script src="{{ asset('schools/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('schools/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{ asset('schools/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('schools/assets/js/pace.min.js')}}"></script>
<script src="{{ asset('schools/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('schools/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{ asset('schools/assets/js/table-datatable.js')}}"></script>

{{-- Select2 js --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".js-select").select2({
        placeholder: "Select One",
        allowClear: true,
        width: "100%"
    });
</script>

@stack('js')
<script src="{{ asset('schools/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<!--app-->
<script src="{{ asset('schools/assets/js/app.js')}}"></script>
<script src="{{ asset('schools/assets/js/index5.js')}}"></script>

{{-- @include('sweetalert::alert') --}}

</body>
</html>
