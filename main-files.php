<?php
/* ------------------------------------------------------------------------- *
 * main-content template
/* ------------------------------------------------------------------------- */
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Drag and Drop File Uploading</title>
	<link rel="canonical" href="https://css-tricks.com/examples/DragAndDropFileUploading/">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,400" />		
	<style>
	@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
	
		#main-header{
			display:none;
		}
		
		.mh-placeholder{
			display:none;
		}
		
		.titlebar{
			background-color: white;
			height: 70px;
			position: relative;
		}
		
		.text-title2{
			position: absolute;
			margin: 0 auto;
			left: 0;
			right: 0;
			text-align: center;
			background-color: #2b8a9a;
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
			color: transparent;
			text-shadow: rgba(255,255,255,0.5) 
			0px 3px 3px;
			font: 600 45px 'Bitter';
			font-family: "Arial Black", Gadget, 	
			sans-serif;
			width: 50% !important;
			height: 100%;
		}
		
		.titlebar{
			-webkit-box-shadow: 0px 3px 5px 	
			rgba(100, 100, 100, 0.49);
			-moz-box-shadow:    0px 3px 5px 
			rgba(100, 100, 100, 0.49);
			box-shadow:         0px 3px 5px 
			rgba(100, 100, 100, 0.49);
		}
		
		#user {
		  float: right;
		  padding-bottom: 5px;
		  margin-right:70px;
		}
		
		nav
				{
					margin-bottom: 20px;
					padding-top: 30px;
				}
					nav a
					{
						border-bottom: 2px solid #c8dadf;
						display: inline-block;
						padding: 4px 8px;
					}
					
		th, td{
			text-align: center;
		}
		
		th:nth-child(4){
			width: 75px;
		}
		
		table{
			margin: 0 auto;
			border-collapse:collapse;
			border: none;
			background: white;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			width: 50% !important;
			

		}

	</style>
</head>
  
<body id="thestash">
	<div class="titlebar">
				<div class="text-title2">
					Stash Cloud
				</div>
				<i class="fa fa-user-circle-o fa-3x popmake-518" aria-hidden="true" id="user" data-popup="518" data-settings="[object Object]">
				</i>
				
				
	</div>
	
		<div class="content">		
				<div class="cloud">
					<?php
						echo do_shortcode( '[cloud_show]' );
					?>
				</div>
				
				
		</div>
</body>
</html>
		