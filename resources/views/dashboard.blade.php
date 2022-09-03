@extends('app')

@section('title','Dashboad')

@section('dashboard')
<div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0  text-white">Projects</h3>
                  </div>
                  <div>
                    <a href="#" class="btn btn-white">Create New Project</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <div class="card ">
                <!-- card body -->
                <div class="card-body">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center
                    mb-3">
                    <div>
                      <h4 class="mb-0">Projects</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                      <i class="bi bi-briefcase fs-4"></i>
                    </div>
                  </div>
                  <!-- project number -->
                  <div>
                    <h1 class="fw-bold">18</h1>
                    <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <div class="card ">
                <!-- card body -->
                <div class="card-body">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center
                    mb-3">
                    <div>
                      <h4 class="mb-0">Active Task</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                      <i class="bi bi-list-task fs-4"></i>
                    </div>
                  </div>
                  <!-- project number -->
                  <div>
                    <h1 class="fw-bold">132</h1>
                    <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <div class="card ">
                <!-- card body -->
                <div class="card-body">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center
                    mb-3">
                    <div>
                      <h4 class="mb-0">Teams</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                      <i class="bi bi-people fs-4"></i>
                    </div>
                  </div>
                  <!-- project number -->
                  <div>
                    <h1 class="fw-bold">12</h1>
                    <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
              <!-- card -->
              <div class="card ">
                <!-- card body -->
                <div class="card-body">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center
                    mb-3">
                    <div>
                      <h4 class="mb-0">Productivity</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-2">
                      <i class="bi bi-bullseye fs-4"></i>
                    </div>
                  </div>
                  <!-- project number -->
                  <div>
                    <h1 class="fw-bold">76%</h1>
                    <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-6">
            <div class="col-md-12 col-12">
              <!-- card  -->
              <div class="card">
                <!-- card header  -->
                <div class="card-header bg-white  py-4">
                  <h4 class="mb-0">Active Projects</h4>
                </div>
                <!-- table  -->
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0">
                    <thead class="table-light">
                      <tr>
                        <th>Project name</th>
                        <th>Hours</th>
                        <th>priority</th>
                        <th>Members</th>
                        <th>Progress</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-middle"><div class="d-flex
                            align-items-center">
                            <div>
                              <div class="icon-shape icon-md border p-4
                                rounded-1">
                                <img src="assets/images/brand/dropbox-logo.svg" alt="">
                              </div>
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox Design
                                  System</a></h5>

                            </div>
                          </div></td>
                        <td class="align-middle">34</td>
                        <td class="align-middle"><span class="badge
                            bg-warning">Medium</span></td>
                        <td class="align-middle"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-2.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-3.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                            </span>
                          </div></td>
                        <td class="align-middle text-dark"><div class="float-start me-3">15%</div>
                          <div class="mt-2">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle"><div class="d-flex
                            align-items-center">
                            <div>
                              <div class="icon-shape icon-md border p-4
                                rounded-1">
                                <img src="assets/images/brand/slack-logo.svg" alt="">
                              </div>
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1"> <a href="#" class="text-inherit">Slack Team UI Design</a></h5>
                            </div>
                          </div></td>
                        <td class="align-middle">47</td>
                        <td class="align-middle"><span class="badge
                            bg-danger">High</span></td>
                        <td class="align-middle"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-4.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-5.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-6.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                            </span>
                          </div></td>
                        <td class="align-middle text-dark"><div class="float-start me-3">35%</div>
                          <div class="mt-2">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar" role="progressbar" style="width:35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle"><div class="d-flex
                            align-items-center">
                            <div>
                              <div class="icon-shape icon-md border p-4
                                rounded-1">
                                <img src="assets/images/brand/github-logo.svg" alt="">
                              </div>
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1"> <a href="#" class="text-inherit">GitHub Satellite</a></h5>
                            </div>
                          </div></td>
                        <td class="align-middle">120</td>
                        <td class="align-middle"><span class="badge bg-info">Low</span></td>
                        <td class="align-middle"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-7.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-8.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-9.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+1</span>
                            </span>
                          </div></td>
                        <td class="align-middle text-dark"><div class="float-start me-3">75%</div>
                          <div class="mt-2">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle"><div class="d-flex
                            align-items-center">
                            <div>
                              <div class="icon-shape icon-md border p-4
                                rounded-1">
                                <img src="assets/images/brand/3dsmax-logo.svg" alt="">
                              </div>
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1"> <a href="#" class="text-inherit">3D Character Modelling</a></h5>
                            </div>
                          </div></td>
                        <td class="align-middle">89</td>
                        <td class="align-middle"><span class="badge
                            bg-warning">Medium</span></td>
                        <td class="align-middle"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-10.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-11.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-12.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                            </span>
                          </div></td>
                        <td class="align-middle text-dark"><div class="float-start me-3">63%</div>
                          <div class="mt-2">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar" role="progressbar" style="width:63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle"><div class="d-flex
                            align-items-center">
                            <div>
                              <div class="icon-shape icon-md border p-4 rounded
                                bg-primary">
                                <img src="assets/images/brand/layers-logo.svg" alt="">
                              </div>
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1"> <a href="#" class="text-inherit">Webapp Design System</a>
                              </h5>
                            </div>
                          </div></td>
                        <td class="align-middle">108</td>
                        <td class="align-middle"><span class="badge
                            bg-success">Track</span></td>
                        <td class="align-middle"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-13.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-14.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-15.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+5</span>
                            </span>
                          </div></td>
                        <td class="align-middle text-dark"><div class="float-start me-3">100%</div>
                          <div class="mt-2">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>

                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle border-bottom-0"><div class="d-flex
                            align-items-center">
                            <div>
                              <div class="icon-shape icon-md border p-4 rounded-1">
                                <img src="assets/images/brand/github-logo.svg" alt="">
                              </div>
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class=" mb-1"> <a href="#" class="text-inherit">Github Event Design</a>
                              </h5>

                            </div>
                          </div></td>
                        <td class="align-middle border-bottom-0">120</td>
                        <td class="align-middle border-bottom-0"><span class="badge bg-info">Low</span></td>
                        <td class="align-middle border-bottom-0"><div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-13.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-14.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="assets/images/avatar/avatar-15.jpg" class="rounded-circle">
                            </span>
                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle
                                fs-6">+1</span>
                            </span>
                          </div></td>
                        <td class="align-middle text-dark border-bottom-0"><div class="float-start me-3">75%</div>
                          <div class="mt-2">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>

                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                <!-- card footer  -->
                <div class="card-footer bg-white text-center">
                  <a href="#" class="link-primary">View All Projects</a>

                </div>
              </div>

            </div>
          </div>

          <div class="row my-6">
            <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
              <!-- card  -->
              <div class="card h-100">
                <!-- card body  -->
                <div class="card-body">
                  <div class="d-flex align-items-center
                    justify-content-between">
                    <div>
                      <h4 class="mb-0">Tasks Performance </h4>
                    </div>
                    <!-- dropdown  -->
                    <div class="dropdown dropstart">
                      <a class="text-muted text-primary-hover" href="#" role="button" id="dropdownTask" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xxs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownTask">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <!-- chart  -->
                  <div class="mb-8">
                    <div id="perfomanceChart" style="min-height: 299.133px;"><div id="apexchartsa8q86ffh" class="apexcharts-canvas apexchartsa8q86ffh apexcharts-theme-light" style="width: 354px; height: 299.133px;"><svg id="SvgjsSvg1056" width="354" height="299.1333312988281" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1058" class="apexcharts-inner apexcharts-graphical" transform="translate(30, 0)"><defs id="SvgjsDefs1057"><clipPath id="gridRectMaska8q86ffh"><rect id="SvgjsRect1060" width="302" height="320" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaska8q86ffh"></clipPath><clipPath id="nonForecastMaska8q86ffh"></clipPath><clipPath id="gridRectMarkerMaska8q86ffh"><rect id="SvgjsRect1061" width="300" height="322" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1062" class="apexcharts-radialbar"><g id="SvgjsG1063"><g id="SvgjsG1064" class="apexcharts-tracks"><g id="SvgjsG1065" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 123.56270641592879 262.9684271897858 A 117.53689024390246 117.53689024390246 0 1 1 123.76340129320306 263.0109031845801" fill="none" fill-opacity="1" stroke="transaprent" stroke-opacity="1" stroke-linecap="round" stroke-width="10.25183536585366" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 123.56270641592879 262.9684271897858 A 117.53689024390246 117.53689024390246 0 1 1 123.76340129320306 263.0109031845801"></path></g><g id="SvgjsG1067" class="apexcharts-radialbar-track apexcharts-track" rel="2"><path id="apexcharts-radialbarTrack-1" d="M 126.7996632462031 247.73974262299544 A 101.96798780487808 101.96798780487808 0 1 1 126.97377413816169 247.77659225982177" fill="none" fill-opacity="1" stroke="transaprent" stroke-opacity="1" stroke-linecap="round" stroke-width="10.25183536585366" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 126.7996632462031 247.73974262299544 A 101.96798780487808 101.96798780487808 0 1 1 126.97377413816169 247.77659225982177"></path></g><g id="SvgjsG1069" class="apexcharts-radialbar-track apexcharts-track" rel="3"><path id="apexcharts-radialbarTrack-2" d="M 130.0366200764774 232.51105805620506 A 86.3990853658537 86.3990853658537 0 1 1 130.18414698312029 232.54228133506342" fill="none" fill-opacity="1" stroke="transaprent" stroke-opacity="1" stroke-linecap="round" stroke-width="10.25183536585366" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 130.0366200764774 232.51105805620506 A 86.3990853658537 86.3990853658537 0 1 1 130.18414698312029 232.54228133506342"></path></g></g><g id="SvgjsG1071"><g id="SvgjsG1073" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1074" d="M 123.56270641592879 262.9684271897858 A 117.53689024390246 117.53689024390246 0 1 1 255.37529218775404 195.80656017537365" fill="none" fill-opacity="0.85" stroke="rgba(40,167,69,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="10.568902439024392" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="282" data:value="100" index="0" j="0" data:pathOrig="M 123.56270641592879 262.9684271897858 A 117.53689024390246 117.53689024390246 0 1 1 255.37529218775404 195.80656017537365"></path></g><g id="SvgjsG1075" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx2" rel="2" data:realIndex="1"><path id="SvgjsPath1076" d="M 126.7996632462031 247.73974262299544 A 101.96798780487808 101.96798780487808 0 1 1 228.35187091388303 85.22223819206005" fill="none" fill-opacity="0.85" stroke="rgba(255,193,7,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="10.568902439024392" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-1" data:angle="220" data:value="78" index="0" j="1" data:pathOrig="M 126.7996632462031 247.73974262299544 A 101.96798780487808 101.96798780487808 0 1 1 228.35187091388303 85.22223819206005"></path></g><g id="SvgjsG1077" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx3" rel="3" data:realIndex="2"><path id="SvgjsPath1078" d="M 130.0366200764774 232.51105805620506 A 86.3990853658537 86.3990853658537 0 1 1 233.75507968520816 137.47060019565814" fill="none" fill-opacity="0.85" stroke="rgba(220,53,69,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="10.568902439024392" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-2" data:angle="251" data:value="89" index="0" j="2" data:pathOrig="M 130.0366200764774 232.51105805620506 A 86.3990853658537 86.3990853658537 0 1 1 233.75507968520816 137.47060019565814"></path></g><circle id="SvgjsCircle1072" r="76.27316768292684" cx="148" cy="148" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1079" x1="0" y1="0" x2="296" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1080" x1="0" y1="0" x2="296" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1059" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                  </div>
                  <!-- icon with content  -->
                  <div class="d-flex align-items-center justify-content-around">
                    <div class="text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon-sm text-success"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                      <h1 class="mt-3  mb-1 fw-bold">76%</h1>
                      <p>Completed</p>
                    </div>
                    <div class="text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up icon-sm text-warning"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                      <h1 class="mt-3  mb-1 fw-bold">32%</h1>
                      <p>In-Progress</p>
                    </div>
                    <div class="text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down icon-sm text-danger"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                      <h1 class="mt-3  mb-1 fw-bold">13%</h1>
                      <p>Behind</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- card  -->
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
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
          </div>
@endsection
