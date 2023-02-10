<?php
session_start();
$nama = $_SESSION['nama'];
if($_SESSION['status']!="login"){
	header("location:index.php?pesan=belum_login");
}
?> 
<html>
<head>
	<meta charshet="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!- - Boostrap CSS - ->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<!- - My CSS - ->
	<link rel="stylesheet" type="text/css" href="asset/css/style2.css">
	<!- - Boostrap ICON - ->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="shortcut icon" href="asset/img/logo/logo.png">
	<title>SATRYA</title>
	<style>
	body{
    
    background-color:#B3E5FC;
    border-radius: 10px;

}


.card{
  width: 400px;
  border: none;
  border-radius: 10px;
   
  background-color: #fff;
}



.stats{

      background: #f2f5f8 !important;

    color: #000 !important;
}
.articles{
  font-size:10px;
  color: #a1aab9;
}
.number1{
  font-weight:500;
}
.followers{
    font-size:10px;
  color: #a1aab9;

}
.number2{
  font-weight:500;
}
.rating{
    font-size:10px;
  color: #a1aab9;
}
.number3{
  font-weight:500;
}
	</style>
	
	<div class="container mt-5 d-flex justify-content-center">

            <div class="card p-3">

                <div class="d-flex align-items-center">

                    <div class="image">
                <img src="v4.jpg" class="rounded" width="127" >
                </div>

                <div class="ml-3 w-100">
                    
                   <h4 class="mb-0 mt-0">Satrya Alvado</h4>
                   <span>Web Designer</span>

                   <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">

                    <div class="d-flex flex-column">

                        <span class="articles">Articles</span>
                        <span class="number1">1</span>
                        
                    </div>

                    <div class="d-flex flex-column">

                        <span class="followers">Followers</span>
                        <span class="number2">870k</span>
                        
                    </div>


                    <div class="d-flex flex-column">

                        <span class="rating">rating</span>
                        <span class="number3">9.9</span>
                        
                    </div>
                       
                   </div>


                   <div class="button mt-2 d-flex flex-row align-items-center">

                    <button class="btn btn-sm btn-outline-primary w-100">Chat</button>
                    <button class="btn btn-sm btn-primary w-100 ml-2">Follow</button>

                       
                   </div>


                </div>

                    
                </div>
                
            </div>
             
         </div>