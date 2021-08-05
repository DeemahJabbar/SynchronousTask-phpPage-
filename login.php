<!DOCTYPE html>
<html>
<head>
<style>
*{
  -webkit-user-select: none;
  cursor: default;
}
body{
  background: #ccccff;
}
.container{
  max-width:600px;
  margin:auto;
  border-radius: 60px;
  background-color:#2c3e50;
  padding: 5px;
  text-align: center ;
  color:white;
}
.text{
  display: inline;
  color:black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
}
table, th, td {
   padding: 10px;
  text-align: center;  
}
.button {
  width: 150px;
  background-color: #ccccff;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
 
}
 .button:hover {opacity: 1}
</style>
<body>
<div class="container">
<br><br><br>
<h1> Welcome</h1>
<br><br>
<table style="width:100%">
  <tr>
    <th></th>
    <input class="text" type="text" placeholder="Enter ssID" name="uname" required>
    <th></th>
  </tr>
  <tr>
  <input class="text" type="text" placeholder="Enter Pasword" name="uname" required>
  </tr>
  <tr>
  <th></th>
  <form action="task6.php">
   <th><input class="button"  formaction="/task6.php" type="submit"value="Submit" ></th>
   </form>
    <th></th>
  </tr>
  </form>
</table>
<br><br>

</div>
</body>
</html>