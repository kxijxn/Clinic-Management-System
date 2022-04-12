<?php
require "session_authentication.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treatment Record</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    
</head>
<body>
<?php
require 'Dr_header.php';
?>
<?php
    require 'connection/connection.php';
    $id = $_GET['id']; 
    $doctorid=$_SESSION['DocID'];
    $sql="SELECT * FROM tbl_appointment AS appointment INNER JOIN tbl_account ON appointment.Acc_ID=tbl_account.Acc_ID WHERE DocID=$doctorid and appointment.Acc_ID=$id ";
    $records =mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($records);
?>
<div id="main">
    <div class="row row-cols-1 g-4 mx-5">
        <div class="col"></div>
        <div class="col-12">
            <div class="card shadow bg-white rounded-3">
            
                <div class="card-body m-2">
                    <div class="col-1">
                        <a href="Dr_treat_rec.php"><button type="button" class="btn btn-outline-primary"><i class="bi bi-box-arrow-left"></i></button></a>
                        
                    </div>
                        <div class="col-5">
                            <br>
                            <h2 class="card-title" >Treatment Record-</h5>
                            <?php
                                echo '<h3 style="color:blue;"> '.$row['Name'].'</h3>';
                            ?>
                            <br>
                        </div>
                    

                    <div>
                        <script>
                            $(document).ready(function(){
                                $('#patient-record').DataTable({
                                    dom: 'lBfrtip', 
                                    pagingType: 'full'
                                })
                            })
                        </script>

                        <table id="patient-record" class="display table table-striped" style="width: 90%;">
                            <thead>
                                
                                
                                <tr>
                                    <th style="text-align: right;">AppointmentID</th>
                                    <th style="text-align: right;">Time</th>
                                    <th style="text-align: right;">Date</th>
                                    <th style="text-align: right;" >View</th>
                                    <th style="text-align: right;">Edit</th>
                                </tr>
                                
                            </thead>

                            <tbody>
                                <?php
                                    $sql01="SELECT * FROM tbl_appointment AS appointment INNER JOIN tbl_account ON appointment.Acc_ID=tbl_account.Acc_ID WHERE DocID=$doctorid and appointment.Acc_ID=$id";
                                    $records02=mysqli_query($conn,$sql01);
                                    $num=0;
                                    while($row =mysqli_fetch_array($records02))
                                    {
                                        echo "<tr>";
                                        echo "<td style='text-align:right;' >".$row['AppID']."</td>";
                                        echo "<td style='text-align:right;'>".$row['App_slot']."</td>";
                                        echo "<td style='text-align:right;'>".$row['App_date']."</td>";
                                        echo "<td style='text-align: right;' >
                                        <button  id='".$row['AppID']."' class='btn btn-dark view_data'>View</button>
                                        </td>"; 
                                        echo
                                        "<td style='text-align: right;' >
                                        <button  id='".$row['AppID']."' class='btn btn-dark edit_data'>Edit</button>
                                        </td>"; 
                                    }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewinfo" tabindex="-1" aria-labelledby="modal-title"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollabl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLiveLabel">Treatment Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="view_detail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editinfo" tabindex="-1" aria-labelledby="modal-title"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollabl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLiveLabel">Treatment Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form method="post" id="insert_form">
            <label>Notes:</label><br>
            <textarea form="insert_form" name="notes" id="notes" cols="50" rows="4" class="form-control"></textarea>
            <br>
            <input type="hidden" name="appid" id="appid" />
            <input type="submit" name="insert" id="insert" value="Save" class="btn btn-success float-end" />  
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<script>
    $(document).ready(function(){
        
        $(document).on('click','.view_data',function(){
            var aid=$(this).attr('id');
            if(aid!=''){
                $.ajax({
                    url:"Dr_fetch_view.php",
                    method:'POST',
                    data:{tdata01:aid},
                    success: function(data){
                    $("#view_detail").html(data);
                    $('#viewinfo').modal('show');
                }
                });
            }
        })   
            
               

        $(document).on('click','.edit_data',function(){
            var aid=$(this).attr('id');
            $.ajax({
                url:"Dr_fetch_edit.php",
                method:'POST',
                data:{aid:aid},
                dataType:"json",
                success: function(data){
                    $("#notes").val(data.Notes);
                    $("#appid").val(data.AppID);
                    $("#insert").val("Update");
                    $('#editinfo').modal('show');
                }
            });
            
        });
        
        $('#insert_form').on("submit",function(event){
            event.preventDefault();
            if($('#notes').val()==""){
                alert("Notes is required")
            }
            else{
                $.ajax({
                    url:"Dr_update_trec.php",
                    method:"POST",
                    data:$('#insert_form').serialize(),
                    success:function(data){
                        $('#editinfo').modal('hide');  
                        alert("Record updated Successfully");
                    }
                    
                })
            }
        })
    
    })
</script>


</body>
</html>

