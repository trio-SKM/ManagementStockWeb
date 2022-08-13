@extends('app')

@section('title','Pricing')

@section('content_page')
<div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4">             
                <h3 class="mb-0 fw-bold">All Clients</h3>             
            </div>
          </div>
        </div>

        <div class="py-4">
        	<div class="card h-100">
                <!-- card header  -->
                <div class="card-header bg-white py-4">
                  <h4 class="mb-0">Teams </h4>
                </div>
                <!-- table  -->
                <div class="table-responsive">
                  <table class="table text-nowrap">
                    <thead class="table-light">
                      <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Last Activity</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-middle">
                          <div class="d-flex align-items-center">
                            <div>
                              <img src="assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md avatar rounded-circle">
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1">Anita Parmar</h5>
                              <p class="mb-0">anita@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">Front End Developer</td>
                        <td class="align-middle">3 May, 2021</td>
                        <td class="align-middle">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xxs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownTeamOne">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <div class="d-flex align-items-center">
                            <div>
                              <img src="assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md avatar rounded-circle">
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1">Jitu Chauhan</h5>
                              <p class="mb-0">jituchauhan@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">Project Director </td>
                        <td class="align-middle">Today</td>
                        <td class="align-middle">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamTwo" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xxs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownTeamTwo">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <div class="d-flex align-items-center">
                            <div>
                              <img src="assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md avatar rounded-circle">
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1">Sandeep Chauhan</h5>
                              <p class="mb-0">sandeepchauhan@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">Full- Stack Developer</td>
                        <td class="align-middle">Yesterday</td>
                        <td class="align-middle">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamThree" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xxs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownTeamThree">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <div class="d-flex align-items-center">

                            <div>
                              <img src="assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md avatar rounded-circle">
                            </div>

                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1">Amanda Darnell</h5>
                              <p class="mb-0">amandadarnell@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">Digital Marketer</td>
                        <td class="align-middle">3 May, 2021</td>
                        <td class="align-middle">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamFour" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xxs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownTeamFour">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>

                        <td class="align-middle">
                          <div class="d-flex align-items-center">

                            <div>
                              <img src="assets/images/avatar/avatar-5.jpg" alt="" class="avatar-md avatar rounded-circle">
                            </div>

                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1">Patricia Murrill</h5>
                              <p class="mb-0">patriciamurrill@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">Account Manager</td>
                        <td class="align-middle">3 May, 2021</td>
                        <td class="align-middle">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamFive" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xxs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownTeamFive">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle border-bottom-0">
                          <div class="d-flex align-items-center">
                            <div>
                              <img src="assets/images/avatar/avatar-6.jpg" alt="" class="avatar-md avatar rounded-circle">
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1">Darshini Nair</h5>
                              <p class="mb-0">darshininair@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle border-bottom-0">Front End Developer</td>
                        <td class="align-middle border-bottom-0">3 May, 2021</td>
                        <td class="align-middle border-bottom-0">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTeamSix" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xxs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownTeamSix">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
@endsection