<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>
                <li>
                    <a href="index">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">
                            <?php echo app('translator')->get('translation.Dashboards'); ?>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="tables-datatable">
                        <i data-feather="home"></i>
                        <span data-key="tables-datatable">
                            <?php echo app('translator')->get('translation.Dashboards'); ?>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="form-validation" data-key="t-form-validation">
                        <i data-feather="home"></i>
                        <span data-key="tables-datatable">
                            <?php echo app('translator')->get('translation.Validation'); ?>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH D:\laragon\www\templet\Dason-Laravel_v1.0.0\exhibition\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>