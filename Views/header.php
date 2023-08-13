<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Eve Study System</title>
<style>
.image-flip:hover .backside, .image-flip.hover .backside {
-webkit-transform: rotateY(0deg);
-moz-transform: rotateY(0deg);
-o-transform: rotateY(0deg);
-ms-transform: rotateY(0deg);
transform: rotateY(0deg);
}
.image-flip:hover .frontside, .image-flip.hover .frontside {
-webkit-transform: rotateY(180deg);
-moz-transform: rotateY(180deg);
-o-transform: rotateY(180deg);
transform: rotateY(180deg);
}
.image-flip {
margin-bottom:200px;
width: 300px;
height: 250px;
}
.mainflip {
-webkit-transition: 1s;
-webkit-transform-style: preserve-3d;
-ms-transition: 1s;
-moz-transition: 1s;
-moz-transform: perspective(1000px);
-moz-transform-style: preserve-3d;
-ms-transform-style: preserve-3d;
transition: 1s;
transform-style: preserve-3d;
position: relative;
}
.frontside, .backside {
-webkit-backface-visibility: hidden;
-moz-backface-visibility: hidden;
-ms-backface-visibility: hidden;
backface-visibility: hidden;
-webkit-transition: 1s;
-webkit-transform-style: preserve-3d;
-moz-transition: 1s;
-moz-transform-style: preserve-3d;
-o-transition: 1s;
-o-transform-style: preserve-3d;
-ms-transition: 1s;
-ms-transform-style: preserve-3d;
transition: 1s;
transform-style: preserve-3d;
position: absolute;
top: 0;
left: 0;
}
.frontside {
-webkit-transform: rotateY(0deg);
-ms-transform: rotateY(0deg);
z-index: 2;
}
.backside {
background: white;
-webkit-transform: rotateY(-180deg);
-moz-transform: rotateY(-180deg);
-o-transform: rotateY(-180deg);
-ms-transform: rotateY(-180deg);
transform: rotateY(-180deg);
}
.card, .card-img-top {
border-radius: 0;
}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">
		  <img src="<?php echo base_url(); ?>../app/Images/flashcards.png" alt="" width="30" height="24">
		</a>
		<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
			  <a class="nav-item nav-link" href=<?php echo base_url(); ?>index.php/Deckmanager/>Decks</a>
			  <a class="nav-item nav-link" href=<?php echo base_url(); ?>index.php/Cardmanager/>Cards</a>
			  <a class="nav-item nav-link" href="#">Tests</a>
			</div>
			<div class="navbar-nav ms-auto">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php if($mode == "Deck") { echo "addDeckModal"; } else if($mode == "Card") { echo "addCardModal"; } ?>"> <?php if($mode == "Card") { echo "Add Card"; } else if($mode == "Deck") { echo "Add Deck"; } ?>
				</button>
			</div>
		</div>
    </div>
</nav>