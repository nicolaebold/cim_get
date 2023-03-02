<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script src="cim.css"></script>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<script>
function show(fisier){
    document.getElementById("q1").style.display="none";
    document.getElementById("q2").style.display="none";
    document.getElementById("q3").style.display="none";
    document.getElementById("q4").style.display="none";
    document.getElementById(fisier).style.display="block";
}

$(document).ready(function () {
    $('#itemi').DataTable();
});
$(document).ready(function () {
    $('#teste').DataTable();
});
</script>

</head>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="cim.css" rel="stylesheet" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="cube-3d.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="https://nicolaebold.ro/wp-content/uploads/2021/07/118360763_3407813942619253_6163064343234281009_n-150x150.jpg" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li onclick="show('q1');" class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li onclick="show('q2');"><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Test generation</span></a></li>
                        <li onclick="show('q3');"><a href="#"><i class="fa fa-bar-bubble" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Item analysis</span></a></li>
                        <li onclick="show('q4');"><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Test solve</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">My account</span></a></li>
                        <!--<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>-->
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">My account</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>JS Krishna</span>
                                                    <p class="text-muted small">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard" id="principal">
                    
                    <!-- inceput div afisare meniu Home -->
                    
                    <div id="q1" style="display:none;">
                        
                        <h1>Dynamic Model for Assessment and Interpretation of Results</h1>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 gutter">

                                <div style="background-color:#ffffff; padding:30px; border:1px solid #c0c0c0; height: 270px; text-align: center">
                                    <img src="https://cdn-icons-png.flaticon.com/128/5388/5388285.png" />
                                    <h2 style="sales col-md-12">Test generation</h2>
                                    <div class="btn-group">
                                        <p>Generate tests for educational assessment</p>
                                    </div>
                                </div>
                            
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12 gutter">

                                <div style="background-color:#ffffff; padding:30px; border:1px solid #c0c0c0; height: 270px; text-align: center">
                                    <img src="https://cdn-icons-png.flaticon.com/128/809/809497.png" />
                                    <h2 style="sales col-md-12">Item analysis</h2>
                                    <div class="btn-group">
                                        <p>Analyse items that were already generated</p>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    
                    <!-- final div afisare meniu Home -->
                    
                    <!-- inceput div afisare meniu Test generation -->
                    
                    <div id="q2" style="display:none;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                                
                                <?php
                                
                                require 'test_g.php';
                                
                                ?>
                        
                            </div>
                        </div>
                    </div>
                    
                    <!-- sfarsit div afisare meniu Test generation -->
                    
                    
                    
                    
                    
                     <div id="q3" style="display:none;">
                    <?php
                    
                    require 'item.php';
                    
                    ?>
                    </div>
                    
                    <!-- inceput div afisare meniu Test solve
                    
                    <div id="q5" style="display:none;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                                
                                <?php
                                
                                //require 'test_gen.php';
                                
                                ?>
                        
                            </div>
                        </div>
                    </div>
                    
                    <!-- sfarsit div afisare meniu Test solve -->
                    
                    <!-- inceput div afisare meniu Test solve -->
                    
                    <div id="q4" style="display:none;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 gutter">
                                
                                <?php
                                
                                require 'test_solve.php';
                                
                                ?>
                        
                            </div>
                        </div>
                    </div>
                    
                    <!-- sfarsit div afisare meniu Test solve -->
                    
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>
