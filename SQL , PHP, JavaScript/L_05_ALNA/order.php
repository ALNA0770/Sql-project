<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'PHP\headparthtml_60299.php' ?>

</head>
<body onload="startOrder" > 
    <nav>
     <?php include 'PHP\nav_60299.php' ?>

    </nav>
    <header>
        <?php include 'PHP\header_60299.php' ?>

    </header>    

    <article>
        <?php include 'PHP\artOrd_60299.php' ?>
    </article>
<table>
    <tr><td>Client Name:</td> <td><?php echo isset($_POST["person"])? $_POST["person"]:"unknown" ?></td>   </tr>
    <tr><td>Company Name:</td> <td><?php echo isset($_POST["company"])? $_POST["company"]:"unknown" ?></td>   </tr>
    <tr><td>Company Town:</td> <td><?php echo isset($_POST["town"])? $_POST["town"]:"unknown" ?></td>   </tr>


</table>
<form action="charge.php" method="post">
    <table><tr>
    <td>Product 1</td>
    <td><select name="prod1" id="select1"></select></td>
    <td><select name="no1" id="selectno1"></select></td>
</tr>
<tr>
    <td>Product 2</td>
    <td><select name="prod2" id="select1"></select></td>
    <td><select name="no2" id="selectno2"></select></td>
    </tr>
    <tr>
    <td>Product 3</td>
    <td><select name="prod3" id="select1"></select></td>
    <td><select name="no3" id="selectno3"></select></td>

    </tr>
<tr><td></td><td><input type="submit" value=" Submit" name="submit"></td></tr>
</table> </form>


    <footer> <?php include 'PHP\footer_60299.php' ?></footer>
</body>
</html>