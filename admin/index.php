<!DOCTYPE HTML>
<html>
	<head>

    	<!-- Change author to your name -->

    	<meta name="author" content="Rahul"/>

        

        <!-- Title of Page -->

        <title>

       		LoginPage || CMS

        </title>

        

        <!-- Bootstrap -->

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        

		<script src="../bootstrap/js/bootstrap.min.js"></script>

		

		<script>

			<!-- Javascript goes here -->

		</script>

		        

    </head>

    

    <body>

    

    	<!-- Page Container -->

        <div class="container">

        	

            <div class="row">

            	<div class="col-xs-12 jumbotron well well-lg">

                	<strong> Login </strong> <br/>

                </div>

            </div>

        

        	<div class="row" style="min-height:500px;">

            	<div class="col-xs-12">

            	

        		<form id='login' action='login.php' method='post' accept-charset='UTF-8'>

                    <fieldset >

                    <legend>Login</legend>

                    <input type='hidden' name='submitted' id='submitted' value='1'/>

                     

                    <label for='username' >UserName*:</label>

                    <input type='text' name='username' id='username'  maxlength="10" />

                     

                    <label for='password' >Password*:</label>

                    <input type='password' name='password' id='password' maxlength="10" />

                     

                    <input type='submit' name='Submit' value='Submit' />

                     

                    </fieldset>

                </form>

               	</div> 

         	</div>

         	

         	<div class="row">

         		<div class="col-xs-12" style="text-align:center; background-color:black; color:white; padding:10px">

                    

                    <p>

                        <span class="glyphicon glyphicon-copyright-mark"></span> Rahul, 2016 <br>

                        All Rights Reserved.

                    </p>

                </div>

            </div>

                        

       	</div>

        <!-- End of page container -->

                            

        

</body>
</html>
