<!DOCTYPE html>
<html>
<head>
	<title>Show Page</title>
</head>
<body>
    <div style="margin:auto;margin-top:200px;padding:20px;width:30%;text-align:center">
	 <h2>Insert Student Record</h2>
    <span class="help"></span><br>
     <input type="text" placeholder="Enter Your Name" class="name"><br/><br/>
     <input type="text" placeholder="Enter Your RollNo" class="rollno"><br/><br/>
     <input type="text" placeholder="Enter Your Mobile No" class="mobile"><br/><br/>
     <button class="insert">Insert Record</button>
    </div>

  <!-- Jquery Include File -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){

       $('.insert').click(function(){

        var name = $('.name').val();
        var rollno = $('.rollno').val();
        var mobile = $('.mobile').val();

        var json = {'name' : name , 'rollno' : rollno , 'mobile' : mobile };

        $.ajax({
                 method:'get',
                 url:'insert_data',
                 data:json,
                 success:function(data){
                  $('.help').html('<p style="color:green">Success</P>');
                 },
                 error:function(errors){
                  $('.help').html('<p style="color:red">Errors</P>');
                 }
         }); 
       });

    });
  </script>
</body>
</html>