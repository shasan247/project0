<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Pheonix world</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            table {
                border: 2px solid black;
                border-collapse: collapse;
                width: 50%;
            }

            th, td {
                border: 1px solid black;
                padding: 5px;
                text-align: center;
            }

            #navbar {
                background-color: lightgray;
                text-align: center;
                height: 5%;
            }
            .details{
                text-align: center;
            }
            .wrapper {
                text-align: center;
            }

            .button {
                position: absolute;
                /* top: 50%; */
            }
        </style>
    </head>
    
    
    
    <body>
    <!-- <div id="navbar">
        <a class="active" href="basic_intro.php"><i class="fa fa-home"></i> Basic Intro</a>
        <a class="" href="view.php"><i class="fa fa-gear fa-spin"></i> Past efforts</a>
        <a class="" href="search_by_date_and_all.php"> <i class="fa fa-search"></i> Hobbies</a>
        <a class="" href="reportcsv.php"> <i class="glyphicon glyphicon-file"></i> Contacts</a>

</div> -->
        <div>
            <h1>About me</h1>
            <p class="details">Hello, world! This is a site to fulfill the requirment of Project0.</p>
            <br></br>
            <p class="details">I solemnly swear that I will evaluate the following site with a view of a beginner.</p>
            <div class="wrapper">
                <button onclick="location.href = 'basic_intro.php';" class="button"><a href="basic_intro.php"></a>Enter</button>
            </div>

        </div>

    </body>
</html>