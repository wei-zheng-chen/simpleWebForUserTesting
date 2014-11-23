<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />

<title>Suggestions</title>
</head>

<body>
    <div id="page">

        <div id="header">
        	<h1>Health Alert</h1>  
        </div>

        <div id="bar">
            <ul>
                <li><a href="index.html">Home </a></li>
                <li><a href="FinishedFeatures.html">Finished Features </a></li>
                <li><a href="UnfinishedTask.html">Unfinished Tasks </a></li>
                <li><a href="SurveyApp.html">Survey and App</a></li>
                <li><a href="Instructions.html"> Instructions</a></li>
            </ul>
        </div>
        <div class="contentTitle"><h1>Give Us Suggestions!</h1></div>
        <div class="contentText">
            <p> 
                If you have addition ideas or features or even bad criticism about the application that you want us to work on, feel free to type out your desires on the box below and we'll get to it. 
            </p>

            <h3>Here Are The Suggestions<h3> 
            <?php
                    // Create connection
                    $con=mysqli_connect("localhost","root","bitnami","user_testing");

                    // Check connection
                    if (mysqli_connect_errno()){
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $sql = "SELECT suggestion 
                            FROM suggestions"

                    // Check if there are results
                    if ($result = mysqli_query($con, $sql)){
                        // If so, then create a results array and a temporary one
                        // to hold the data
                        $resultArray = array();
                        $tempArray = array();
                        // Loop through each row in the result set
                        while($row = $result->fetch_object()){
                            // Add each row into our results array
                            $tempArray = $row;
                            array_push($resultArray, $tempArray);
                        }
                    }
                    mysqli_close($con);
            ?>
            <ul>
            <?php
                    foreach $resultArray as $value{ 
            ?>
                    <li> <?=value?> </li>


            <?php
                    }
            ?>



            <?php
                if(isset($_POST['submit'])){
                    // Create connection
                    $con=mysqli_connect("localhost","root","bitnami","user_testing");

                    // Check connection
                    if (mysqli_connect_errno()){
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $sql = "INSERT INTO suggestions (suggestion) 
                            VALUES ('".nl2br($_POST['suggestionBox'])."')";


                    if ($con->query($sql) == TRUE) {
                    } else {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    }

                    mysqli_close($con);
                }
            ?>

            <form name="suggestionForm" action="Suggestions.php" method="post">
                    <b> Type you Suggestions Below: <b/>
                    <br><br/>
                    <textarea name="suggestionBox" maxlength="2800" rows="10" cols="104" placeholder="Start typing here"></textarea> 
                    <br><br/>
                    <input name="submit" type="submit" value="submit" />
            </form>

        </div>

            <br></br>
            <br></br>

 	</div>

</body>
</html>