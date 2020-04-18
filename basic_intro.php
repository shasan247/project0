<!DOCTYPE html>
<html>
    <head>
        <title>Basic introduction about me</title>
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
            .image-cropper {
                width: 200px;
                height: 200px;
                position: relative;
                overflow: hidden;
                border-radius: 50%;
            }

            img {
                display: inline;
                margin: 0 auto;
                height: 100%;
                width: auto;
            }
        </style>
    </head>
    
    
    
    <body>
    <?php include('navbar.php'); ?>
    <!-- <div id="navbar">
        <a class="active" href="basic_intro.php"><i class="fa fa-home"></i> Basic Intro</a>
        <a class="" href="view.php"><i class="fa fa-gear fa-spin"></i> Past efforts</a>
        <a class="" href="search_by_date_and_all.php"> <i class="fa fa-search"></i> Hobbies</a>
        <a class="" href="reportcsv.php"> <i class="glyphicon glyphicon-file"></i> Contacts</a>

    </div> -->

    <h2>Welcome to Pheonix world</h2>
    <div class="image-cropper">
        <img src = "https://media-exp1.licdn.com/dms/image/C5103AQHrHwf7FkVrYg/profile-displayphoto-shrink_200_200/0?e=1592438400&v=beta&t=CQKh-wG0Rx0M2Z2ZWx5mT0YBi85z8jauQ1oNrX0Bs8Y" class="rounded">
    </div>
        <div>
        <h2>Education</h2>
        <table>
            <tr>
                <th>Institute</th>
                <th>Student years</th>
                <th>Why I loved It</th>
                <th>No of days I bunked</th>
                <th>Take away</th>
            </tr>
            <tr>
                <td>Ideal School & College</td>
                <td>2000~2008</td>
                <td>That special look I got after naming my school</td>
                <td>0 Days</td>
                <td>Religeous view, importance of care-free life</td>
            </tr>
            <tr>
                <td>Govt Science College</td>
                <td>2008~2010</td>
                <td>Friends, situated beside a girls college</td>
                <td>~ 1 year</td>
                <td>FRIENDS</td>
            </tr>
            <tr>
                <td>American International University-Bangladesh</td>
                <td>2011~2015</td>
                <td>Friends, Lots of group tour</td>
                <td>Semester breaks were enough</td>
                <td>FRIENDS</td>
            </tr>

        </table>
        </div>
    </body>
</html>