
<section id="multi-step-form">
<div class="container-fluid">
    <div class="row topBgContent rounded" id="topBgCover">
        <div class="col-md-2 mt-5 text-center py-3">
            <h3 class="font-weight-bolder">6th - 10th</h3>
            <h5>DECEMBER 2021</h5>
            <p class="font-weight-bold text-dark"> <i class="fas fa-map-marker-alt"></i> VENUE: ONLINE</p>
        </div>
        <div class="col-md-6" id="topBg">
                                
        </div>
        <div class="col-md-4 mt-5 py-3 text-center">
            <h1 class="font-weight-bolder">ONLINE</h1>
            <h1 >REGISTRATION</h1>
        </div>
    </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="rowpx-0 pt-4 pb-0 mt-3 mb-3">
                            <div class="col-12 card">
                                <form id="msform">
                                    <!-- progressbar -->

                                    <ul id="progressbar">
                                        <li class="active" id="account"><strong>Account</strong></li>
                                        <li id="personal"><strong>Personal</strong></li>
                                        <li id="confirm"><strong>Finish</strong></li>
                                    </ul>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> <br> <!-- fieldsets -->
                                    <?php include_once('step1.php') ?>
                                    <?php include_once('step2.php') ?>
                                    <?php include_once('step3.php') ?>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>