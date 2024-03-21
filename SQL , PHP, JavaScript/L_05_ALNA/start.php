<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'PHP\headparthtml_60299.php' ?>

</head>
<body onload="startStart()">
    <nav>
     <?php include 'PHP\nav_60299.php' ?>

    </nav>
    <header>
        <?php include 'PHP\header_60299.php' ?>

    </header>    

    <article>
        <?php include 'PHP\article_60299.php' ?>
    </article>

    <form action="order.php" method="post">
<table>
    <tr><td>Person Name:</td><td><input type="text" name="person"></td></tr>
    <tr><td>Company Name:</td><td><input type="text" name="company"></td></tr>
    <tr><td>Company Town:</td><td><select name="town" id="selectTown"></select></td></tr>
    <tr><td></td><td><input type="submit" value="submit"></td></tr>

</table>

    </form>

    <footer> <?php include 'PHP\footer_60299.php' ?></footer>
</body>
</html>