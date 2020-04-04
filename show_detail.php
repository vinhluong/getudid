<?php 
    $subject = "This is my UDID from iOS device";
    $body  = "Hello<br /> This is my UDID: {$_GET['UDID']} <br />";
    $body .= "Device product: {$_GET['DEVICE_PRODUCT']} <br />";
    $body .= "Device version: {$_GET['DEVICE_VERSION']} <br />";
    $body .= "Device name: {$_GET['DEVICE_NAME']} <br />";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>UDID</title>
        <meta name="viewport" content="width=device-width" />
    </head>
    <body>
        <div>
            <h1>Cen IOS Pubg Mobile Hack No JB</h1>
                <p>UDID: <span class=mono id="theList"> <?php echo $_GET['UDID']; ?></span></p>
                 <button id="copyButton" onclick="myCopyFunction()">Copy UDID.</button>
                <p>Device product: <?php echo $_GET['DEVICE_PRODUCT']; ?></p>
                <p>Device version: <?php echo $_GET['DEVICE_VERSION']; ?></p>
                <p>Device name: <?php echo $_GET['DEVICE_NAME']; ?></p>

                 <ul class="buttons">
                <li><a href="https://www.facebook.com/k3ndzy" class="button wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">Send Me</a></li>
                <li><a href="https://is.gd/CenIOSYT" class="button button-border button-transparent wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">Youtube</a></li>
				<li><a href="https://is.gd/CenIOSGROUP" class="button button-border button-transparent wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">Group Cen IOS</a></li>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xrkGDmR-xEA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</ul>
        </div>
    </body>
</html>
<script>
function myCopyFunction() {
  var myText = document.createElement("textarea")
  myText.value = document.getElementById("theList").innerHTML;
  myText.value = myText.value.replace(/&lt;/g,"<");
  myText.value = myText.value.replace(/&gt;/g,">");
  document.body.appendChild(myText)
  myText.focus();
  myText.select();
  document.execCommand('copy');
  document.body.removeChild(myText);
}
</script>
