<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--contact.php-->
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title>About Us</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="refresh" content="60" />
    <link rel="stylesheet" type="text/css" href="css/global.css" />
    <script type="text/javascript" src="scripts/contact.js"></script>
  </head>

  <body>
		<div class="Page">
      <?php
			include("common/header.html");
			?>

			<div class="MainContent">
        <div class="Breadcrumbs">
					Home -> Contact
          <br /><br />
				</div>

        <!--Contact form goes here-->
        <form id="contactForm" action="" onsubmit="validateContactForm()">
          <fieldset>
            <legend>Contact us</legend><br />
            Name:<br />
            <input type="text" name="name" size="30" /><br /><br />
            Email:<br />
            <input type="text" name="email" size="35" /><br /><br />
            Subject:<br />
            <input type="text" name="subject" size="50" /><br /><br />
            Message:<br />
            <textarea name="message" rows="15" cols="60"></textarea><br /><br />
            <input type="reset" value="Reset Form" />
            <input type="submit" value="Submit Message" />
          </fieldset>
        </form>

      </div>
      <?php
			include("common/footer.html");
			?>
		</div>
	</body>
</html>
