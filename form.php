
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
    body{
        margin: 0;
        padding: 0;
    }
    .container{
        width: 900px;
        height:900px;
        position: relative;
        background-image: url(1.jpeg);
        background-repeat: no-repeat;

    }
    form{
        font-size: 25;
    }
</style>

	</head>
<body>
    <h2><b>ENTER YOUR DETAILS HERE</b></h2>
    <div class="container">
<form action="pay.php" method="post"  class="p-2" enctype="multipart/form-data" id="form-box">
        <div class="form-group">
            <input type="text" name="dName" class="form-control" size="20" maxlength="20" autocomplete="off"tabindex="1" placeholder="Name" required>
        </div><br>
        <br>
        <div class="form-group">
            <input type="Email" name="demail" class="form-control" maxlength="40" size="12"  autocomplete="off" tabindex="3" placeholder="Email" required>
        </div>
        <br>
        <div class="form-group">
            <input type="number" name="dphnum" class="form-control" autocomplete="off" tabindex="5" placeholder="Mobile Number" required>
        </div>
        <br>
        <div class="form-group">
            <input type="number" name="damount" class="form-control" autocomplete="off" tabindex="5" placeholder="Amount" required>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-3 p-4 bg-light rounded">
                <input type="submit" name="submit" value="Donate The Needy" class="btn btn-success btn-lg">
     
            </div><br>
    </div>  
    </form>
</div>
</body>
</html>
