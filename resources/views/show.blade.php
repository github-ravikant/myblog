<!DOCTYPE html>
<html>
<head>
	<title>Show Page</title>
</head>
<body>
    <div style="margin:auto;margin-top:200px;padding:20px;width:30%;text-align:center">
	 <h2>Student Record</h2>	
       <table border="2" align="center">
       	  <tr>
       	  	<th>S.N</th>
       	  	<th>NAME</th>
       	  	<th>ROLL NO</th>
       	  	<th>MOBILE NO</th>
       	  	<th>EDIT</th>
       	  	<th>DELETE</th>
       	  </tr>
          <tr>
          	<td>1</td>
          	<td>Vivek Pundhir</td>
          	<td>0198CS141018</td>
          	<td>8224056231</td>
          	<td><a href="{{ 'edit' }}">EDIT</a></td>
          	<td><a href="{{ 'delete' }}">DELETE</a></td>
          </tr>
       </table>
    </div>
</body>
</html>