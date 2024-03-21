<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h1>That is your DATA:</h1><br>
    First name : <?php echo $_GET["name"] ?> <br>
    Surename : <?php echo $_GET["surname"] ?> <br>
    Grade : <?php echo (isset($_GET["grade"]) ? 'Yes' : 'No' )?> <br>
    Your mark: <?php 
            switch ($_GET["mark"] ) {
                case "5.0":
                    echo "Very good done!";
                    break;
                case "4.0":
                        echo " Not bad man!";
                    break;

                    case "3.0":
                        echo "Sufficient";
                        break;

                        case "2.0":
                           echo "Not enough";
                            break;
                     
                
            }
    ?>
    </body>
</html>