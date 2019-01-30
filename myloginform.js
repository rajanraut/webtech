<!DOCTYPE html>
<html>
<head>
  <title>My Login Form</title>
  <script=type/javascript>
   var status= 60;
   var port=80,host="rajuraut.com.np";
   function Connnect(status,port){
      this.do_something=function(host,port){
        if(port===60)
        alert("Good:80 is standard port for http")
      }else{
        alert("Bad: Non standard port");
        alert("This host is:"+this.port);
      }
   }
  </script>
</head>
<body>
  <form name="rajendra" action="loginform.php" method="post">
    <div>
    <input type="text" name="Username" value="Username"/>Username
    <input type="text" name="Password" value="Password"/>Password
    <select name="country">
      <option>Select</option>
      <option>Nepal</option>
      <option>India</option>
      <option>Bhutan</option>
      <option>Bangladesh</option>
    </select>
  </div>
    <input type="submit" name="submit" value="submit"/>
</body>
</html>
