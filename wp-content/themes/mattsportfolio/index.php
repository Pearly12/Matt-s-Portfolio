<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <?php wp_head() ?>
  </head>
  <body>
  <div class="site-head">
    <div class="row">
        <h1 style="margin-top: 20px;" class="text-center site-title">Matthew Furlong</h1>
    </div>
    <div class="row menu-centered">
        <ul class="menu ">
            <li><a target="_blank" href="https://drive.google.com/file/d/1WaTHgf3Y8-IGReS5CRptTllUIWzaTZ5K/view?usp=sharing"><i class="fas fa-file"></i><span>Resume</span></a></li>
            <li><a target="_blank" href="https://github.com/Pearly12?tab=repositories"><i class="fab fa-github"></i><span>GitHub</span></a></li>
            <li><a onclick="showContact()" ><i class="fas fa-address-book"></i><span>Contact</span></a></li>
        </ul>
    </div>
</div>
<hr/>
      <?php 
        $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        // does 'mailsend' exist within the URL?
        if(strpos($fullUrl, "mailsend") == true) {
          echo "<div class='row'>
                  <div style='text-align: center;' class='callout success' data-closable> 
                    <p>Thank you for contacting me. I will be in touch soon :)</p> 
                    <button class='close-button' aria-label='Dismiss' type='button' data-close> 
                    <span aria-hidden='true'>&times;</span></button>
                  </div>
                </div>";
        } else if(strpos($fullUrl, "didnotsend") == true) {
          echo "<div class='row'>
                  <div class='callout alert' data-closable> 
                    <p>The email did not send. Please try again.</p> 
                    <button class='close-button' aria-label='Dismiss' type='button' data-close> 
                    <span aria-hidden='true'>&times;</span></button>
                  </div>
                </div>";
        }
      ?>
    </div>
    <div class="row projects">
        <?php 
          $projects = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type' => 'project'
          )); 

          while($projects->have_posts()){ 
            $projects->the_post()
            ?> 
            <div class="column small-12 medium-12 large-4">
              <div class="card card-stylings">
                      <div class="card-divider"><?php the_title(); ?></div>
                      <a href="<?php echo get_field('live_site_link_value') ?>"><img src="<?php echo esc_url(get_field('project_image')['url']); ?>"></img></a>
                      <div class="card-section">
                          <!-- test line below for functionality without a code value -->
                          <h4><a target="_blank" href="<?php echo get_field('live_site_link_value') ?>">Live Site</a> <?php if(get_field('code_link_value') !== ""){?>- <a target="_blank" href="<?php echo get_field('code_link_value');?>">Git</a><?php } ?> </h4>
                          <p><?php the_content(); ?></p>
                          <?php echo get_field('project_list'); ?>
                      </div>
                  </div>
             </div>
        <?php } ?>
    </div>

  <div class="contact-section">
    <div id="contact" class="row">
      <div class="small-12 large-6 columns">
        <h3>Contact Me</h3>
        <p>
          Email: matt.furlong.12@gmail.com <br />
          Phone: (289) 990-9279
        </p>
      </div>

      <div class="small-12 large-6 columns">    
        <form action="" method="POST">
        <label>Name
          <input id="contactName" name="contactName" type="text" placeholder="Your Name" required/>
        </label>
        <label
          >Email
          <input name="email" type="email" placeholder="Your Email" required />
        </label>
        <label>
          Message
          <textarea name="message" placeholder="Enter your message here" row="4" required></textarea>
        </label>
        <input name="submitEmail" type="submit" class="button expanded" value="Submit" style="background-color: #E09B41;"/>
        </form>
      </div>
          </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script>    
        function showContact(){
        document.getElementById("contactName").focus();
        document.getElementById("contactName").select();
        document.getElementById("contactName").scrollIntoView({behavior: 'smooth'});
        return false;
      };
    </script>
  </body>
</html>
