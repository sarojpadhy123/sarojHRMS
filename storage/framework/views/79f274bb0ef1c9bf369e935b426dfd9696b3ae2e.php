<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="<?php echo e(url('public/logo', $general_settings->site_logo) ?? 'NO Logo'); ?>">
    <title><?php echo e($general_settings->site_title ?? "NO Title"); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/bootstrap/css/bootstrap.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/bootstrap/css/awesome-bootstrap-checkbox.css')); ?>"
          type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/bootstrap-toggle/css/bootstrap-toggle.min.css')); ?>"
          type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/bootstrap/css/bootstrap-datepicker.min.css')); ?>"
          type="text/css">

    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/jquery-clockpicker/bootstrap-clockpicker.min.css')); ?>"
          type="text/css">
    <!-- Boostrap Tag Inputs-->
    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/Tag_input/tagsinput.css')); ?>" type="text/css">

    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/bootstrap/css/bootstrap-select.min.css')); ?>"
          type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/font-awesome/css/font-awesome.min.css')); ?>"
          type="text/css">
    <!-- Dripicons icon font-->
    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/dripicons/webfont.css')); ?>" type="text/css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/grasp_mobile_progress_circle-1.0.0.min.css')); ?>" type="text/css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet"
          href="<?php echo e(asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')); ?>"
          type="text/css">
    <!-- date range stylesheet-->
    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/daterange/css/daterangepicker.min.css')); ?>"
          type="text/css">
    <!-- table sorter stylesheet-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('public/vendor/datatable/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('public/vendor/datatable/buttons.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('public/vendor/datatable/select.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('public/vendor/datatable/dataTables.checkboxes.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('public/vendor/datatable/datatables.flexheader.boostrap.min.css')); ?>">

    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('public/vendor/select2/dist/css/select2.min.css')); ?>">

    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('public/vendor/RangeSlider/ion.rangeSlider.min.css')); ?>">

    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('public/vendor/datatable/datatable.responsive.boostrap.min.css')); ?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/style.default.css')); ?>" id="theme-stylesheet"
          type="text/css">

    <?php if((request()->is('admin/dashboard*')) || (request()->is('calendar*')) ): ?>
        <?php echo $__env->make('calendarable.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <script type="text/javascript" src="<?php echo e(asset('public/vendor/jquery/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/jquery/jquery-ui.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/jquery/bootstrap-datepicker.min.js')); ?>"></script>

    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/jquery-clockpicker/bootstrap-clockpicker.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/popper.js/umd/popper.min.js')); ?>">
    </script>
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/bootstrap-toggle/js/bootstrap-toggle.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/bootstrap/js/bootstrap-select.min.js')); ?>"></script>

    <script type="text/javascript"
            src="<?php echo e(asset('public/js/grasp_mobile_progress_circle-1.0.0.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('public/vendor/chart.js/Chart.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/jquery-validation/jquery.validate.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/charts-custom.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/front.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/daterange/js/moment.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/daterange/js/knockout-3.4.2.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/daterange/js/daterangepicker.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/tinymce/js/tinymce/tinymce.min.js')); ?>"></script>

    <!-- JS for Boostrap Tag Inputs-->

    <script type="text/javascript" src="<?php echo e(asset('public/vendor/Tag_input/tagsinput.js')); ?>"></script>

    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/RangeSlider/ion.rangeSlider.min.js')); ?>"></script>

    <!-- table sorter js-->
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/datatable/pdfmake.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/datatable/vfs_fonts.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/datatable/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/datatable/dataTables.bootstrap4.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/datatable/dataTables.buttons.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/datatable/buttons.bootstrap4.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/datatable/buttons.colVis.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/datatable/buttons.html5.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/datatable/buttons.print.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/datatable/dataTables.select.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/vendor/datatable/sum().js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/datatable/dataTables.checkboxes.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/datatable/datatable.fixedheader.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/datatable/datatable.responsive.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/select2/dist/js/select2.min.js')); ?>"></script>
    <script type="text/javascript"
            src="<?php echo e(asset('public/vendor/datatable/datatable.responsive.boostrap.min.js')); ?>"></script>

    <?php if((request()->is('admin/dashboard*')) || (request()->is('calendar*')) ): ?>
        <?php echo $__env->make('calendarable.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</head>


<body>
<div id="loader"></div>
<!-- navbar-->
<header class="header">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <a id="toggle-btn" href="#" class="menu-btn"><i class="dripicons-menu"> </i></a>
                <span class="brand-big" id="site_logo_main"><?php if($general_settings->site_logo ?? "no"): ?><img
                            src="<?php echo e(url('public/logo', $general_settings->site_logo ?? "no")); ?>" width="50">&nbsp;
                    &nbsp;<?php endif; ?><h1 class="d-inline"
                                    id="site_title_main"><?php echo e($general_settings->site_title ?? "No title"); ?></h1></span>


                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <li class="nav-item"><a id="btnFullscreen" data-toggle="tooltip"
                                            title="<?php echo e(__('Full Screen')); ?>"><i class="dripicons-expand"></i></a></li>
                    <li class="nav-item">
                        <a rel="nofollow" id="notify-btn" href="#" class="nav-link dropdown-item" data-toggle="tooltip"
                           title="<?php echo e(__('Notifications')); ?>">
                            <i class="dripicons-bell"></i>
                            <?php if(auth()->user()->unreadNotifications->count()): ?>
                                <span class="badge badge-danger">
                                    <?php echo e(auth()->user()->unreadNotifications->count()); ?>

                                </span>
                            <?php endif; ?>
                        </a>
                        <ul class="right-sidebar">
                            <li class="header">
                                <span class="pull-right"><a href="<?php echo e(route('clearAll')); ?>"><?php echo e(__('Clear All')); ?></a></span>
                                <span class="pull-left"><a href="<?php echo e(route('seeAllNoti')); ?>"><?php echo e(__('See All')); ?></a></span>
                            </li>
                            <?php $__currentLoopData = auth()->user()->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a class="unread-notification"
                                       href=<?php echo e($notification->data['link']); ?>><?php echo e($notification->data['data']); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a rel="nofollow" href="#" class="nav-link dropdown-item" data-toggle="tooltip"
                           title="<?php echo e(__('Language')); ?>">
                            <i class="dripicons-web"></i>
                        </a>
                        <ul class="right-sidebar">
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('language.switch',$lang)); ?>"><?php echo e($lang); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>

                <?php if(Auth::user()->role_users_id==1): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('help')); ?>" target="_blank" data-toggle="tooltip"
                           title="<?php echo e(__('Help')); ?>">
                            <i class="dripicons-information"></i>
                        </a>
                    </li>
                <?php endif; ?>

                    <li class="nav-item">
                        <a rel="nofollow" href="#" class="nav-link dropdown-item">
                            <?php if(!empty(auth()->user()->profile_photo)): ?>
                                <img class="profile-photo sm mr-1"
                                     src="<?php echo e(asset('public/uploads/profile_photos/')); ?>/<?php echo e(auth()->user()->profile_photo); ?>">
                            <?php else: ?>
                                <img class="profile-photo sm mr-1"
                                     src="<?php echo e(asset('public/uploads/profile_photos/avatar.jpg')); ?>">
                            <?php endif; ?>
                            <span> <?php echo e(auth()->user()->username); ?></span>
                        </a>
                        <ul class="right-sidebar">
                            <li>
                                <a href="<?php echo e(route('profile')); ?>">
                                    <i class="dripicons-user"></i>
                                    <?php echo e(trans('file.Profile')); ?>

                                </a>
                            </li>
                            <?php if(auth()->user()->role_users_id == 1): ?>
                                <li id="empty_database">
                                    <a href="#">
                                        <i class="dripicons-stack"></i>
                                        <?php echo e(__('Empty Database')); ?>

                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if(auth()->user()->role_users_id == 1): ?>
                                <li id="export_database">
                                    <a href="<?php echo e(route('export_database')); ?>">
                                        <i class="dripicons-cloud-download"></i>
                                        <?php echo e(__('Export Database')); ?>

                                    </a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-link" type="submit"><i
                                                class="dripicons-exit"></i> <?php echo e(trans('file.logout')); ?></button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php echo $__env->make('shared.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>


<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <?php if(auth()->user()->role_users_id ==1): ?>
                    <li class="<?php echo e((request()->is('admin/dashboard*')) ? 'active' : ''); ?>"><a
                                href="<?php echo e(url('/admin/dashboard')); ?>"> <i
                                    class="dripicons-meter"></i><span><?php echo e(trans('file.Dashboard')); ?></span></a>
                    </li>
                <?php else: ?>
                    <li class="<?php echo e((request()->is('employee/dashboard*')) ? 'active' : ''); ?>"><a
                                href="<?php echo e(url('/employee/dashboard')); ?>"> <i
                                    class="dripicons-meter"></i><span><?php echo e(trans('file.Dashboard')); ?></span></a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user')): ?>
                    <li class="has-dropdown <?php if(request()->is('user*')): ?><?php echo e((request()->is('user*')) ? 'active' : ''); ?><?php elseif(request()->is('add-user*')): ?><?php echo e((request()->is('add-user*')) ? 'active' : ''); ?><?php endif; ?>">
                        <?php if(auth()->user()->can('view-user')): ?>
                            <a href="#users" aria-expanded="false" data-toggle="collapse">
                                <i class="dripicons-user"></i>
                                <span><?php echo e(trans('file.User')); ?></span>
                            </a>
                        <?php endif; ?>
                        <ul id="users" class="collapse list-unstyled ">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-user')): ?>
                                <li id="users-menu"><a href="<?php echo e(route('users-list')); ?>"><?php echo e(__('Users List')); ?></a></li>
                            <?php endif; ?>
                            
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-access-user')): ?>
                                <li id="user-roles"><a
                                            href=<?php echo e(route('user-roles')); ?>><?php echo e(__('Assign Role')); ?></a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('last-login-user')): ?>
                                <li id="user-last-login"><a
                                            href="<?php echo e(route('login-info')); ?>"><?php echo e(__('Users Last Login')); ?></a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-details-employee')): ?>
                    <li class="has-dropdown <?php echo e((request()->is('staff*')) ? 'active' : ''); ?>">
                        <a href="#employees" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-user-group"></i><span><?php echo e(trans('file.Employees')); ?></span></a>
                        <ul id="employees" class="collapse list-unstyled ">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-details-employee')): ?>
                                <li id="employee_list"><a href="<?php echo e(route('employees.index')); ?>"><?php echo e(__('Employee Lists')); ?></a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('import-employee')): ?>
                                <li id="user-import"><a href="<?php echo e(route('employees.import')); ?>"><?php echo e(__('Import Employees')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('customize-setting')): ?>
                    <li class="has-dropdown <?php echo e((request()->is('settings*')) ? 'active' : ''); ?>">


                        <?php if(auth()->user()->can('view-role')||auth()->user()->can('view-general-setting')||auth()->user()->can('access-language')||auth()->user()->can('access-variable_type')||auth()->user()->can('access-variable_method')||auth()->user()->can('view-general-setting')): ?>
                            <a href="#Customize_settings" aria-expanded="false" data-toggle="collapse">
                                <i class="dripicons-toggles"></i><span><?php echo e(__('Customize Setting')); ?></span>
                            </a>
                        <?php endif; ?>
                        

                        <ul id="Customize_settings" class="collapse list-unstyled ">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-role')): ?>
                                <li id="roles"><a href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('Roles and Access')); ?></a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-general-setting')): ?>
                                <li id="general_settings"><a
                                            href="<?php echo e(route('general_settings.index')); ?>"><?php echo e(__('General Settings')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-mail-setting')): ?>
                                <li id="mail_setting"><a
                                            href="<?php echo e(route('setting.mail')); ?>"><?php echo e(__('Mail Setting')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access-language')): ?>
                                <li id="language_switch"><a
                                            href="<?php echo e(route('languages.translations.index','English')); ?>"><?php echo e(__('Language Settings')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access-variable_type')): ?>
                                <li id="variable_type"><a
                                            href="<?php echo e(route('variables.index')); ?>"><?php echo e(__('Variable Type')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access-variable_method')): ?>
                                <li id="variable_method"><a
                                            href="<?php echo e(route('variables_method.index')); ?>"><?php echo e(__('Variable Method')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-general-setting')): ?>
                                <li id="ip_setting"><a href="<?php echo e(route('ip_setting.index')); ?>"><?php echo e(__('IP Settings')); ?></a></li>
                            <?php endif; ?>

                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('core_hr')): ?>
                    <li class="has-dropdown <?php echo e((request()->is('core_hr*')) ? 'active' : ''); ?>">

                        <?php if(auth()->user()->can('view-promotion')||auth()->user()->can('view-award') || auth()->user()->can('view-travel')||auth()->user()->can('view-transfer')||auth()->user()->can('view-resignation')||auth()->user()->can('view-complaint')||auth()->user()->can('view-warning')||auth()->user()->can('view-termination')): ?>
                            <a href="#Core_hr" aria-expanded="false" data-toggle="collapse">
                                <i class="dripicons-briefcase"></i><span><?php echo e(__('Core HR')); ?></span>
                            </a>
                        <?php endif; ?>

                        <ul id="Core_hr" class="collapse list-unstyled">

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-promotion')): ?>
                                <li id="promotion"><a
                                            href="<?php echo e(route('promotions.index')); ?>"><?php echo e(trans('file.Promotion')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-award')): ?>
                                <li id="award"><a href="<?php echo e(route('awards.index')); ?>"><?php echo e(trans('file.Award')); ?></a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-travel')): ?>
                                <li id="travel"><a href="<?php echo e(route('travels.index')); ?>"><?php echo e(trans('file.Travel')); ?></a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-transfer')): ?>
                                <li id="transfer"><a href="<?php echo e(route('transfers.index')); ?>"><?php echo e(trans('file.Transfer')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-resignation')): ?>
                                <li id="resignation"><a
                                            href="<?php echo e(route('resignations.index')); ?>"><?php echo e(trans('file.Resignations')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-complaint')): ?>
                                <li id="complaint"><a
                                            href="<?php echo e(route('complaints.index')); ?>"><?php echo e(trans('file.Complaints')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-warning')): ?>
                                <li id="warning"><a href="<?php echo e(route('warnings.index')); ?>"><?php echo e(trans('file.Warnings')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-termination')): ?>
                                <li id="termination"><a
                                            href="<?php echo e(route('terminations.index')); ?>"><?php echo e(trans('file.Terminations')); ?></a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </li>
                <?php endif; ?>


                <li class="has-dropdown <?php echo e((request()->is('organization*')) ? 'active' : ''); ?>"><a href="#Organization"
                                                                                                   aria-expanded="false"
                                                                                                   data-toggle="collapse">
                        <i
                                class="dripicons-view-thumb"></i><span><?php echo e(trans('file.Organization')); ?></span></a>
                    <ul id="Organization" class="collapse list-unstyled ">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-company')): ?>
                            <li id="company"><a href="<?php echo e(route('companies.index')); ?>"><?php echo e(trans('file.Company')); ?></a></li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-department')): ?>
                            <li id="department"><a
                                        href="<?php echo e(route('departments.index')); ?>"><?php echo e(trans('file.Department')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-location')): ?>
                            <li id="location"><a href="<?php echo e(route('locations.index')); ?>"><?php echo e(trans('file.Location')); ?></a></li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-designation')): ?>
                            <li id="designation"><a
                                        href="<?php echo e(route('designations.index')); ?>"><?php echo e(trans('file.Designation')); ?></a>
                            </li>
                        <?php endif; ?>

                        <li id="announcements"><a
                                    href="<?php echo e(route('announcements.index')); ?>"><?php echo e(trans('file.Announcements')); ?></a></li>

                        <li id="company_policy"><a href="<?php echo e(route('policy.index')); ?>"><?php echo e(__('Company Policy')); ?></a>
                        </li>

                    </ul>
                </li>

                
                    <li class="has-dropdown <?php echo e((request()->is('timesheet*')) ? 'active' : ''); ?>"><a href="#Timesheets"
                                                                                                    aria-expanded="false"
                                                                                                    data-toggle="collapse">
                            <i class="dripicons-clock"></i><span><?php echo e(trans('file.Timesheets')); ?></span></a>
                        <ul id="Timesheets" class="collapse list-unstyled ">
                        
                                <li id="attendance"><a
                                            href="<?php echo e(route('attendances.index')); ?>"><?php echo e(trans('file.Attendances')); ?></a>
                                </li>
                                <li id="date_wise_attendance"><a
                                            href="<?php echo e(route('date_wise_attendances.index')); ?>"> <?php echo e(__('Date wise Attendances')); ?></a>
                                </li>


                                <li id="monthly_attendance"><a
                                            href="<?php echo e(route('monthly_attendances.index')); ?>"> <?php echo e(__('Monthly Attendances')); ?></a>
                                </li>
                        

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-attendance')): ?>
                                <li id="update_attendance"><a
                                            href="<?php echo e(route('update_attendances.index')); ?>"> <?php echo e(__('Update Attendances')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('import-attendance')): ?>
                                <li id="import_attendance"><a
                                            href="<?php echo e(route('attendances.import')); ?>"> <?php echo e(__('Import Attendances')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-office_shift')): ?>
                                <li id="office_shift"><a
                                            href="<?php echo e(route('office_shift.index')); ?>"><?php echo e(__('Office Shift')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-holiday')): ?>
                                <li id="holiday"><a href="<?php echo e(route('holidays.index')); ?>"><?php echo e(__('Manage Holiday')); ?></a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-leave')): ?>
                                <li id="leave"><a href="<?php echo e(route('leaves.index')); ?>"><?php echo e(__('Manage Leaves')); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payment-module')): ?>
                    <li class="has-dropdown <?php echo e((request()->is('payroll*')) ? 'active' : ''); ?>">

                        <?php if(auth()->user()->can('view-payslip') || auth()->user()->can('view-paylist')): ?>
                            <a href="#Payroll" aria-expanded="false" data-toggle="collapse">
                                <i class="dripicons-wallet"></i><span><?php echo e(trans('file.Payroll')); ?></span>
                            </a>
                        <?php endif; ?>

                        <ul id="Payroll" class="collapse list-unstyled ">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-payslip')): ?>
                                <li><a href="<?php echo e(route('payroll.index')); ?>"><?php echo e(__('New Payment')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-paylist')): ?>
                                <li><a href="<?php echo e(route('payment_history.index')); ?>"><?php echo e(__('Payment History')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>


                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('performance')): ?>
                        <li class="has-dropdown <?php echo e((request()->is('performance*')) ? 'active' : ''); ?>">
                            <?php if(auth()->user()->can('view-goal-type') || auth()->user()->can('view-goal-tracking') || auth()->user()->can('view-indicator') || auth()->user()->can('view-appraisal')): ?>
                                <a href="#performance" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bar-chart"></i>
                                    <span>Performance</span>
                                </a>
                            <?php endif; ?>
                            <ul id="performance" class="collapse list-unstyled ">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-goal-type')): ?>
                                    <li id="goal-type"><a href="<?php echo e(route('performance.goal-type.index')); ?>"><?php echo e(__('Goal type')); ?></a></li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-goal-tracking')): ?>
                                    <li id="goal-tracking"><a href="<?php echo e(route('performance.goal-tracking.index')); ?>"><?php echo e(__('Goal Tracking')); ?></a></li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-indicator')): ?>
                                    <li id="indicator"><a href="<?php echo e(route('performance.indicator.index')); ?>"><?php echo e(__('Indicator')); ?></a></li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-appraisal')): ?>
                                    <li id="appraisal"><a href="<?php echo e(route('performance.appraisal.index')); ?>"><?php echo e(__('Appraisal')); ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-calendar')): ?>
                    <li class="<?php echo e((request()->is('calendar*')) ? 'active' : ''); ?>"><a
                                href="<?php echo e(route('calendar.index')); ?>"> <i
                                    class="dripicons-calendar"></i><span><?php echo e(__('HR Calendar')); ?></span></a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('hr_report')): ?>
                    <li class="has-dropdown <?php echo e((request()->is('report*')) ? 'active' : ''); ?>"><a href="#HR_Reports"
                                                                                                 aria-expanded="false"
                                                                                                 data-toggle="collapse">
                            <i class="dripicons-document"></i><span><?php echo e(__('HR Reports')); ?></span></a>
                        <ul id="HR_Reports" class="collapse list-unstyled ">

                            

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('report-attendance')): ?>
                                <li id="attendance_report"><a
                                            href="<?php echo e(route('report.attendance')); ?>"><?php echo e(__('Attendance Report')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('report-training')): ?>
                                <li id="training_report"><a
                                            href="<?php echo e(route('report.training')); ?>"><?php echo e(__('Training Report')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('report-project')): ?>
                                <li id="project_report"><a
                                            href="<?php echo e(route('report.project')); ?>"><?php echo e(__('Project Report')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('report-task')): ?>
                                <li id="task_report"><a
                                            href="<?php echo e(route('report.task')); ?>"><?php echo e(__('Task Report')); ?></a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('report-employee')): ?>
                                <li id="employees_report"><a
                                            href="<?php echo e(route('report.employees')); ?>"><?php echo e(__('Employees Report')); ?></a>
                                </li>
                            <?php endif; ?>
                            
                            
                            
                            

                            
                            
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('recruitment')): ?>
                    <li class="has-dropdown <?php echo e((request()->is('recruitment*')) ? 'active' : ''); ?>">

                        <?php if(auth()->user()->can('view-job_post') || auth()->user()->can('view-job_candidate')|| auth()->user()->can('view-job_interview') || auth()->user()->can('view-cms')): ?>
                            <a href="#Recruitment" aria-expanded="false" data-toggle="collapse">
                                <i class="dripicons-user-id"></i><span><?php echo e(trans('file.Recruitment')); ?></span>
                            </a>
                        <?php endif; ?>

                        <ul id="Recruitment" class="collapse list-unstyled ">

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-job_post')): ?>
                                <li id="job_post"><a
                                            href="<?php echo e(route('job_posts.index')); ?>"><?php echo e(__('Job Post')); ?></a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-job_candidate')): ?>
                                <li id="job_candidate"><a
                                            href="<?php echo e(route('job_candidates.index')); ?>"><?php echo e(__('Job Candidates')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-job_interview')): ?>
                                <li id="job_interview"><a
                                            href="<?php echo e(route('job_interviews.index')); ?>"><?php echo e(__('Job Interview')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-cms')): ?>
                                <li id="cms"><a
                                            href="<?php echo e(route('cms.index')); ?>"><?php echo e(__('CMS')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('training_module')): ?>
                    <li class="has-dropdown <?php if(request()->is('training*')): ?><?php echo e((request()->is('training*')) ? 'active' : ''); ?><?php elseif(request()->is('dynamic_variable/training_type*')): ?><?php echo e((request()->is('dynamic_variable/training_type*')) ? 'active' : ''); ?><?php endif; ?>">
                        <?php if(auth()->user()->can('view-training') || auth()->user()->can('access-variable_type')|| auth()->user()->can('access-trainer')): ?>
                            <a href="#Training" aria-expanded="false" data-toggle="collapse"> <i
                                        class="dripicons-trophy"></i><span><?php echo e(trans('file.Training')); ?></span>
                            </a>
                        <?php endif; ?>
                        <ul id="Training" class="collapse list-unstyled ">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-training')): ?>
                                <li id="training_list"><a
                                            href="<?php echo e(route('training_lists.index')); ?>"><?php echo e(__('Training List')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access-variable_type')): ?>
                                <li id="training_type"><a
                                            href="<?php echo e(route('training_type.index')); ?>"><?php echo e(__('Training Type')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-trainer')): ?>
                                <li id="trainers"><a
                                            href="<?php echo e(route('trainers.index')); ?>"><?php echo e(trans('file.Trainers')); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('event-meeting')): ?>
                    <li class="has-dropdown <?php if(request()->is('events*')): ?><?php echo e((request()->is('events*')) ? 'active' : ''); ?><?php elseif(request()->is('meetings*')): ?><?php echo e((request()->is('meetings*')) ? 'active' : ''); ?><?php endif; ?>">

                        <?php if(auth()->user()->can('view-event') || auth()->user()->can('view-meeting')): ?>
                            <a href="#Events_Meetings" aria-expanded="false" data-toggle="collapse"> <i
                                        class="dripicons-to-do"></i><span><?php echo e(trans('file.Events')); ?> & <?php echo e(trans('file.Meetings')); ?></span>
                            </a>
                        <?php endif; ?>
                        <ul id="Events_Meetings" class="collapse list-unstyled ">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-event')): ?>
                                <li id="events"><a
                                            href="<?php echo e(route('events.index')); ?>"><?php echo e(trans('file.Events')); ?></a>
                                </li>
                            <?php endif; ?>
                            
                        </ul>
                        <?php endif; ?>
                    </li>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-management')): ?>
                        <li class="has-dropdown <?php echo e((request()->is('project-management*')) ? 'active' : ''); ?>">
                            <?php if(auth()->user()->can('view-project') || auth()->user()->can('view-task') || auth()->user()->can('client') || auth()->user()->can('view-invoice')): ?>
                                <a href="#Project_Management" aria-expanded="false" data-toggle="collapse">
                                    <i class="dripicons-checklist"></i><span><?php echo e(__('Project Management')); ?></span>
                                </a>
                            <?php endif; ?>
                            <ul id="Project_Management" class="collapse list-unstyled ">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-project')): ?>
                                    <li id="projects"><a
                                                href="<?php echo e(route('projects.index')); ?>"><?php echo e(trans(('file.Projects'))); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-task')): ?>
                                    <li id="tasks"><a
                                                href="<?php echo e(route('tasks.index')); ?>"><?php echo e(trans(('file.Tasks'))); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('client')): ?>
                                    <li id="clients"><a
                                                href="<?php echo e(route('clients.index')); ?>"><?php echo e(trans(('file.Client'))); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-invoice')): ?>
                                    <li id="invoices"><a
                                                href="<?php echo e(route('invoices.index')); ?>"><?php echo e(trans(('file.Invoice'))); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access-variable_type')): ?>
                                    <li id="tax_type"><a
                                                href="<?php echo e(route('tax_type.index')); ?>"><?php echo e(__('Tax Type')); ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                    

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets-and-category')): ?>
                        <li class="has-dropdown <?php if(request()->is('assets*')): ?><?php echo e((request()->is('assets*')) ? 'active' : ''); ?><?php elseif(request()->is('dynamic_variable/assets_category*')): ?><?php echo e((request()->is('dynamic_variable/assets_category*')) ? 'active' : ''); ?><?php endif; ?>">
                            <?php if(auth()->user()->can('category') || auth()->user()->can('assets')): ?>
                                <a href="#assets" aria-expanded="false" data-toggle="collapse"> <i
                                            class="dripicons-box"></i><span><?php echo e(trans(('file.Assets'))); ?></span>
                                </a>
                            <?php endif; ?>
                            <ul id="assets" class="collapse list-unstyled ">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category')): ?>
                                    <li id="assets_category"><a
                                        href="<?php echo e(route('assets_category.index')); ?>"><?php echo e(trans(('file.Category'))); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assets')): ?>
                                    <li id="assets"><a href="<?php echo e(route('assets.index')); ?>"><?php echo e(trans(('file.Assets'))); ?></a></li>
                                <?php endif; ?>

                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('file_module')): ?>
                        <li class="has-dropdown <?php echo e((request()->is('file_manager*')) ? 'active' : ''); ?>">

                            <?php if(auth()->user()->can('view-file_manager') || auth()->user()->can('view-official_documents')): ?>
                                <a href="#file_manager" aria-expanded="false" data-toggle="collapse"> <i
                                            class="dripicons-archive"></i><span><?php echo e(__('File Manager')); ?></span>
                                </a>
                            <?php endif; ?>

                            <ul id="file_manager" class="collapse list-unstyled ">

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-file_manager')): ?>
                                    <li id="files"><a
                                                href="<?php echo e(route('files.index')); ?>"><?php echo e(__('File Manager')); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-official_documents')): ?>
                                    <li id="official_documents"><a
                                                href="<?php echo e(route('official_documents.index')); ?>"><?php echo e(__('Official Documents')); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-file_config')): ?>
                                    <li id="file_config"><a
                                                href="<?php echo e(route('file_config.index')); ?>"><?php echo e(__('File Configuration')); ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<?php
    $general_settings = \App\GeneralSetting::latest()->first();
?>

<div id="content" class="page animate-bottom d-none">
    <?php echo $__env->yieldContent('content'); ?>
    <footer class="main-footer">
        <div class="container-fluid">
            <p>&copy; <?php echo e($general_settings->site_title ?? "no title"); ?> | <?php echo e(__('Developed by')); ?> <a
                        href=<?php echo e($general_settings->footer_link); ?> class="external"><?php echo e($general_settings->footer); ?></a></p>
        </div>
    </footer>
</div>

<script type="text/javascript">
    (function ($) {

        "use strict";

        $('#empty_database').on('click', function () {
            if (confirm('<?php echo e(__('Delete Selection',['key'=>__('Empty Database')])); ?>')) {
                let url = '<?php echo e(route('empty_database')); ?>';
                document.location.href = url;
            } else {

            }
        });


        $('#notify-btn').on('click', function () {
            $.ajax({
                url: '<?php echo e(route('markAsRead')); ?>',
                dataType: "json",
                success: function (result) {
                },
            });
        })

    })(jQuery);
</script>
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/users/shariqq/power-people-hrm/public_html/resources/views/layout/main.blade.php ENDPATH**/ ?>