<?php session_start(); if(empty($_SESSION[ 'user_name'])) {echo "inside if"; echo $_SESSION[ 'user_name']; header( 'Location: index.php'); } ?>

<!DOCTYPE html>
<html>

<head>
    <title>Patient Management System</title>
    <link type="text/css" rel=stylesheet href="css/materialize.css" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/waves.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link href="css/hover.css" rel="stylesheet" media="all">

</head>



<!--------------------------------------------------------------------------------->



<body class="blue animated fadeIn">
    <div class="container">
        <div class="row">

            <div class="card animated fadeInDown" id="topbar">
                <nav class="white">
                    <div class="nav-wrapper">
                        <a href="#" class="brand-logo blue-grey-text">KKCH PMS</a>
                        <ul id="nav-mobile" class="right side-nav">
                            <li>
                                <a class="blue-grey-text">
                                    <?php echo $_SESSION[ 'user_name']; ?>
                                </a>
                            </li>
                            <li><a class="blue-grey-text" href="logout.php">logout</a>
                            </li>

                        </ul>
                        <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
                    </div>
                </nav>
            </div>
        </div>
        <!--------------------------------------------------------------------------------->

        <div class="row">
            <div class="col l12 card" id="tabsfor">
                <ul class="tabs">
                    <li class="tab col l3"><a class="grey-text darken-2" id="newpclick" href="#newpatienttab">New Patient</a>
                    </li>
                    <li class="tab col l3"><a class="grey-text darken-2" id="opdclick" href="#opdtab">OPD</a>
                    </li>
                    <li class="tab col l3"><a class="grey-text darken-2" id="ipdclick" href="#ipdtab">IPD</a>
                    </li>
                    <li class="tab col l3"><a class="grey-text darken-2" id="mgmtclick" href="#mgmttab">Management</a>
                    </li>
                </ul>
            </div>
        </div>


        <!--------------------------------------------------------------------------------->
        <div class="row">
            <div id="newpatienttab" class="col l12">
                <div class="row">
                    <div class="col l5 card center waves-effect btn-large animated fadeInUp newpd" id="newopd">
                        <a class="grey-text darken-1" id="pdtext">new opd</a>

                    </div>
                    <div class="col l2">&nbsp;</div>
                    <div class="col l5 card center waves-effect btn-large animated fadeInUp newpd" id="newipd">
                        <a class="grey-text darken-1" id="pdtext">new ipd</a>

                    </div>
                </div>

                <!--------------------------------------------------------------------------------->

                <div class="row">
                    <div class="col l5 card animated fadeInLeft" id="newopddetails">
                        <div class="row">
                            <form class="col l12" id="opdform" action="#" method="post">
                                <div class="row">
                                    <div class="input-field col l12">
                                        <input id="pname" type="text" required>
                                        <label for="pname">Name</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col l6">
                                        <input id="age" type="text" title="Please enter only numbers" pattern="^[0-9]{1,2}$" required>
                                        <label for="age">Age</label>
                                    </div>

                                    <div class="input-field col l6">
                                        <input id="weight" type="text" title="Please enter only numbers" pattern="^[1-9]{1,3}" required>
                                        <label for="weight">Weight</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col offset-l3 l3">
                                        <p>
                                            <input name="sex" type="radio" id="male" value="m" />
                                            <label for="male">Male</label>
                                        </p>
                                        <p>
                                            <input name="sex" type="radio" id="female" value="f" />
                                            <label for="female">Female</label>
                                        </p>
                                    </div>
                                    <div class="col l1">
                                        <p>
                                            <input name="parcha" type="radio" id="emergency" value="e" />
                                            <label for="emergency">Emergency</label>
                                        </p>
                                        <p>
                                            <input name="parcha" type="radio" id="normal" value="n" />
                                            <label for="normal">Normal</label>
                                        </p>
                                    </div>

                                </div>
                                <div class="row">&nbsp;</div>
                                <div class="row">
                                    <button class="col offset-l3 l6 btn waves-effect waves-light" type="button" id="parchaButton" name="action">Submit
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                                <div class="row center" id="OPDresultValue">

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col l5">&nbsp;</div>
                    <div class="col l2">&nbsp;</div>

                    <div class="col l5 card center animated fadeInRight" id="newipddetails">
                        <form class="col l12" id="opdform">
                            <div class="row">
                                <div class="input-field col l12">
                                    <input id="name1" type="text" required>
                                    <label for="name1">Name</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col l12">
                                    <input id="fathername" type="text" required>
                                    <label for="fathername">Guardian's Name</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col l6">
                                    <input id="age1" type="text" title="Please enter only numbers" pattern="^[0-9]{1,2}$" required>
                                    <label for="age1">Age</label>
                                </div>

                                <div class="input-field col l6">
                                    <input id="weight1" type="text" title="Please enter only numbers" pattern="^[1-9]{1,3}$" required>
                                    <label for="weight1">Weight</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col l3">
                                    <p>
                                        <input name="sex1" type="radio" id="male1" value="m" />
                                        <label for="male1">Male</label>
                                    </p>
                                    <p>
                                        <input name="sex1" type="radio" id="female1" value="f" />
                                        <label for="female1">Female</label>
                                    </p>
                                </div>
                                <div class="col l3">&nbsp;</div>
                                <div class="col l6">

                                    <select>
                                        <option value="" disabled selected>Ward</option>
                                        <option value="g">General</option>
                                        <option value="p">Private</option>
                                        <option value="e">Emergency</option>
                                        <option value="n">NICU</option>
                                    </select>
                                </div>



                            </div>
                            <div class="row">
                                <div class="input-field col l4">

                                    <input id="village" type="text" required>
                                    <label for="village">Village</label>

                                </div>
                                <div class="input-field col l4">

                                    <input id="postoffice" type="text" required>
                                    <label for="postoffice">Post Office</label>

                                </div>
                                <div class="input-field col l4">

                                    <input id="district" type="text" required>
                                    <label for="district">District</label>

                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col l12">
                                    <input id="contact" type="text" title="Please enter only numbers" pattern="^[0-9]{10}$" required>
                                    <label for="contact">Contact Number</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col l12">
                                    <input id="openingbalance" type="text" title="Please enter only numbers" pattern="^[0-9]{1,5}$" required>
                                    <label for="openingbalance">Opening Balance</label>
                                </div>

                            </div>

                            <div class="row">
                                <button id="ipdsubmit" class="col offset-l3 l6 btn waves-effect waves-light" type="button" name="action">Submit
                                    <i class="mdi-content-send right"></i>
                                </button>
                            </div>
                            <div class="row center" id="IPDresultValue">

                            </div>

                        </form>
                    </div>

                </div>
            </div>



            <div id="opdtab" class="col l12">
                <div class="row animated fadeInUp">
                    <div class="col l5 card">
                        <div class="row">
                            <div class="col l12 center">GENERAL</div>
                        </div>
                        <div class="row">
                            <div class="col l12">


                                <table class="hoverable">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="status">Status</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody id="generalpatients">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col l2">&nbsp;</div>
                    <div class="col l5 card">
                        <div class="row">
                            <div class="col l12 center">EMERGENCY</div>
                        </div>
                        <div class="row">
                            <div class="col l12">

                                <table class="hoverable">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="status">Status</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody id="emergencypatient">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ipdtab" class="col l12">
                <div class="row">
                    <div class="col l5 card center waves-effect btn-large animated fadeInUp newpd" id="patmgmt">
                        <a class="grey-text darken-1" id="pdtext">Patient Management</a>

                    </div>
                    <div class="col l2">&nbsp;</div>
                    <div class="col l5 card center waves-effect btn-large animated fadeInUp newpd" id="pattable">
                        <a class="grey-text darken-1" id="pdtext">patient table</a>

                    </div>
                </div>
                <div class="row">
                    <div style="display:none;" id="patsearch" class="col l5 card animated fadeInLeft">
                        <div class="row" style="margin-top:2%;">
                            <form class="col l12">
                                <div class="row">
                                    <div class="input-field col l6">
                                        <input id="search" type="text" pattern="^[0-9]{10}$" required>
                                        <label for="search">Enter Patient's Mobile Number</label>
                                    </div>
                                    <div class="col l6">
                                        <button class="col offset-l2 l6 btn waves-effect waves-light" type="submit" name="action">Submit
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mgmttab" class="col l12">
                <div class="row">
                    <div class="col l5 card center waves-effect btn-large animated fadeInUp newpd" id="newopd">
                        <a class="grey-text darken-1" id="pdtext">New Jobs</a>

                    </div>
                    <div class="col l2">&nbsp;</div>
                    <div class="col l5 card center waves-effect btn-large animated fadeInUp newpd" id="newipd">
                        <a class="grey-text darken-1" id="pdtext">Attendance</a>

                    </div>
                </div>
            </div>
        </div>
        <div id="modal1" class="modal">
            <h4>Confirm Delete?</h4>
            <p id="uidno">UID :</p>
            <a id="yesModal" href="#" class="waves-effect btn-flat modal-close">Yes</a>
        </div>
    </div>

    <!--------------------------------------------------------------------------------->
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/waves.js"></script>
    <script type="text/javascript">
        Waves.displayEffect();
    </script>
    <script>
        $(document).ready(function () {
            $('ul.tabs').tabs();
        });
    </script>

    <script>
        $("#opdclick").click(function () {

            $.ajax({
                type: "POST",
                url: "list.php",
                data: "type=n",

                success: function (data) {
                    var json = $.parseJSON(data);
                    $("#generalpatients").html("");
                    var string = "";
                    $(json).each(function (i, val) {
                        var count = 0;
                        string += "<tr>";

                        $.each(val, function (k, v) {


                            if (count == 2) {
                                if (v == "1") {
                                    string += "<td class=\"green-text lighten-2 nd\">DONE</td><td>&nbsp;</td>";
                                    return true;
                                } else if(v=="0") {
                                    string += "<td class=\"yellow-text darken-2 nd\">WAITING</td>";
                                }
                                else if(v=="2"){
                                string += "<td class=\"red-text lighten-3 nd\">QUEUED</td><td>&nbsp;</td>";
                                    return true;
                                }
                                else{
                                string += "<td class=\"red-text nd\">DELETED</td>";
                                }
                            } else {
                                if (count == 0) {
                                    string += "<td class=\"nr\">" + v + "</td>";
                                } else {
                                    string += "<td>" + v + "</td>";
                                }
                            }
                            count++;
                           if(count==3){
                          string += "<td id=\"remove\"><a class=\"modal-trigger\" href=\"#modal1\"><i class=\"mdi-content-clear red-text lighten-2\"></i></a></td>";  }
                        });
                        string += "</tr>";
                    });
                    $("#generalpatients").html(string);
                }
            });

            $.ajax({
                type: "POST",
                url: "list.php",
                data: "type=e",

                success: function (data) {
                    var json = $.parseJSON(data);
                    $("#emergencypatient").html("");
                    var string = "";
                    $(json).each(function (i, val) {
                        var count = 0;
                        string += "<tr>";

                        $.each(val, function (k, v) {


                            if (count == 2) {
                                if (v == "1") {
                                    string += "<td class=\"green-text lighten-2 nd\">DONE</td><td>&nbsp;</td>";
                                    return true;
                                } else if(v=="0") {
                                    string += "<td class=\"yellow-text darken-2 nd\">WAITING</td>";
                                }
                                else if(v=="2"){
                                string += "<td class=\"red-text lighten-3 nd\">QUEUED</td><td>&nbsp;</td>";
                                    return true;
                                }
                                else{
                                string += "<td class=\"red-text nd\">DELETED</td>";
                                }
                            } else {
                                if (count == 0) {
                                    string += "<td class=\"nr\">" + v + "</td>";
                                } else {
                                    string += "<td>" + v + "</td>";
                                }
                            }
                            count++;
                            if(count==3){
                          string += "<td id=\"remove\"><a class=\"modal-trigger\" href=\"#modal1\"><i class=\"mdi-content-clear red-text lighten-2\"></i></a></td>";  }
                        });
                        string += "</tr>";
                    });
                    $("#emergencypatient").html(string);
                }
            });

            $(".hoverable").removeClass().addClass("hoverable");
        });
    </script>
    <script>
        $("tbody").on("click", "#remove", function () {

            var $cell = $(this).closest("tr").find(".nr").text();
            $("#uidno").html("UID : "+$cell);
            $('#modal1').openModal();
            console.log($cell);
            $("#yesModal").click(function (){
                $.ajax({
                    type: "POST",
                    url: "deletequeue.php",
                    data: "pno=" + $cell + "&type=o",
                    async: false,
                    success:function (html) { }
                });
            
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#parchaButton").click(function () {
                var name = $("#pname").val();
                var age = $("#age").val();
                var weight = $("#weight").val();
                var sex = $("input[name=sex]:checked").val();
                var type = $("input[name=parcha]:checked").val();

                $.ajax({
                    type: "POST",
                    url: "newopd.php",
                    data: "pname=" + name + "&age=" + age + "&weight=" + weight + "&sex=" + sex + "&type=" + type,
                    success: function (html) {
                        $("#OPDresultValue").html("Patient number is " + html);
                    }
                });
                return false;
            });

            $("#ipdsubmit").click(function () {
                var name = $("#name1").val();
                var age = $("#age1").val();
                var weight = $("#weight1").val();
                var sex = $("input[name=sex1]:checked").val();
                var ward = $("select").val();
                var address = $("#village").val() + ", " + $("#postoffice").val() + ", " + $("#district").val();
                var contact = $("#contact").val();
                var openingbalance = $("#openingbalance").val();
                var father = $("#fathername").val();

                $.ajax({
                    type: "POST",
                    url: "newipd.php",
                    data: "pname=" + name + "&age=" + age + "&weight=" + weight + "&sex=" + sex + "&ward=" + ward + "&address=" + address + "&contact=" + contact + "&account=" + openingbalance + "&father=" + father,
                    success: function (html) {

                        if (html == 0) {
                            $("#IPDresultValue").html("All beds full");
                        } else {
                            html = html.toUpperCase();
                            $("#IPDresultValue").html("Patient's bed number is " + html);
                        }
                    }
                });
                return false;
            });
        });
    </script>
    <script>
        $("#newopd").click(function () {
            $("#newipddetails").hide();
            $("#newopddetails").fadeToggle("fast", "linear");
        });
        $("#newipd").click(function () {
            $("#newopddetails").hide();
            $("#newipddetails").fadeToggle("fast", "linear");
        });
        $("#patmgmt").click(function () {
            $("#patsearch").toggle();
        });
    </script>


</body>

</html>