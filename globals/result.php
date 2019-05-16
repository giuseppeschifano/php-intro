
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<html>
<head> 

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- <link rel="stylesheet" href="extra.css"/> -->

    <title>Result_Page</title>
</head>
 
<body>

<div class="container-fluid bg-light">
<div class="hero"> 
<div class="row d-flex flex-column col-5">
	<br>
	<!-- <a href="result.php" class="btn btn-primary " role="button">TOP MOVIES & TV shows</a> -->
	<hr/>
 
    <table width='50%' border=0 class="table table-dark table-striped table-hover table-sm text-white font-weight-bold ml-5">
        <tr class="bg-primary text-white">
            <td>Titel</td>
            <td>Score</td>
            <td>Type</td>
            <td></td>
        </tr>

        <?php

        // begin the session
        session_start();

        // loop through the session array with foreach
        foreach($_SESSION['toplist'] as $array) {

            // print_r($_SESSION);

            for ($row = 0; $row < 12; $row++) {
            // echo "<p><b>Row number $row</b></p>";

                echo "<thead>";
                        "<tr>";
                        "<th>"."title"."</th>".
                        "<th>"."rating"."</th>".
                        "<th>"."type"."</th>";
                        "</tr>";
                    "</thead>";

                echo "<tr>";

                    for ($col = 0; $col < 1; $col++) {
                        echo "<td>".$_SESSION['toplist'][$row][0]."</td>";
                        echo "<td>".$_SESSION['toplist'][$row][1]."</td>";
                        echo "<td>".$_SESSION['toplist'][$row][2]."</td>";
                    }

                echo "</tr>";
            }
        }

        ?>
    </table>

</div>
</div> 
</div> 




<!--Bootstrap & Jquery scripts-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--Axios script-->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<!--Your script-->
<!-- <script src="script.js"></script> -->

</body>
</html>




