<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min2.css">
	<link rel="stylesheet" type="text/css" href="css/style3.css">
    
    <!-- CSS Files For Plugin -->
    <link href="css3/animate.css" rel="stylesheet">
    <link href="css3/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="css3/magnific-popup.css" rel="stylesheet" />
    <link href="css3/YTPlayer.css" rel="stylesheet" />
    <link href="inc/owlcarousel/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="inc/owlcarousel/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="inc/revolution/css/settings.css" rel="stylesheet" />
    <link href="inc/revolution/css/layers.css" rel="stylesheet" />
    <link href="inc/revolution/css/navigation.css" rel="stylesheet" />

<title>Recenzii primite</title>
<!-- CSS FOR STYLING THE PAGE -->
<style>
table {
margin: 0 auto;
font-size: large;
border: 1px solid black;
}

h1 {
text-align: center;
color: #c18f59;
font-size: xx-large;
font-weight: bold;
 padding: 30px;
}

td {
border: 1px solid black;
margin: 10px;
}

th,
td {
font-weight: bold;
border: 1px solid black;
padding: 10px;
text-align: center;
margin: 10px;
}

td {
font-weight: lighter;
}
</style>
</head>
<body>

<?php
    $servername = "192.168.0.4";
    $username = "MBorsos";
    $password = "Gupo5i";
    $dbname = "MBorsos";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //Introduceti datele din formular in tabela Recenzie
    $sql = "INSERT INTO Recenzie (titlu, autor, citat, recenzie)
    VALUES ('".$_POST["titlu"]."', '".$_POST["autor"]."', '".$_POST["citat"]."', '".$_POST["recenzie"]."')";
    
    if ($conn->query($sql) === TRUE) {
    //afisati toate datele existente in tabela Recenzie
    $sql = "SELECT * FROM Recenzie";
    $result = $conn->query($sql);
    }
    $conn->close();
?>

<div class="loader">
	</div>
	<div id="myDiv">
		<div class="header">
		  <div class="bg-color">
			<header id="main-header">
			  <nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<a class="navbar-brand" href="#">Book<span class="logo-dec">Reviewer</span></a>
				  </div>
				  <div class="collapse navbar-collapse hoc-clear" id="myNavbar">
					<ul class="nav navbar-nav navbar-right clear">
					  <li class="active"><a href="index.html">Home</a></li>
					  <li><a class="drop" href="carti1.html">Cărți</a></li>
					  <li><a class="drop" href="serii.html">Serii</a></li>
					  <li><a class="drop" href="autori.html">Autori</a></li>
					</ul>
				  </div>
				</div>
			  </nav>
		  </div>
		</div>
</div>

<section>
    <h1 style="padding-down:">Recezii primite</h1>
    <!-- constructia tabelului -->
    <table style="width:80%">
    <tr>
    <th>Titlu</th>
    <th>Autor</th>
    <th>Citat</th>
    <th>Recenzie</th>
    </tr>
    <!-- codul php care preia informatiile din tabel-->
    <?php 
    while($rows=$result->fetch_assoc())
    {
    ?>
    <tr>
    <!--aduna datele de pe fiecare rand din fiecare coloana-->
    <td><?php echo $rows['titlu'];?></td>
    <td><?php echo $rows['autor'];?></td>
    <td><?php echo $rows['citat'];?></td>
    <td><?php echo $rows['recenzie'];?></td>
    </tr>
    <?php
    }
    ?>
    </table>
</section>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/scripts/jquery.min.js"></script>
	<script src="js/scripts/jquery.backtotop.js"></script>
	<script src="js/scripts/jquery.mobilemenu.js"></script>
	<script src="js2/jquery.min.js"></script>
	<script src="js2/jquery.easing.min.js"></script>
	<script src="js2/bootstrap.min.js"></script>
	<script src="js2/wow.js"></script>
	<script src="js2/jquery.bxslider.min.js"></script>
	<script src="js2/custom.js"></script>	
	<script src="layout/scripts/jquery.min.js"></script>
	<script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>

	
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Components Plugin -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="inc/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="inc/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="inc/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- RS Plugin Extensions -->
    <script src="inc/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


</body>
</html>
    