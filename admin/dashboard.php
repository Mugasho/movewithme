<?php
/**
 * Created by PhpStorm.
 * User: Lincoln
 * Date: 11/8/2017
 * Time: 12:14 PM
 */

require_once '../includes/db-connect.php';
require_once '../includes/functions.php';
sec_session_start();
$page="Dashboard";
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<?php require_once '../components/header.php' ?>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns"
      class="vertical-layout vertical-menu 2-columns  fixed-navbar">

<?php require_once '../components/navbar.php' ?>
<?php require_once '../components/menu.php' ?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Statistics -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-cyan bg-darken-2 media-left media-middle">
                                    <i class="icon-plane font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-cyan white media-body">
                                    <h5>Destinations</h5>
                                    <h5 class="text-bold-400"><?php echo countRows($mysqli,'bills')?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-deep-orange bg-darken-2 media-left media-middle">
                                    <i class="icon-users font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-deep-orange white media-body">
                                    <h5>Groups</h5>
                                    <h5 class="text-bold-400"><?php echo countRows($mysqli,'users')?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-teal bg-darken-2 media-left media-middle">
                                    <i class="icon-calendar font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-teal white media-body">
                                    <h5>Schedules</h5>
                                    <h5 class="text-bold-400"><?php echo countRows($mysqli,'shipment')?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-pink bg-darken-2 media-left media-middle">
                                    <i class="icon-banknote font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-pink white media-body">
                                    <h5>Promotions</h5>
                                    <h5 class="text-bold-400">50% off</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics -->
            <!--project Total Earning, visit & post-->
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="earning-chart position-relative">
                                <div class="chart-title position-absolute mt-2 ml-2">
                                    <h1 class="display-4">$9865</h1>
                                    <span class="text-muted">Total money saved</span>
                                </div>
                                <canvas id="earning-chart" class="height-450 block"></canvas>
                                <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
                                    <a href="#" class="btn bg-cyan mr-1 white">Statistics <i
                                                class="icon-stats-bars"></i></a> <span class="text-muted">for the <a
                                                href="#" class="primary darken-2">last year.</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <canvas id="posts-visits" class="height-400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/project Total Earning, visit & post-->
            <!-- projects table with monthly chart -->
            <div class="row">

            </div>
            <!--/ projects table with monthly chart -->
            <div class="row match-height">

            </div>

        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php require_once '../components/footer.php';?>
<?php require_once '../components/scripts.php';?>
</body>
</html>
