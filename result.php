<!DOCTYPE html>
<html>
    <body>
        <table width="500" height = "40">
    <?php
    if( isset($_GET['submit']) )
    {
         $connect = mysqli_connect(getenv('IP'),"sew0033", "");
          if (!$connect) {
            die(mysql_error());
          }
          mysqli_select_db($connect, "BookSystem");
          $val1 = $_GET['query_text'];
          $results = mysqli_query($connect, $val1);
            echo mysqli_error($connect);
          $field_cnt = mysqli_num_fields($results);
          while($row = mysqli_fetch_row($results)) {
              ?>
              <tr>
                  <?php for($i=0; $i < $field_cnt; $i++)
                    { ?>
                    <td><?php echo $row[$i] ?></td>
                    <?php } ?>
              </tr>
  <?php
          }
    }
    ?>
    </table>
    </body>
</html>
