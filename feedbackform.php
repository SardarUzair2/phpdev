<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form </title>

  <meta name="author" content="Codeconvey" />

  <link rel="stylesheet" href="css/style.css">
  <!--Only for demo purpose - no need to add.-->
  <link rel="stylesheet" href="css/demo.css" />

</head>

<body>



  <section>
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="Scriptcontent">


          <div class="feedback">
            <p>Dear Customer,<br>
              Thank you for getting your car services at our workshop. We would like to know how we performed. Please
              spare some moments to give us your valuable feedback as it will help us in improving our service.</p>

            <h4>Please rate your service experience for the following parameters</h4>

            <form method="post" action="feedbackform.php">
              <label>1. Your overall experience with us ?</label><br>

              <span class="star-rating">
                <input type="radio" name="rating1" value="1"><i></i>
                <input type="radio" name="rating1" value="2"><i></i>
                <input type="radio" name="rating1" value="3"><i></i>
                <input type="radio" name="rating1" value="4"><i></i>
                <input type="radio" name="rating1" value="5"><i></i>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">
              <label>2. Friendliness and courtesy shown to you while recieving your vehicle</label><br>
              <span class="star-rating">
                <input type="radio" name="rating2" value="1"><i></i>
                <input type="radio" name="rating2" value="2"><i></i>
                <input type="radio" name="rating2" value="3"><i></i>
                <input type="radio" name="rating2" value="4"><i></i>
                <input type="radio" name="rating2" value="5"><i></i>
              </span>


              <div class="clear"></div>
              <hr class="survey-hr">
              <label>3. Friendliness and courtesy shown to you while delivery of your vehicle</label><br><br />
              <div style="color:grey">
                <span style="float:left">
                  POOR
                </span>
                <span style="float:right">
                  BEST
                </span>

              </div>
              <span class="scale-rating">
                <label value="1">
                  <input type="radio" value="1" name="rating">
                  <label style="width:100%;"></label>
                </label>
                <label value="2">
                  <input type="radio" value="2" name="rating">
                  <label style="width:100%;"></label>
                </label>
                <label value="3">
                  <input type="radio" value="3" name="rating">
                  <label style="width:100%;"></label>
                </label>
                <label value="4">
                  <input type="radio" value="4" name="rating">
                  <label style="width:100%;"></label>
                </label>
                <label value="5">
                  <input type="radio" value="5" name="rating">
                  <label style="width:100%;"></label>
                </label>
                <label value="6">
                  <input type="radio" value="6" name="rating">
                  <label style="width:100%;"></label>
                </label>
                <label value="7">
                  <input type="radio" value="7" name="rating">
                  <label style="width:100%;"></label>
                </label>
                <label value="8">
                  <input type="radio" value="8" name="rating">
                  <label style="width:100%;"></label>
                </label>
                <label value="9">
                  <input type="radio" value="9" name="rating">
                  <label style="width:100%;"></label>
                </label>
                <label value="10">
                  <input type="radio" value="10" name="rating" value="10">
                  <label style="width:100%;"></label>
                </label>
              </span>

              <div class="clear"></div>
              <hr class="survey-hr">
              <label for="m_3189847521540640526commentText">4. Any Other suggestions:</label><br /><br />
              <textarea cols="75" name="commentText" rows="5" style="width:100%"></textarea><br>
              <br>
              <label for="txt">Enter Your Name</label>
              <input type="text" name="txt">
              <br>
              <label for="age">Enter Your Age:</label>
              <input type="text" name="age">
              <br>
              <label for="rad">you gender?</label>
              Male<input type="radio" name="rad" value="1">
              Female<input type="radio" name="rad" value="2">
              <br>
              <div class="clear"></div>
              <input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" name="btn"
                value="Submit your review">&nbsp;
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>



  <!-- Analytics -->

</body>

</html>
<?php

if(isset($_POST['btn'])){
    $experience = $_POST['rating1'] ;
    $friendliness  = $_POST['rating2'] ;
    $poorbest = $_POST['rating'] ;
    $suggestions = $_POST['commentText'] ;
    $Age   = $_POST['age'] ;
    $gender = $_POST['rad'] ;


    if ($experience >= 4 && $friendliness >= 4 && $poorbest >=6 && $Age >= 16 && $gender == 1 ) {
      ?>
<script>alert("Thanks you larkay For Your Feedback.")</script>
<?php
  }else if ($experience >= 4 && $friendliness >= 4 && $poorbest >=6 && $Age < 16) {
    ?>
<script>alert("Thanks you bachy For Your Feedback.")</script>
<?php
      }
      else if ($experience >= 4 && $friendliness >= 4 && $poorbest >=6 && $Age >= 16 && $gender == 2 ) {
        ?>
<script>alert("Thanks you baji  For Your Feedback.")</script>
<?php    
          }else{
            ?>
<script>alert("Acha Hum Ko Seekha Reia hai.")</script>
<?php
              }

              
}


?>