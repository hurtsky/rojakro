<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Rojak Ragnarok Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/f82516e6cc.js"></script>
    <link href="css/start.css" rel="stylesheet">	
</head>
<body>
        <!-- FacebookPlugin -->
        <?php include 'content/facebookscript.php'; ?>
        
        <div class="container-fluid" style="text-align:center; height:100%;">
        
            <div class="row" style="height:20%;">
            <!-- dummy seperator -->
            </div>
            
            <div class="row" style="height:60%;">
                
                <!-- Renewal description -->
                <div class="col-sm-4 center-block">
                <?php include 'content/renewal.php'; ?>
                </div>
                
                <!--facebook page plugin -->
                <div class="col-sm-4 center-block">
                <?php include 'content/facebookpage.php'; ?>
                </div>
                        
                <!-- Pre-Renewal Pk description -->
                <div class="col-sm-4 center-block">
                <?php include 'content/prerenewal.php'; ?>
                </div>
        
            </div>
            
            <div class="row" style="height:10%;">
            <!-- dummy seperator -->
            </div>
            
            <!-- Start of Footer-->
             <div class="row" style="height:10%;">
                <div class="col-sm-12 center-block">
                    <p class="text-muted text-center">
                        <i>RojakRO 2016</i> All rights reserved<br>
                        <i>All trademarks referenced herein are the properties of their respective owners</i><br>
                    </p>
                </div>
            </div>
            
        </div>
        <!-- end of container-fluid -->
</body>


</html>
