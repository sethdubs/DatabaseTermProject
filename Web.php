<!DOCTYPE html>
<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->
<html lang="en-us">
<link rel="stylesheet" href="tabs.css" type="text/css" />
<head>
<title> Database website</title>
<script src="tabs.js"></script>
</head>

<body>

    
	<ul class="tab">
  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Book')">Book</a></li>
  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Customer')">Customer</a></li>
  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Employee')">Employee</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Order')">Order</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Order Detail')">Order Detail</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Shipper')">Shipper</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Subject')">Subject</a></li>
	  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Supplier')">Supplier</a></li>
</ul>

<div id="Book" class="tabcontent">
  <h3>Book</h3>
  <table width="500" height = "40">
    <tr>
      <td>bID</td>
      <td>bTitle</td>
      <td>bPrice</td>
      <td>bAuthor</td>
      <td>bQuantity</td>
      <td>supplierID</td>
      <td>subjectID</td>
    </tr>
    <?php
        $connect = mysql_connect(getenv('IP'),"sew0033", "", "BookSystem");
          if (!$connect) {
            die(mysql_error());
          }
          mysql_select_db("BookSystem");
          $results = mysql_query("SELECT * FROM db_book");
          while($row = mysql_fetch_array($results)) {
            
    ?>
         <tr>
            <td> <?php echo $row['0'] ?> </td>
            <td> <?php echo $row['1'] ?> </td>
            <td> <?php echo $row['2'] ?> </td>
            <td> <?php echo $row['3'] ?> </td>
            <td> <?php echo $row['4'] ?> </td>
            <td> <?php echo $row['5'] ?> </td>
            <td> <?php echo $row['6'] ?> </td>
        </tr>
        <?php } ?>
      
  </table>
</div>

<div id="Customer" class="tabcontent">
  <h3>Customer</h3>
  <table width="500" height = "40">
    <tr>
      <td>customerID</td>
      <td>custLastName</td>
      <td>custFirstName</td>
      <td>phone</td>
    </tr>
    <?php
        $connect = mysql_connect(getenv('IP'),"sew0033", "", "BookSystem");
          if (!$connect) {
            die(mysql_error());
          }
          mysql_select_db("BookSystem");
          $results = mysql_query("SELECT * FROM db_customer");
          while($row = mysql_fetch_array($results)) {
            
    ?>
         <tr>
            <td> <?php echo $row['0'] ?> </td>
            <td> <?php echo $row['1'] ?> </td>
            <td> <?php echo $row['2'] ?> </td>
            <td> <?php echo $row['3'] ?> </td>

        </tr>
        <?php } ?>
      
  </table>
</div>

<div id="Employee" class="tabcontent">
  <h3>Employee</h3>
  <table width="500" height = "40">
    <tr>
      <td>employeeID</td>
      <td>eLastName</td>
      <td>eFirstName</td>
    </tr>
    <?php
        $connect = mysql_connect(getenv('IP'),"sew0033", "", "BookSystem");
          if (!$connect) {
            die(mysql_error());
          }
          mysql_select_db("BookSystem");
          $results = mysql_query("SELECT * FROM db_employee");
          while($row = mysql_fetch_array($results)) {
            
    ?>
         <tr>
            <td> <?php echo $row['0'] ?> </td>
            <td> <?php echo $row['1'] ?> </td>
            <td> <?php echo $row['2'] ?> </td>
        </tr>
        <?php } ?>
      
  </table>
</div>

<div id="Order" class="tabcontent">
  <h3>Order</h3>
  <table width="500" height = "40">
    <tr>
      <td>orderID</td>
      <td>customerID</td>
      <td>employeeID</td>
      <td>orderDate</td>
      <td>shipDate</td>
      <td>shipID</td>
    </tr>
    <?php
        $connect = mysql_connect(getenv('IP'),"sew0033", "", "BookSystem");
          if (!$connect) {
            die(mysql_error());
          }
          mysql_select_db("BookSystem");
          $results = mysql_query("SELECT * FROM db_order");
          while($row = mysql_fetch_array($results)) {
            
    ?>
         <tr>
            <td> <?php echo $row['0'] ?> </td>
            <td> <?php echo $row['1'] ?> </td>
            <td> <?php echo $row['2'] ?> </td>
            <td> <?php echo $row['3'] ?> </td>
            <td> <?php echo $row['4'] ?> </td>
            <td> <?php echo $row['5'] ?> </td>
        </tr>
        <?php } ?>
      
  </table>
</div>

<div id="Order Detail" class="tabcontent">
  <h3>Order Detail</h3>
  <table width="500" height = "40">
    <tr>
      <td>bookID</td>
      <td>orderID</td>
      <td>oQuantity</td>
    </tr>
    <?php
        $connect = mysql_connect(getenv('IP'),"sew0033", "", "BookSystem");
          if (!$connect) {
            die(mysql_error());
          }
          mysql_select_db("BookSystem");
          $results = mysql_query("SELECT * FROM db_order_detail");
          while($row = mysql_fetch_array($results)) {
            
    ?>
         <tr>
            <td> <?php echo $row['0'] ?> </td>
            <td> <?php echo $row['1'] ?> </td>
            <td> <?php echo $row['2'] ?> </td>
        </tr>
        <?php } ?>
      
  </table>
</div>

<div id="Shipper" class="tabcontent">
  <h3>Shipper</h3>
  <table width="500" height = "40">
    <tr>
      <td>shipperID</td>
      <td>shipperName</td>
    </tr>
    <?php
        $connect = mysql_connect(getenv('IP'),"sew0033", "", "BookSystem");
          if (!$connect) {
            die(mysql_error());
          }
          mysql_select_db("BookSystem");
          $results = mysql_query("SELECT * FROM db_shipper");
          while($row = mysql_fetch_array($results)) {
            
    ?>
         <tr>
            <td> <?php echo $row['0'] ?> </td>
            <td> <?php echo $row['1'] ?> </td>
        </tr>
        <?php } ?>
      
  </table>
</div>

<div id="Subject" class="tabcontent">
  <h3>Subject</h3>
  <table width="500" height = "40">
    <tr>
      <td>subID</td>
      <td>catName</td>
    </tr>
    <?php
        $connect = mysql_connect(getenv('IP'),"sew0033", "", "BookSystem");
          if (!$connect) {
            die(mysql_error());
          }
          mysql_select_db("BookSystem");
          $results = mysql_query("SELECT * FROM db_subject");
          while($row = mysql_fetch_array($results)) {
            
    ?>
         <tr>
            <td> <?php echo $row['0'] ?> </td>
            <td> <?php echo $row['1'] ?> </td>
        </tr>
        <?php } ?>
      
  </table>
</div>

<div id="Supplier" class="tabcontent">
  <h3>Supplier</h3>
  <table width="500" height = "40">
    <tr>
      <td>supplierID</td>
      <td>companyName</td>
      <td>contactLastName</td>
      <td>contactFirstName</td>
      <td>phone</td>
    </tr>
    <?php
        $connect = mysql_connect(getenv('IP'),"sew0033", "", "BookSystem");
          if (!$connect) {
            die(mysql_error());
          }
          mysql_select_db("BookSystem");
          $results = mysql_query("SELECT * FROM db_supplier");
          while($row = mysql_fetch_array($results)) {
            
    ?>
         <tr>
            <td> <?php echo $row['0'] ?> </td>
            <td> <?php echo $row['1'] ?> </td>
            <td> <?php echo $row['2'] ?> </td>
            <td> <?php echo $row['3'] ?> </td>
            <td> <?php echo $row['4'] ?> </td>
        </tr>
        <?php } ?>
      
  </table>
</div>

<form action="result.php" method="get" target="resframe">
    <label for="query_text">Enter Query:</label>
    <input type="text" id="query_text" name="query_text"/>
    <input type="submit" name="submit" value="send"/>
</form>

<iframe name="resframe" width="500"></iframe>

</body>

</html>