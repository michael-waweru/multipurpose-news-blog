@extends('backend.layouts.base')

@section('body')    
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Welcome to your dashboard {{ Auth::user()->name }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>                        
                    </ol>
                </div>

            </div>
        </div>
    </div> 
    
    <div class="row project-wrapper">
        <div class="col-xxl-8">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Active Projects</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="825">0</span></h4>
                                        <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>5.02 %</span>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Projects this month</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                        <i data-feather="award" class="text-warning"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted mb-3">New Leads</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="7522">0</span></h4>
                                        <span class="badge badge-soft-success fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>3.58 %</span>
                                    </div>
                                    <p class="text-muted mb-0">Leads this month</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                        <i data-feather="clock" class="text-info"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Hours</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="168">0</span>h <span class="counter-value" data-target="40">0</span>m</h4>
                                        <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35 %</span>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Work this month</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->           
        </div><!-- end col -->

        <div class="col-xxl-4">
            <div class="card">
                <div class="card-header border-0">
                    <h4 class="card-title mb-0">Upcoming Schedules</h4>
                </div><!-- end cardheader -->
                <div class="card-body pt-0">
                    <div class="upcoming-scheduled">
                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true">
                    </div>

                    <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Events:</h6>
                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                        <div class="flex-shrink-0 avatar-sm">
                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                09
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Development planning</h6>
                            <p class="text-muted mb-0">iTest Factory </p>
                        </div>
                        <div class="flex-shrink-0">
                            <p class="text-muted mb-0">9:20 <span class="text-uppercase">am</span></p>
                        </div>
                    </div><!-- end -->
                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                        <div class="flex-shrink-0 avatar-sm">
                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                12
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Design new UI and check sales</h6>
                            <p class="text-muted mb-0">Meta4Systems</p>
                        </div>
                        <div class="flex-shrink-0">
                            <p class="text-muted mb-0">11:30 <span class="text-uppercase">am</span></p>
                        </div>
                    </div><!-- end -->
                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                        <div class="flex-shrink-0 avatar-sm">
                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                25
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Weekly catch-up </h6>
                            <p class="text-muted mb-0">Nesta Technologies</p>
                        </div>
                        <div class="flex-shrink-0">
                            <p class="text-muted mb-0">02:00 <span class="text-uppercase">pm</span></p>
                        </div>
                    </div><!-- end -->
                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                        <div class="flex-shrink-0 avatar-sm">
                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                27
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">James Bangs (Client) Meeting</h6>
                            <p class="text-muted mb-0">Nesta Technologies</p>
                        </div>
                        <div class="flex-shrink-0">
                            <p class="text-muted mb-0">03:45 <span class="text-uppercase">pm</span></p>
                        </div>
                    </div><!-- end -->

                    <div class="mt-3 text-center">
                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">View all Events</a>
                    </div>

                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>

    <div class="row">
        <div class="col-xl-7">
            <div class="card card-height-100">
                <div class="card-header d-flex align-items-center">
                    <h4 class="card-title flex-grow-1 mb-0">Active Projects</h4>
                    <div class="flex-shrink-0">
                        <a href="javascript:void(0);" class="btn btn-soft-info btn-sm">Export Report</a>
                    </div>
                </div><!-- end cardheader -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap table-centered align-middle">
                            <thead class="bg-light text-muted">
                                <tr>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Project Lead</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Assignee</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" style="width: 10%;">Due Date</th>
                                </tr><!-- end tr -->
                            </thead><!-- thead -->

                            <tbody>
                                <tr>
                                    <td class="fw-medium">Brand Logo Design</td>
                                    <td>
                                        <img src="{{ asset('assets/backend/images/users/avatar-1.jpg') }}" class="avatar-xxs rounded-circle me-1" alt="">
                                        <a href="javascript: void(0);" class="text-reset">Donald Risher</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-1 text-muted fs-13">53%</div>
                                            <div class="progress progress-sm  flex-grow-1" style="width: 68%;">
                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group flex-nowrap">
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-2.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                    <td class="text-muted">06 Sep 2021</td>
                                </tr><!-- end tr -->
                                <tr>
                                    <td class="fw-medium">Redesign - Landing Page</td>
                                    <td>
                                        <img src="{{ asset('assets/backend/images/users/avatar-2.jpg') }}" class="avatar-xxs rounded-circle me-1" alt="">
                                        <a href="javascript: void(0);" class="text-reset">Prezy William</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 text-muted me-1">0%</div>
                                            <div class="progress progress-sm flex-grow-1" style="width: 68%;">
                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-5.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-6.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-soft-danger">Pending</span></td>
                                    <td class="text-muted">13 Nov 2021</td>
                                </tr><!-- end tr -->
                                <tr>
                                    <td class="fw-medium">Multipurpose Landing Template</td>
                                    <td>
                                        <img src="{{ asset('assets/backend/images/users/avatar-3.jpg') }}" class="avatar-xxs rounded-circle me-1" alt="">
                                        <a href="javascript: void(0);" class="text-reset">Boonie Hoynas</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 text-muted me-1">100%</div>
                                            <div class="progress progress-sm flex-grow-1" style="width: 68%;">
                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-7.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-8.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                    <td class="text-muted">26 Nov 2021</td>
                                </tr><!-- end tr -->
                                <tr>
                                    <td class="fw-medium">Chat Application</td>
                                    <td>
                                        <img src="{{ asset('assets/backend/images/users/avatar-5.jpg') }}" class="avatar-xxs rounded-circle me-1" alt="">
                                        <a href="javascript: void(0);" class="text-reset">Pauline Moll</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 text-muted me-1">64%</div>
                                            <div class="progress flex-grow-1 progress-sm" style="width: 68%;">
                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-2.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-soft-warning">Progress</span></td>
                                    <td class="text-muted">15 Dec 2021</td>
                                </tr><!-- end tr -->
                                <tr>
                                    <td class="fw-medium">Create Wireframe</td>
                                    <td>
                                        <img src="{{ asset('assets/backend/images/users/avatar-6.jpg') }}" class="avatar-xxs rounded-circle me-1" alt="">
                                        <a href="javascript: void(0);" class="text-reset">James Bangs</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 text-muted me-1">77%</div>
                                            <div class="progress flex-grow-1 progress-sm" style="width: 68%;">
                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-6.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                            <div class="avatar-group-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ asset('assets/backend/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-soft-warning">Progress</span></td>
                                    <td class="text-muted">21 Dec 2021</td>
                                </tr><!-- end tr -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>

                    <div class="align-items-center mt-xl-3 mt-4 justify-content-between d-flex">
                        <div class="flex-shrink-0">
                            <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results </div>
                        </div>
                        <ul class="pagination pagination-separated pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a href="#" class="page-link">←</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">→</a>
                            </li>
                        </ul>
                    </div>

                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-5">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1 py-1">My Tasks</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">All Tasks <i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">All Tasks</a>
                                <a class="dropdown-item" href="#">Completed </a>
                                <a class="dropdown-item" href="#">Inprogress</a>
                                <a class="dropdown-item" href="#">Pending</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-borderless table-nowrap table-centered align-middle mb-0">
                            <thead class="table-light text-muted">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Dedline</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Assignee</th>
                                </tr>
                            </thead><!-- end thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask1">
                                            <label class="form-check-label ms-1" for="checkTask1">
                                                Create new Admin Template
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-muted">03 Nov 2021</td>
                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                    <td>
                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Mary Stoner">
                                            <img src="{{ asset('assets/backend/images/users/avatar-2.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                        </a>
                                    </td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask2">
                                            <label class="form-check-label ms-1" for="checkTask2">
                                                Marketing Coordinator
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-muted">17 Nov 2021</td>
                                    <td><span class="badge badge-soft-warning">Progress</span></td>
                                    <td>
                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Den Davis">
                                            <img src="{{ asset('assets/backend/images/users/avatar-7.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                        </a>
                                    </td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask3">
                                            <label class="form-check-label ms-1" for="checkTask3">
                                                Administrative Analyst
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-muted">26 Nov 2021</td>
                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                    <td>
                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Alex Brown">
                                            <img src="{{ asset('assets/backend/images/users/avatar-6.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                        </a>
                                    </td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask4">
                                            <label class="form-check-label ms-1" for="checkTask4">
                                                E-commerce Landing Page
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-muted">10 Dec 2021</td>
                                    <td><span class="badge badge-soft-danger">Pending</span></td>
                                    <td>
                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Prezy Morin">
                                            <img src="{{ asset('assets/backend/images/users/avatar-5.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                        </a>
                                    </td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask5">
                                            <label class="form-check-label ms-1" for="checkTask5">
                                                UI/UX Design
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-muted">22 Dec 2021</td>
                                    <td><span class="badge badge-soft-warning">Progress</span></td>
                                    <td>
                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Stine Nielsen">
                                            <img src="{{ asset('assets/backend/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                        </a>
                                    </td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask6">
                                            <label class="form-check-label ms-1" for="checkTask6">
                                                Projects Design
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-muted">31 Dec 2021</td>
                                    <td><span class="badge badge-soft-danger">Pending</span></td>
                                    <td>
                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh William">
                                            <img src="{{ asset('assets/backend/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                        </a>
                                    </td>
                                </tr><!-- end -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                    <div class="mt-3 text-center">
                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">Load More</a>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>
@endsection