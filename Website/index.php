<!DOCTYPE html>
<html>

<head>
    <?php echo file_get_contents("./global/head-tags.html") ?>
</head>

<body>
    <!-- Hero Image -->
    <section id="hero">
        <!-- Site Name -->
        <div class="text-center" style="margin-left:10%;margin-right:10%;padding-top:3%;">
            <div class="row tab">
                <div class="col-sm-3" onclick="location.href='#about';">
                    About
                </div>
                <div class="col-sm-3" onclick="location.href='#about';">
                    Rules
                </div>
                <div class="col-sm-3" onclick="location.href='#about';">
                    Sponsors
                </div>
                <div class="col-sm-3" onclick="location.href='#contact';">
                    Contact
                </div>
            </div>
        </div>
        <div style="padding:150px;">
            <center>
                <img src="/bcco/img/bcco-logo.png" alt="BCCO Logo" style="width:140px;">
            </center>
            <h1 style="text-align: center; font-size: 75px;">British Columbia Computer Olympiad</h1>
            <!-- End Site Name -->

            <!-- Subtitle -->
            <p>Presented by <a href="http://www.inovaca.org" style="color: white;"><strong><em>Inova Computer Association</em></strong></a></p>
            <!-- End Subtitle -->
        </div>
    </section>
    <!-- End Hero Image -->

      <?php
      // Display alerts. Login scripts return to the homepage if they fail.

      if( isset($student_id_exists) && !$student_id_exists ) {
        echo('<div class="alert alert-danger alert-dismissable slideInDown animated">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error</strong> We do not recongize that student ID.
        </div>');
      } else if( isset($school_id_exists) && !$school_id_exists ) {
        echo('<div class="alert alert-danger alert-dismissable slideInDown animated">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Uh Oh</strong> Sorry, we can&#39;t recognize that school ID.
        </div>');
      }

      ?>
  
    <!-- Login Forms -->
    <section id="login">
        <div class="row" style="margin-left:0px; margin-right:0px;">
            <div class="col-md-5">
                <p style="font-size:50px;font-weight:bold;">LOGIN</p>
            </div>

            <!-- Vertical dividing line -->
            <div class="col-md-2">
                <center>
                    <div class="vertical-line" style="height:100px;"></div>
                </center>
            </div>
            <!-- End Vertical Dividing Line -->

            <!-- Teacher Login -->
            <div class="col-md-5 text-center">
                <center>
                    <form action="http://www.inovaca.org/bcco/school-login.php" method="post" style="display:inline;">
                        <label style="margin-right:14px;">Teacher:</label>
                        <input type="text" name="school_id" placeholder="School ID" required style="margin-right:8px;">
                        <button type="submit" class="btn btn-default">Log In</button>
                    </form>
                    <br>
                    <br>
                    <form action="http://www.inovaca.org/bcco/student-login.php" method="post" style="display:inline;">
                        <label style="margin-right:10px;">Student:</label>
                        <input type="text" name="student_id" placeholder="Student ID" required style="margin-right:8px;">
                        <button type="submit" class="btn btn-default">Log In</button>
                    </form>
                </center>
            </div>
            <!-- End Teacher Login -->

        </div>

    </section>
    <!-- End Login Forms -->

    <!-- Contest Explanation -->
    <section>
        <div class="container">
            <hr>
            <h2 class="text-center">About</h2>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h2>What</h2>
                </div>
                <div class="col-sm-10">
                    <p>The British Columbia Computing Olympiad (BCCO) is a contest that tests computer-related logic and thinking skills for students in grades 7 to 9. It is free to write either online or on paper, and consists of both multiple choice and free response questions. No prior knowledge of computer science is required to write the BCCO; any questions that require background knowledge will provide it in the question.</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h2>When</h2>
                </div>
                <div class="col-sm-10">
                    <p>The contest will be held in December, and will be written in-school, with the supervising teacher administering the contest. The time limit for the BCCO is 1 (one) hour, and all calculators are permitted for use in the contest.</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h2>Where</h2>
                </div>
                <div class="col-sm-10">
                    <p>There is a grade 7 division and a grade 8/9 division for awards; within 1 month after the contest, the top performing students from each division will be posted on our website, and teachers may access their students’ results. A supervising teacher must register all of their students at a school, using this link.</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h2>Who</h2>
                </div>
                <div class="col-sm-10">
                    <p>(insert link to registration here) The online version of the BCCO will be available here (insert link to contest website) during the hour that it is open. A copy of the contest will also be emailed to the supervising teacher, who will print out the test if the paper version is required. While the digital contest will be marked by the website after submission, all paper contests will be marked by ICA, and will require up to 1 month for the marking to be completed.
                    </p>
                </div>
            </div>
          <p>For a more detailed description for teachers, please visit.</p>
        </div>
        <!-- End Contest Explanation -->

        <!-- Contact Form -->
        <a class="anchor" id="contact"></a>
        <section id="contact">
            <div class="container">
                <hr>
                <h2 class="text-center">Contact Us</h2>
                <hr>
                <div style="margin-left:20%; margin-right:20%;">
                    <form style="margin-left: 3%; margin-right: 3%;" action="./forms/contact.php" method="post">
                      <p>You can contact us throught this form. Alternatively, you can email us at bcco@inovaca.org. We will get back to your message within a few days.</p>
                        <div class="form-group">
                            <label>Name:</label>
                            <input class="form-control" type="text" placeholder="Name" name="cf_name" required>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input class="form-control" type="email" placeholder="Email" name="cf_email" required>
                        </div>
                        <div class="form-group">
                            <label>Message:</label>
                            <textarea class="form-control" name="cf_message" style="height:150px; resize:vertical;" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <input style="margin-top:10px;" type="submit" value="Send" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Contact Form -->

</body>

<style>
    footer {
        background-color: #bfbfbf;
        color: white;
    }
</style>
<?php echo file_get_contents("./global/footer.html") ?>

</html>