<!DOCTYPE html>
<html>

<head>
    <title>EditProfile</title>
</head>

<body>
    <section>
        <?php
        $un = $_GET["reg_un"];
        $pn = $_GET["reg_pass"];
        $tn = $_GET["reg_tel"];
        $rpn = $_GET["reg_pass_new"];
        if ($un == "Ori Bashary" && $pn == "Ori123" && $tn == "0549480720") {
            echo "<h2> good morning Ori</h2> <br> <h2> your new password is :" . $rpn  . "</h2>";
        } else {
            echo "Enter Valid Data";
        }
        ?>
    </section>
</body>

</html>
