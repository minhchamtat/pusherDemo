<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Bootstrap image checkbox (multiple)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

    <style type="text/css">
      	.nopad {
			padding-left: 0 !important;
			padding-right: 0 !important;
		}
		/*image gallery*/
		.image-checkbox {
			cursor: pointer;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			border: 4px solid transparent;
			margin-bottom: 0;
			outline: 0;
		}
		.image-checkbox input[type="checkbox"] {
			display: none;
		}

		.image-checkbox-checked {
			border-color: #4783B0;
		}
		.image-checkbox .fa {
		  position: absolute;
		  color: #4A79A3;
		  background-color: #fff;
		  padding: 10px;
		  top: 0;
		  right: 0;
		}
		.image-checkbox-checked .fa {
		  display: block !important;
		}
    </style>
  
</head>

<body>

  <!-- 
Image Checkbox Bootstrap template for multiple image selection
https://www.prepbootstrap.com/bootstrap-template/image-checkbox
-->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<div class="container">
  <h3>Bootstrap image checkbox(multiple)</h3>
  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" />
      <input type="checkbox" name="image[]" value="1" />
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" />
      <input type="checkbox" name="image[]" value="2" />
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" />
      <input type="checkbox" name="image[]" value="3" />
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" />
      <input type="checkbox" name="image[]" value="4" />
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
  <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
    <label class="image-checkbox">
      <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" />
      <input type="checkbox" name="image[]" value="5" />
      <i class="fa fa-check hidden"></i>
    </label>
  </div>
	<form method="post" action="submitImg">
		<button>submit</button>
	</form>
</div>
  	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script type="text/javascript">
    	Array.prototype.remove = function() {
		    var what, a = arguments, L = a.length, ax;
		    while (L && this.length) {
		        what = a[--L];
		        while ((ax = this.indexOf(what)) !== -1) {
		            this.splice(ax, 1);
		        }
		    }
		    return this;
		};
    	// image gallery
		// init the state from the input
		var ar = [];
		$(".image-checkbox").each(function () {
		    if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
		      $(this).addClass('image-checkbox-checked');
		  	}
		  	else {
		    	$(this).removeClass('image-checkbox-checked');
		  	}
		});

		// sync the state to the input
		$(".image-checkbox").on("click", function (e) {
		  	$(this).toggleClass('image-checkbox-checked');
		  	var $checkbox = $(this).find('input[type="checkbox"]');
		  	$checkbox.prop("checked",!$checkbox.prop("checked"))
		  	e.preventDefault();

		  	var img =  $(this).find('input[type="checkbox"]').val();
		  	if($(this).hasClass( 'image-checkbox-checked' )) {
		  		ar.push(img)
		  		console.log(ar);
		  	} else {
		  		ar.remove(img);
		  		console.log(ar);
		  	}

		  	// var a = $(this).find('input[type="checkbox"]').attr('type');

		  	// // 
	    // //   	ar.push(img);
	    //   	console.log(a);
		});
    </script>
</body>

</html>
