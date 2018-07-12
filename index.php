<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
<title>PostCode Finder</title>
    <style>
      .container{
        text-align : center ;
        margin-top : 215px  ;
                }
          body{
            font-family: 'Gaegu', cursive;
              background: url(tommaso-pecchioli-654237-unsplash.jpg) no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
                }
                #msg{
              margin-top : 15px  ;
                  font-size : 18px
                    }
    				</style>
  </head>
  <body>
    <div class="container">
       <h1 style="font-size : 54px  ;color : #DDDDDD ;">POST CODE FINDER</h1>
      <p style="font-size : 28px  ;color : white ;"><b>Enter any partial address and get the required postal code.</b></p>
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1" style="font-size : 22px ; color : white ; "><b>Address</b></label>
   <center> <input type="text" class="form-control col-sm-4" id="address" placeholder="Enter partial address here , eg. Nit Surat,Surat"> </center>
   
  </div>
 
<button class="btn btn-outline-success btn-lg" id="go">Search</button>
        
       
</form>
      
      <center><div id="msg" class="col-sm-6"></div></center>
      
 </div>
    

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>
