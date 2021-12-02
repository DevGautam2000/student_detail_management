<?php
$students = array_combine(range(1, 10), range(1, 10));
session_start();
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/home.css">
    <title>Student | Entries </title>
    <link rel="stylesheet" href="../styles/entries.css">
    <script src="../scripts/entries.js" defer></script>
</head>

<body>

    <div id="bar">
        Student Data Entry
    </div>
    <main>
        <div class="dropdown">
            <label for="students_num">No. of students</label>
            <select name="students_num" id="students_num">
                <?php foreach ($students as $num) : ?>
                    <option value=<?php echo ($num) ?>><?php echo $num ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <form class="container" action="../actions/post.php" method="post" name="student_deatils">
            <h4>Student Details</h4>
            <div class="info">
                <h5 id="student_1">Student 1</h5>
                <div id='stu-1' name='stu_1'>

                    <input class="hidden" hidden value="1" name="student_nos"></input>
                    <div class="form-group">

                        <div class="left">
                            <label for="reg">Registration Number</label>
                            <label for="name">Name</label>
                            <label for="marks">Marks</label>
                        </div>
                        <div class="right">
                            <div class="reg">
                                <input type="number" name="stu_1_reg">
                            </div>

                            <div class="name">
                                <input type="text" name="stu_1_name">
                            </div>

                            <div class="marks">
                                <ul>
                                    <li><input type="number" name="stu_1_sub1" placeholder="sub1"></li>
                                    <li><input type="number" name="stu_1_sub2" placeholder="sub2"></li>
                                    <li><input type="number" name="stu_1_sub3" placeholder="sub3"></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <button type='submit' id="submit">Submit</button>
        </form>


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
</body>


</html>
<?php
unset($_SESSION["error"]);
?>