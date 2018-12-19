<?php include 'header.php';?>

<body id="body">
<?php include 'navbar.php';?>

<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1>Come and Join Us</h1>
          <p>We don’t want your resume… If you have any awesomeness we’ll be glad to see you WORKING WITH US</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service Start -->
<section class="service">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2>Available Positions</h2>
        <p>Placeefy is a start-up and we love people who like to go beyond the normal call of the duty and can think out of the box. Surprise us with your passion, intelligence, creativity and hard work – and expect appreciation & rewards to follow.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="icon ion-coffee"></i>
          <h4>Business Developer</h4>
          <p>4 Vacancy</p> <p>Full time</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-compass"></i>
          <h4>Php Developer</h4>
          <p>2 Vacancy</p><p>Part time | Full time</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-image"></i>
          <h4>Marketing Manager</h4>
          <p> 2 Vacancy</p><p>Part time | Full time</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-bug"></i>
          <h4>Photographer</h4>
          <p>2 Vacancy </p><p>Part time | Full time</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-headphone"></i>
          <h4>Designer</h4>
          <p>2 Vacancy</p><p>Part time | Full time</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-leaf"></i>
          <h4>Sales Manger</h4>
          <p>2 Vacancy </p><p>Full time</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-planet"></i>
          <h4>Relationship Manager</h4>
          <p>2 Vacancy</p> <p>Part time | Full time</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-earth"></i>
          <h4>BPO</h4>
          <p>2 Vacancy</p><p>Part time | Full time</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-form">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>Apply Now</h2>
        </div>
      </div>
    </div>

        <div class="row">
            <form id="contact-form" >
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        
                        <div class="form-group">
                            <input name="applicant_name" type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input name="applicant_email" type="text" class="form-control" placeholder="Email Address">
                        </div>
                         <div class="form-group">
                            <input name="applicant_mobile" type="tel" class="form-control" placeholder="Contact Number">
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group">
                            <input name="applicant_skill" type="text" class="form-control" placeholder="Skill">
                        </div>
                        <div class="form-group">
                            <input name="applicant_experience" type="text" class="form-control" placeholder="Any Experiences">
                        </div>
                        
                            <button class="btn btn-default" type="submit">Submit Application</button>
                    </div>
                </div>
                <div class="error" id="error">Sorry Msg dose not sent</div>
                <div class="success" id="success">Message Sent</div>
            </form>
        </div>
 </div>
 </section>

 <?php 
    include 'navbar-bottom.php';
    include 'footer.php';?>


  </body>
  </html>