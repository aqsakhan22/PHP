<!Doctype <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Firstcss.css" />
</head>
<body>
    
      <div class="container">
      <h1> Student Detail<h1>
       <form action="Firstphp.php" method="POST">
    <table>
        <tr>
        <td id="font">StudentName</td>
        <td><input type="text" name="name" id="inputsize"/></td>
        </tr>
        <tr>
        <td id="font">Email</td>
        <td><input type="text" name="Email" id="inputsize"/></td>
        </tr>
        <tr>
        <td id="font">Address</td>
        <td><input type="text" name="Address" id="inputsize"/></td>
        </tr>
        <tr>
        <td id="font">PhoneNo</td>
        <td><input type="text" name="Phone" id="inputsize"/></td>
        </tr>
        <tr>
       
        </table>
        <input type="submit" name="insert" value="InsertData" id="btnvalue"/>
        <input type="submit" name="delete" value="DeleteData" id="btnvalue"/>
        <input type="submit" name="update" value="UpdateData" id="btnvalue"/>



  </form>
      </div>
 
</body>
</html>