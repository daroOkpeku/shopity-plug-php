<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet"/> -->
    <title>dellyman</title>
        <script defer  src="./js/dellyman.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    
  </head>
  <body >
  <section class="overlay"> 
    <div class="within">
     <h2>Are you sure you want to ship these items</h2>
     <aside>
       <button>Yes</button> <button>No</button>
     </aside>
    </div>
  </section>
   <section class="overlay2"> 
     <div class="snow">
       <div class="loader"></div>
        <h2>Please wait.</h2>
     </div>
   
  </section>
  <nav >
  <h2>dellyman</h2>
  </nav>
  
  <section class="main">
     <h3 class="top">Send  Pickup Request to Dellyman </h3>
     <div class="show" ></div>
  <form class="whole" method="POST">
  <div class='box'>
 <h4> Step 1: Select order </h4>
 <p>Only orders with the payment status of PAID and fulfulment status of AWAITING PROCESSING or PROCESSING will be listed below</p>
 <aside>
 <select class="online">
 </select>
 </aside>
  </div>

   <div class='boxOne'>
 <h4> Step 2: Pick products from the order to ship </h4>
 <p class="xo">Select an order above,  enable you pick products to ship</p>
  <section class="cool">
     <div class="inbox"> 
       <!---this side-->
       <!-- <p class='product'>Product name</p>
         <button type="button" class="btn">
           <span></span>
           <span class="switch"></span>
           <span></span>
       </button>
       <article class="quantity">
         
        <input type="number"  placeholder="Quantity" required/>
        <button type="submit">Update</button>
        </article>
     </div> -->
     <!--- this-->
  </section>
  </div>


     <div class='boxTwo'>
 <h4> Step:3 Select a carrier </h4>
  <section class="cool">
     <div class="inbox"> 
    <select class="on" id="on" disabled>
            
    </select>
 
  </section>
  <button type="submit" class="submit" disabled>Submit</button>
  </div>
  </form>
 
</section>

  </body>
  <script>
 
  
  </script>
</html>
