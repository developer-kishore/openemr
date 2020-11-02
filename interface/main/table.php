
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Visitors</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
      
             
           <div class="container">  
                <h3 align="center">Visitors</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <a href="form.php">
<button type="button" class="btn btn-default">Add Record</button></a>
                          <thead>  
                               <tr>  
                                    <td>Id</td>  
                                    <td>Salutation</td> 
                                    <td>Name</td> 
                                    <td>Gender</td>  
                                    <td>purposeofvisiting</td>  
                                    <td>visitordetails</td>
                                    <td>dob</td>  
                                    <td>visitingdate</td> 
                                    <td>visitingdate</td> 
                                    
                                    
                               </tr>  
                          </thead>  
                          <tbody>
                          
                          </tbody>
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable({
        "ajax":{
          "url":"view.php",
          "dataSrc": ""
        },
        "columns":[
          {"data":"visitorid"},
          {"data":"salutation"},
          {"data":"fname"},
          {"data":"gender"},
          {"data":"purposeofvisiting"},
          {"data":"visitordetails"},
          {"data":"dob"},
          {"data":"visitingdate"},
          {"data":"visitorid" , mRender : function (data){
               return '<a href="formedit.php?visitorid='+ data +'" ><button type="button" class="btn btn-primary">Edit</button></a>'
               '<a href="formedit.php?visitorid='+ data +'" ><button type="button" class="btn btn-primary">Edit</button></a>'      
          }},   
        ],  
       
         
      });  
 });  
 </script>  