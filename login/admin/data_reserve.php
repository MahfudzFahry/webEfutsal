<!doctype html> 
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Reserve</title>
    <meta name="description" content="Welcome Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

           <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data Booking</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="data_reserve.php">View Booking</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <!-- <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div> -->
    <script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
        <script>
            // firebase config
          var config = {
                  apiKey: "AIzaSyAeaan_GfjVQx9fkmne_zVvV0yKXqcGomc",
                    authDomain: "e-futsal.firebaseapp.com",
                    databaseURL: "https://e-futsal.firebaseio.com",
                    projectId: "e-futsal",
                    storageBucket: "",
                    messagingSenderId: "654663681183",
                    appId: "1:654663681183:web:23e2962b4fd1eab9"
              };
            firebase.initializeApp(config);
    </script>
            </header>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Reserve</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Reserve</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>nama</th>
                                            <th>no telp</th>
                                            <th>no lapangan</th>
                                            <th>tanggal</th>
                                            <th>jam mulai</th>
                                            <th>jam selesai</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                          <script>
                                              var tblUsers = document.getElementById('dataTable3');
                                                var databaseRef = firebase.database().ref('posting/');
                                                var rowIndex = 1;
                                                
                                                databaseRef.once('value', function(snapshot) {
                                                  snapshot.forEach(function(childSnapshot) {
                                                 var childKey = childSnapshot.key;
                                                 var childData = childSnapshot.val();
                                                 
                                                 var row = tblUsers.insertRow(rowIndex);

                                                     
                                                 var fullname = row.insertCell(0);
                                                 var fieldNumber = row.insertCell(1);
                                                 var phone = row.insertCell(2);
                                                 var date = row.insertCell(3);
                                                 var startTime = row.insertCell(4);
                                                 var EndTime = row.insertCell(5);
                                                 var cellButtons = row.insertCell(6);
                                                 var updateButtons = row.insertCell(7);

                                                 cellButtons.innerHTML = "delete";
                                                 cellButtons.setAttribute("fullname", childKey);
                                                 cellButtons.addEventListener("click", deleteButton);

                                                  updateButtons.innerHTML = "update";
                                                  updateButtons.setAttribute("lesson_id", childKey);
                                                  updateButtons.addEventListener("click", buttonUpdate);

                                                 fullname.appendChild(document.createTextNode(childData.fullname));
                                                 fieldNumber.appendChild(document.createTextNode(childData.fieldNumber));
                                                 phone.appendChild(document.createTextNode(childData.phone));
                                                 date.appendChild(document.createTextNode(childData.date));
                                                 startTime.appendChild(document.createTextNode(childData.startTime));
                                                 EndTime.appendChild(document.createTextNode(childData.EndTime));
                                                 
                                                 // contentDR.appendChild(document.createTextNode(childData.contentDR));
                                                 // coverDR.appendChild(document.createTextNode(childData.coverDR));


                                                 
                                                 
                                                 rowIndex = rowIndex + 1;
                                                  });
                                                });
                                                
                                              function deleteButton(e) {
                                                  e.stopPropagation();
                                                  var lessonID = e.target.getAttribute("titleDR");
                                                  var sure = confirm("are you sure to delete this post?");
                                                    if (sure) {
                                                  const userRef = firebase.database().ref().child('posting/' + lessonID).remove();
                                                  alert('row was removed');
                                                  window.location.reload();  
                                                    } 
                                                    
                                              }
                                               function buttonUpdate(e) {
                                                    e.stopPropagation();
                                                    var lessonID = e.target.getAttribute("lesson_id");
                                                    console.log(lessonID);
                                                    window.location.href = 'form_update.html?id='+ lessonID;
                                                     }
                                              </script>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
