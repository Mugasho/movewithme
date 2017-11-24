<?php
/**
 * Created by PhpStorm.
 * User: Lincoln
 * Date: 11/8/2017
 * Time: 10:01 PM
 */
?>

<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item <?php activePage('Dashboard', $page); ?>"><a href="../admin/dashboard.php"><i
                            class="icon-home3"></i><span class="menu-title">Dashboard</span><span
                            class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-plane"></i><span data-i18n="nav.page_layouts.main"
                                                                              class="menu-title">Experiences</span></a>
                <ul class="menu-content">
                    <li class="<?php activePage('Join a Group', $page); ?>"><a href="../admin/addbill.php"
                                                                           class="menu-item">Create Travel Group</a>
                    </li>
                    <li class="<?php activePage('Destinations', $page); ?>"><a href="../admin/experiences.php"
                                                                               data-i18n="nav.page_layouts.2_columns"
                                                                               class="menu-item ">Experiences List</a>
                    </li>
                    <li class="<?php activePage('Bill Status', $page); ?>"><a href="../admin/groupstatus.php"
                                                                              class="menu-item">Group Status</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-users"></i><span data-i18n="nav.project.main"
                                                                                   class="menu-title">Groups</span></a>
                <ul class="menu-content">
                    <li class="<?php activePage('Add Shipment', $page); ?>"><a href="../admin/addshipment.php"
                                                                               class="menu-item">Add Shipment</a>
                    </li>
                    <li class="<?php activePage('Shipments', $page); ?>"><a href="../admin/shipment.php"
                                                                            class="menu-item">Shipment List</a>
                    </li>
                    <li><a href="search-page.html" data-i18n="nav.search_pages.search_page" class="menu-item">Shipment
                            Status</a>
                    </li>
                    <li class="<?php activePage('Container Prefixes', $page); ?>"><a href="../admin/prefixes.php"
                                                                                     class="menu-item">Container
                            Prefixes</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="icon-gear"></i><span data-i18n="nav.components.main"
                                                                             class="menu-title">Setup</span></a>
                <ul class="menu-content">
                    <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Global
                            Settings</a>
                    </li>
                    <li class="<?php activePage('Users', $page); ?>"><a href="../admin/users.php" class="menu-item">User
                            manager</a>
                    </li>
                    <li><a href="component-carousel.html" data-i18n="nav.components.component_carousel"
                           class="menu-item">Email manager</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<!-- / main menu-->
