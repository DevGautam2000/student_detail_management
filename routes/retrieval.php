<?php
session_start();
extract($_SESSION);
require '../database/conn.php';
$row = [];
if (isset($_POST['reg'])) {
  unset($_SESSION['error']);
  $id = $_POST['reg'];
  $sql = "SELECT * FROM student_details WHERE Reg_No='$id'";
  $result = $conn->query($sql);


  if ($result->num_rows > 0) {

    while ($res = $result->fetch_assoc()) {
      array_push($row, $res);
    }
    $_SESSION['data'] = "exits";
    $_SESSION['id'] = $id;
  } else {
    $_SESSION['error'] = "student data does not exist";
    header("location: ./retrieval.php");
  }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/home.css">
  <link rel="stylesheet" href="../styles/retrieval.css">
  <title>Student | Data</title>
</head>

<body>

  <div id="bar">
    Student Data Retrieval
  </div>
  <main>


    <form class="wrapper" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">


      <label for="">Reg No</label>
      <input type="text" name="reg" required>

      <button type="submit">submit</button>


    </form>

    <div class="data">
      <?php
      if (isset($_SESSION['error'])) {
        echo "<small style='color:red'>" . $_SESSION['error'] . "</small>";
      }
      ?>
      <?php
      foreach ($row as $arr) : ?>
        <?php extract($arr); ?>
        <table>
          <tr>
            <td>Name</td>
            <td>Reg No</td>
            <td colspan="3">Marks</td>
          </tr>

          <tr>
            <td><?php echo $S_Name ?></td>
            <td><?php echo $Reg_No ?></td>
            <td><?php echo $Sub1 ?></td>
            <td><?php echo $Sub2 ?></td>
            <td><?php echo $Sub3 ?></td>
          </tr>

        </table>

        <div class="lower">
          <div id="avg">

          </div>

          <button type="button" onclick="calc_avg()">Calculate Average</button>
          <button type="button" onclick="update_data()">Update Data</button>
        </div>
      <?php endforeach ?>

      <?php
      if (isset($_SESSION['msg'])) {
        echo "<small style='color:red'>" . $_SESSION['msg'] . "</small>";
      }
      ?>
      <div class="update_data" id="update_field" hidden>
        <form action="../actions/update.php" method="post">

          <div class="form-group">
            <input type="submit" value="update" name="update" hidden>
            <div class="left">
              <label for="name">Name</label>
              <label for="marks">Marks</label>
            </div>
            <div class="right">
              <div class="name">
                <input type="text" name="s_name">
              </div>

              <div class="marks">
                <ul>
                  <li><input type="number" name="sub1" placeholder="sub1"></li>
                  <li><input type="number" name="sub2" placeholder="sub2"></li>
                  <li><input type="number" name="sub3" placeholder="sub3"></li>
                </ul>
              </div>
            </div>


          </div>
          <button type="submit">update</button>
        </form>
      </div>
    </div>
  </main>
  <footer>
    <span class="detail"><?php
                          echo $name
                          ?></span>
    <span class="detail"><?php
                          echo $reg;
                          ?></span>
    <span class="detail"><?php
                          echo $email
                          ?></span>
  </footer>


  <script type="text/javascript">
    function calc_avg() {
      const average = document.getElementById("avg");
      var sub1 = "<?php echo "$Sub1" ?>";
      var sub2 = "<?php echo "$Sub2" ?>";
      var sub3 = "<?php echo "$Sub3" ?>";

      const res = (+sub1 + +sub2 + +sub3) / 3;
      avg.innerHTML = "Average: " + res.toFixed(2);
    }

    function update_data() {
      const updateField = document.getElementById("update_field");
      updateField.hidden = !updateField.hidden;
    }
  </script>
</body>


</html>

<?php
unset($_SESSION['msg']);
?>