<?php
/**
 * Created by PhpStorm.
 * User: Lincoln
 * Date: 11/18/2017
 * Time: 1:52 AM
 */

require_once 'includes/db-connect.php';
require_once 'includes/functions.php';
sec_session_start();
$page="Search";
if(isset($_GET['bill'])){
    $bill=$_GET['bill'];
}else{$bill=null;}
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<?php require_once 'components/header_index.php' ?>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns"
      class="vertical-layout vertical-menu 2-columns  fixed-navbar">

<?php require_once 'components/nav_bar_home.php' ?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="content-body"><!-- Search form-->
            <section id="search-website" class="card overflow-hidden">
                <div class="card-header">
                    <h4 class="card-title">Search for Attractions and Destinations</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block pb-0">
                        <fieldset class="form-group position-relative mb-0">
                            <input type="text" class="form-control form-control-lg input-lg" id="txtSearch" value="<?php echo $bill;?>" oninput="searchWebsite(this.value)"  placeholder="Search website">
                            <div class="form-control-position">
                                <i class="icon-microphone2 font-medium-4"></i>
                            </div>
                        </fieldset>
                    </div>
                    <!--Search Navbar-->
                    <div id="search-nav" class="card-block">
                        <ul class="nav nav-inline">
                            <li class="nav-item">
                                <a class="nav-link active" href="search-website.html"><i class="icon-link4"></i> Everything</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="search-images.html"><i class="icon-users2"></i> Groups</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="search-videos.html"><i class="icon-map"></i> Destinations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bed"></i> Accomodation</a>
                            </li>
                            <li class="dropdown nav-item float-xs-right">
                                <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-setting1"></i> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item"><a href="#" class="dropdown-link">Languages</a></li>
                                    <li class="dropdown-item"><a href="#" class="dropdown-link">Search Settings</a></li>
                                    <li class="dropdown-item"><a href="#" class="dropdown-link">History</a></li>
                                    <li class="dropdown-item"><a href="#" class="dropdown-link">Search Help</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/ Search Navbar-->
                    <!--Search Result-->
                    <div id="search-results" class="card-block">
                        <div class="col-lg-8" id="search-list">

                        </div>
                        <div class="col-lg-4">
                            <div class="card border-grey border-lighten-2">
                                <div class="card-block">
                                    <h4 class="card-title">Move With Me</h4>
                                    <h6 class="card-subtitle text-muted">Tours and Travel</h6>
                                </div>
                                <img class="img-fluid" src="uploads/tiger.jpg" alt="logo">
                                <div class="card-block">
                                    <p class="card-text">Get detailed information about travel<a href="#">Wikipedia</a></p>
                                    <ul class="list-group">
                                        <li class="list-group-item"><strong>Website :</strong> <a href="" class="card-link">https://movewithme.com/</a></li>
                                        <li class="list-group-item"><strong>Customer service :</strong>0701 311513</li>
                                        <li class="list-group-item"><strong>Founder :</strong> MOVE WITH ME</li>
                                        <li class="list-group-item"><strong>Founded :</strong> 2016</li>
                                        <li class="list-group-item"><strong>Support:</strong> <a href="mailto:support@shumuklogistics.com">admin@movewithme.com</a></li>
                                    </ul>
                                    <div class="py-1 text-xs-center">
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="icon-facebook3"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="icon-twitter3"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="icon-linkedin3 font-medium-4"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span class="icon-github font-medium-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Search form -->

        </div>
    </div>
</div>
<script >
    function searchWebsite(str) {
    if (str == "") {
    document.getElementById("search-list").innerHTML = "";
    return;
    } else {
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("search-list").innerHTML = this.responseText;
    }
    };

    xmlhttp.open("GET","includes/bill.inc.php?bill="+str,true);
    xmlhttp.send();
    }
    }
</script >
<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php require_once 'components/footer.php';?>
<?php require_once 'components/script_index.php';?>
</body>
</html>
