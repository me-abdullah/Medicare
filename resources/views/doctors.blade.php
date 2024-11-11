<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>Medicare Hospital</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
   
</head>
<x-app-layout>

    <body>
        <div class="main-wrapper">

            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>
                            <li class="active">
                                <a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="doctors"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                            </li>
                            <li>
                                <a href="patients"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                            </li>
                            <li>
                                <a href="appointments"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                            </li>
                            <li>
                                <a href="schedule"><i class="fa fa-calendar-check-o"></i> <span>Doctor
                                        Schedule</span></a>
                            </li>
                            <li>
                                <a href="departments"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                            </li>
                            <li>
                                <a href="calendar"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                            </li>
                            <li>
                                <a href="location"><i class="fa fa-map-marker"></i> <span>Location</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-4 col-3">
                            <h4 class="page-title">Doctors</h4>
                        </div>
                        <div class="col-sm-8 col-9 text-right m-b-20">
                            <a href="adddoctor" class="btn btn-primary btn-rounded float-right"><i
                                    class="fa fa-plus"></i> Add Doctor</a>
                        </div>
                    </div>
                    <div class="row doctor-grid">
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-03.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
                                <div class="doc-prof">Gynecologist</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-07.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Marie Wells</a></h4>
                                <div class="doc-prof">Psychiatrist</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-04.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Henry Daniels</a></h4>
                                <div class="doc-prof">Cardiologist</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-11.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Mark Hunter</a></h4>
                                <div class="doc-prof">Urologist</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="#"><img alt=""
                                            src="../assets/img/doctor-thumb-12.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Michael Sullivan</a></h4>
                                <div class="doc-prof">Ophthalmologist</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-02.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Linda Barrett</a></h4>
                                <div class="doc-prof">Dentist</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-09.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Ronald Jacobs</a></h4>
                                <div class="doc-prof">Oncologist</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-01.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Albert Sandoval</a></h4>
                                <div class="doc-prof">Neurologist</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-05.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Diana Bailey</a></h4>
                                <div class="doc-prof">General Surgery</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-10.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Shirley Willis</a></h4>
                                <div class="doc-prof">Radiologist</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-08.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Pamela Curtis</a></h4>
                                <div class="doc-prof">Pediatrics</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4  col-lg-3">
                            <div class="profile-widget">
                                <div class="doctor-img">
                                    <a class="avatar" href="profile.html"><img alt=""
                                            src="../assets/img/doctor-thumb-06.jpg"></a>
                                </div>
                                <div class="dropdown profile-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-doctor.html"><i
                                                class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                                <h4 class="doctor-name text-ellipsis"><a href="profile.html">Justin Parker</a></h4>
                                <div class="doc-prof">Physical Therapist</div>
                                <div class="user-country">
                                    <i class="fa fa-map-marker"></i> United States, San Francisco
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="see-all">
                                <a class="see-all-btn" href="javascript:void(0);">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="msg-sidebar notifications msg-noti">
                        <div class="topnav-dropdown-header">
                            <span>Messages</span>
                        </div>
                        <div class="drop-scroll msg-list-scroll" id="msg_list">
                            <ul class="list-box">
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Richard Miles </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item new-message">
                                            <div class="list-left">
                                                <span class="avatar">J</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">John Doe</span>
                                                <span class="message-time">1 Aug</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">T</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Tarah Shropshire </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">M</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Mike Litorus</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">C</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Catherine Manseau </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">D</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Domenic Houston </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">B</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Buster Wigton </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Rolland Webber </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">C</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Claire Mapes </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">M</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Melita Faucher</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">J</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Jeffery Lalor</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">L</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Loren Gatlin</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">T</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Tarah Shropshire</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="chat.html">See all messages</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="delete_doctor" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="../assets/img/sent.png" alt="" width="50" height="46">
                            <h3>Are you sure want to delete this Doctor?</h3>
                            <div class="m-t-20"> <a href="#" class="btn btn-white"
                                    data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-overlay" data-reff=""></div>
        <script src="../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/select2.min.js"></script>
        <script src="../assets/js/moment.min.js"></script>
        <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
        <script src="../assets/js/app.js"></script>
    </body>
</x-app-layout>

</html>