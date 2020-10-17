<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Nested Loop Multiplication Table</title>
    <style>
      table {
border-collapse: collapse;
width: 100%;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
  </head>
  
  <body>
    <h2 align="center">Nested Loop Multiplication Table</h2>
    
    <?php
    echo "<table>";
      
      
      for ($row=1; $row<=10; $row++){
      echo "<tr>\n";
        
        for ($col=1; $col<=7; $col++){
        
        $x=$col * $row;
        
        echo "<td>$x</td>\n";
        }
      echo "</tr>";
      }
    echo "</table>";
    ?>
    
  </body>
</html>