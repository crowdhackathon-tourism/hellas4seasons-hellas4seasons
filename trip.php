<!DOCTYPE html>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plan a New Trip</title>
        <link rel="stylesheet" type="text/css" href="custyle.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
   
    <body id="bodyplan">
        <div id="logo">
            <img src="/images/logo512.jpg" height="90" width="512">
    <h1 class="cat_tit">Plan a New Trip</h1>
    <hr>
    <h2 class="greyletters">Dates Range</h2>
    <hr>
        
    <h3>From</h3> 
    <input type="date">
    <h3>To</h3>
    <input type="date">
        <hr>
    <h2 class="greyletters">Destination</h2>
    <hr>
    <input id="location" type="text" placeholder="District,City,Address">
    <input type="submit" value="Fidn">
<hr>
    <h2 class="greyletters">Budget</h2>
    <hr>
    <input class="budget" type="number" min="0" max="10000" step = "100">
            <input class="budget" type="number" min="0" max="10000" step = "100">
    <hr>
            <a href="resultsfa.php"><input class="fancyb"  type="submit" value="Search"></a>


    </body>
</html>