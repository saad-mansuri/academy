<?php
session_start();
include_once("header1.php");
?>

<?php

if(isset($_GET["Id"])){
    $did = $_GET['Id'];
    $cnn = mysqli_connect("localhost","root","","mcaproject");
    $qry = "Delete from category where catid=$did";
    $result = $cnn->query($qry);
}
?>

<div class="col-lg-12">
                            <font color="white">
							<br><br><br><h2 class="page-header">Types of Classes</h2></font></br>
                        </div>

<div align="center">
<a style="color:white" href="catinsert.php">Add Category</a>
</div>

<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <!--<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label>Show <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label></div></div></div><div class="row"><div class="col-sm-12">-->


 <center><a href="catinsert.php">Add Catagory +</a></center> 
										
<?php
$cnn=mysqli_connect("localhost","root","","mcaproject");
$qry="Select * from category";
$result=$cnn->query($qry);

$str="<table class='table table-striped table-bordered table-hover dataTable no-footer' id='dataTables-example' role='grid' aria-describedby='dataTables-example_info'><tr><th>Update</th><th>Delete</th><th>Category Name</th><th>Want to display?</th></tr> ";
while($row=$result->fetch_assoc())
{
	$str.="<tr>
	<td><a href='catupdate.php?Id=".$row['catid']."'><i class='fa fa-pencil'></i></a></td>
	<td><a href='catdisplay.php?Id=".$row['catid']."'><i class='fa fa-times'></a></td>
	<td>".$row["catname"]."</td><td>".$row["catisdisplay"]."</td></tr>";
}
$str.="</table>";

echo $str;
?>
</div>										
										</div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>

<?php
include_once("footer.php");
?>
