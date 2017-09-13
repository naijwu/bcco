<!DOCTYPE html>
<html>

<head>
    <?php echo file_get_contents("./global/head-tags.html") ?>

    <title>BCCO 2017</title>
</head>

<body>
    <!-- Hero Image -->
    <section id="hero" style="height:100vh;">
      <!-- Site Name -->
      <center>
      <img src="http://www.inovaca.org/bcco/img/bcco-logo.png" alt="BCCO Logo" style="width:15%;">
      </center>
      <h1 style="text-align: center; font-size: 90px;">British Columbia Computer Olympiad</h1>
      <!-- End Site Name -->

      <!-- Subtitle -->
      <p>Presented by <a href="https://www.inovaca.org" style="color: white;"><strong><em> The Inova Computer Association</em></strong></a></p>
      <!-- End Subtitle -->
    </section>
    <!-- End Hero Image -->

    <div class="container">

      <?php
      // Display alerts. Login scripts return to the homepage if they fail.

      if( isset($student_id_exists) && !$student_id_exists ) {
        echo('<div class="alert alert-danger alert-dismissable slideInDown animated">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Uh Oh</strong> Sorry, we can&#39;t recognize that student ID.
        </div>');
      } else if( isset($school_id_exists) && !$school_id_exists ) {
        echo('<div class="alert alert-danger alert-dismissable slideInDown animated">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Uh Oh</strong> Sorry, we can&#39;t recognize that school ID.
        </div>');
      }

      ?>


      <!-- Menu Bar -->
      <div class="home-menu text-center" style="margin-left:10%; margin-right:10%;">
          <div class="row">
              <div class="col-sm-3 tab selected" onclick="changeTab('rules')" name="tab" id="rules">
                  <h4>Rules</h4>
              </div>
              <div class="col-sm-3 tab" name="tab" onclick="changeTab('about')" id="about">
                  <h4>About</h4>
              </div>
              <div class="col-sm-3 tab" name="tab" onclick="changeTab('sponsors')" id="sponsors">
                  <h4>Sponsors</h4>
              </div>
              <div class="col-sm-3 tab" name="tab" onclick="changeTab('contact')" id="contact">
                  <h4>Contact</h4>
              </div>
          </div>
      </div>
      <!-- End Menu Bar -->

      <div class="section" style="margin-left:20%; margin-right:20%; margin-top:1%;overflow:hidden; padding-bottom:3%;">
          <div style="display:block;" id="rulesdiv" name="tabdiv">
              <div class="row">
                  <div class="col-sm-8">
                      <h3 style="font-weight:bold;">Rules</h3>
                      <p style="text-align:justify;">Placeholder text.</p>
                  </div>
                  <div class="col-sm-4">
                      <img src="/img/da2017/rule.png" alt="" style="float:right;width:100%;">
                  </div>
              </div>
          </div>
          <div style="display:none;" id="aboutdiv" name="tabdiv">
              <div class="row">
                  <div class="col-sm-8">
                      <h3 style="font-weight:bold;">About</h3>
                      <p style="text-align:justify;">Placeholder text.</p>
                  </div>
                  <div class="col-sm-4">
                      <img src="/img/da2017/theme.jpg" alt="" style="float:right;width:100%;">
                  </div>
              </div>
          </div>
          <div style="display:none;" id="sponsorsdiv" name="tabdiv">
            <!-- Sponsors -->
            <div class="container text-center" style="padding-bottom:3%;">
                <h2>Sponsors</h2>

                <div class="row">
                    <div class="col-sm-6">
                        <a href="http://www.hivevancouver.com/"><img src="/img/sponsors/hive.png" alt="" style="height:160px;">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="https://www.codeschool.com/"><img src="/img/sponsors/codeschool.png" alt="" style="height:160px;">
                        </a>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="https://www.lighthouselabs.ca/"><img src="/img/sponsors/lighthouselabs.png" alt="" style="height:100px;">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="https://www.redacademy.com"><img src="/img/sponsors/redacademy.png" alt="" style="height:100px;"></a>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="offset-3 col-sm-6">
                        <a href="http://www.pacificacademy.net/"><img src="/img/sponsors/pacificacademy.png" alt="" style="height:160px;">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end Sponsors -->
          </div>
          <div style="display:none;" id="contactdiv" name="tabdiv">
            <!-- Contact Form -->
            <section id="contact" style="padding-top: 20px; padding-bottom: 40px;">
              <form style="margin-left: 5%; margin-right: 5%;" action="./forms/contact.php" method="post" onsubmit="return check();">
                <div class="form-group" id="one">
                  <label>Name:</label>
                  <input class="form-control" type="text" placeholder="Name" name="cf_name">
                </div>
                <div class="form-group" id="two">
                  <label>Email:</label>
                  <input class="form-control" type="text" placeholder="Email" name="cf_email">
                </div>
                <div class="form-group" id="three">
                  <label>Message:</label>
                  <textarea class="form-control" name="cf_message" style="height:150px; resize:vertical;" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input style="margin-top:10px;" type="submit" value="Send" class="form-control">
                </div>
              </form>
            </section>
            <!-- End Contact Form -->
          </div>
      </div>
  </div>
  <script>
      function changeTab(name) {
          if (document.getElementById(name).className.indexOf("selected") > -1) {
              return;
          }
          var x = document.getElementsByName("tab");
          var y = document.getElementsByName("tabdiv");
          for (i = 0; i < x.length; ++i) {
              x[i].className = x[i].className.replace(" selected", "");
              y[i].style.display = "none";
          }
          document.getElementById(name).className += " selected";
          $("#" + name + "div").fadeIn(1000);
      }
  </script>


    <!-- Login Forms -->
    <section id="login">

      <h2>Login</h2>

      <div class="row" style="margin-left:0px; margin-right:0px;">
        <!-- Student Login -->
        <div class="col-md-5">
          <h3>Student</h3>
          <form action="http://www.inovaca.org/bcco/forms/student-login.php" method="post">
            <input type="text" name="student_id" placeholder="Student ID" required>
            <button type="submit" class="btn btn-default btn-login">Log In</button>
          </form>
        </div>
        <!-- End Student Login -->

        <!-- Vertical dividing line -->
        <div class="col-md-2">
            <div class="vertical-line"></div>
        </div>
        <!-- End Vertical Dividing Line -->

        <!-- Teacher Login -->
        <div class="col-md-5">
          <h3>Teacher</h3>
          <form action="http://www.inovaca.org/bcco/forms/school-login.php" method="post">
            <input type="text" name="school_id" placeholder="School ID" required>
            <button type="submit" class="btn btn-default btn-login">Log In</button>
          </form>
        </div>
        <!-- End Teacher Login -->

      </div>

    </section>
    <!-- End Login Forms -->

    <!-- Contest Explanation -->
    <section id="info">
    <p>The British Columbia Computing Olympiad (BCCO) is a contest that tests computer-related logic and thinking skills for students in grades 7 to 9. It is free to write either online or on paper, and consists of both multiple choice and free response questions. No prior knowledge of computer science is required to write the BCCO; any questions that require background knowledge will provide it in the question.

The contest will be held in December, and will be written in-school, with the supervising teacher administering the contest. The time limit for the BCCO is 1 (one) hour, and all calculators are permitted for use in the contest. There is a grade 7 division and a grade 8/9 division for awards; within 1 month after the contest, the top performing students from each division will be posted on our website, and teachers may access their students’ results.

A supervising teacher must register all of their students at a school, using this link. (insert link to registration here) The online version of the BCCO will be available here (insert link to contest website) during the hour that it is open. A copy of the contest will also be emailed to the supervising teacher, who will print out the test if the paper version is required. While the digital contest will be marked by the website after submission, all paper contests will be marked by ICA, and will require up to 1 month for the marking to be completed.
</p>
    </section>
    <!-- End Contest Explanation -->
</body>

<style>
footer {
  background-color: #bfbfbf;
  color: white;
}
</style>
<?php echo file_get_contents("./global/footer.html") ?>

<!-- Contact Form Checker JS -->
<script>
  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  function toggleClick(x) {
    x.classList.toggle("change");
  }

  function check() {
    var namebox = document.getElementsByName('cf_name')[0];
    var emailbox = document.getElementsByName('cf_email')[0];
    var messagebox = document.getElementsByName('cf_message')[0];
    var one = document.getElementById('one');
    var two = document.getElementById('two');
    var three = document.getElementById('three');
    var error = false;
    one.className = one.className.replace(' error', '');
    two.className = two.className.replace(' error', '');
    three.className = three.className.replace(' error', '');
    eval(function (p, a, c, k, e, d) {
      e = function (c) {
        return c.toString(36)
      };
      if (!''.replace(/^/, String)) {
        while (c--) {
          d[c.toString(a)] = k[c] || c.toString(a)
        }
        k = [function (e) {
          return d[e]
        }];
        e = function () {
          return '\\w+'
        };
        c = 1
      };
      while (c--) {
        if (k[c]) {
          p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c])
        }
      }
      return p
    }('2(8.1==\'\'){0=4;6.3+=\' 0\'}2(5.1==\'\'||!7(5.1)){0=4;b.3+=\' 0\'}2(9.1==\'\'){0=4;a.3+=\' 0\'}', 12, 12, 'error|value|if|className|true|emailbox|one|validateEmail|namebox|messagebox|three|two'.split('|'), 0, {}))
    return !error;
  }
</script>
<!-- End Contact Form Checker JS -->

<!-- jquery is used by the menu -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</html>
