<?php




include "header.php";
$invid1=$_GET['']



?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">Project Report for 9 Watt Solar Street Light with 24hrs Back Up System</div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">

                <div class="row" id="body2">

<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<!-- Menu CSS -->
<link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

                    <?php

                    require("../php/connect.php");


                    $query = "SELECT make  FROM inventories ";
                    

                    if($result=$conn->query($query))
                    {
                    while ($row=$result->fetch_array())
                    {
                     $brand = $row['make'];


                    }
                    }

                    ?>

<div class="row">
    <div class="col-sm-12">
        <div class="white-box p-l-20 p-r-20">
            <h3 class="box-title m-b-0"> </h3>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input1" required disabled="true" placeholder="SOLAR PV MODEL" name="model1">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input4" name="brand1" value = '<?php echo $brand; ?>' required>
                            <option>Brand</option>
                            <option>MNRE Approved</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>


                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input3" name="rating1" required>
                            <option>Rating</option>
                            <option>40Wp</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="number" class="form-control" name="quantity1" id="input2" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input2" style="color: darkgrey;">Quantity</label>
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input5" required disabled="true" placeholder="SOLAR DC LED LIGHT" name="model2">

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input8"name="brand2" required>
                            <option>Brand</option>
                            <option>photonics</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input7"name="rating2" required>
                            <option>Rating</option>
                            <option>9 Watt</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div> <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="number" class="form-control" id="input6" name="quantity2" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input6" style="color: darkgrey;">Quantity</label>
                        </div>
                </div>

            </div>



            <div class="row">
                <div class="col-md-2">
                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input9" required disabled="true" placeholder="BATTERY" name="model3">

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input12" name="brand3" required>
                            <option>Brand</option>
                            <option>Exide</option>
                            <option>Luminious</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input11" name="rating3" required>
                            <option>Rating</option>
                            <option>12V, 17Ah</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>

                <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="number" class="form-control" id="input10" name="quantity3" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input10" style="color: darkgrey;">Quantity</label>
                        </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input13" name="model4" required disabled="true" placeholder="CABLE">

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input16" name="brand4" required>
                            <option>Brand</option>
                            <option>Ploycab</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>


                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input15" name="rating4" required>
                            <option>Rating</option>
                            <option>As Applicable</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>


                <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="number" class="form-control" id="input14" name="quantity4" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input14" style="color: darkgrey;">Quantity</label>
                        </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input17" name="model5" required disabled="true" placeholder="MOUNTING STRUCTURE">

                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input20" name="brand5" required>
                            <option>brand</option>
                            <option>ISI</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input19" name="rating5" required>
                            <option>Rating</option>
                            <option>As Applicable</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>

                <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="number" class="form-control" id="input18" name="quantity5" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input18" style="color: darkgrey;">Quantity</label>
                        </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input21" name="model6" required disabled="true" placeholder="POLE">

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input24" name="brand6" required>
                            <option>Brand</option>
                            <option>Galvanized</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input23" name="rating6" required>
                            <option>Rating</option>
                            <option>4mt(H)</option>
                            <option>2mm(T)</option>
                            <option>65mm(D)</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>


                <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="number" class="form-control" id="input22" name="quantity6" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input22" style="color: darkgrey;">Quantity</label>
                        </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input25" name="price" required  placeholder="Total Price">
                    </div>
                </div>

        </div>
            <a src="Quotation_Smart_Solar-541-250LPD_Solar_Water_Heate_html_a010a7a5.gif" target="_blank" download>Newsletter</a>
    </div>
</div>
</div>

<<<<<<< HEAD

                <button type="submit" class="btn btn-success" id="senddata"> Generate Quotation </button>
=======
                    <input type="hidden" value="<?php echo $invid1?>" name="invid1" id="invid1">
                <button type="submit" class="btn btn-success" id="senddata"> generate Quotation</button>
>>>>>>> 55d0c3ac0b8ea3f81682ef50b38b4f2cb4516bb0
            </div>
        </div>
    </div>
</div>

<br><br><br>

<footer class="footer text-center"> &copy Smart Solar</footer>

<!-- /#page-wrapper -->

<!-- /#wrapper -->
<!-- jQuery -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>