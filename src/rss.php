<!doctype html>

<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('http://www.greenstate.com/feed/');

$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

$x=$xmlDoc->getElementsByTagName('item');

?>

<html lang="en-US">
  <head>
    <title>Greenstate.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="http://projects.sfchronicle.com/shared/js/jquery.min.js"></script>
    <script src="https://pym.nprapps.org/pym.v1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css?1">
  </head>
  
  <body>

    <main class="container">

      <div id="embed-infobox">
        <div class="project-logo small">
          <a  href="http://www.greenstate.com/" target="_blank"><img src="./assets/logos/gs_logo.png"></img></a>
        </div>
        <p class="subtitle">Related content</p>
        
        <?php 

          for ($i=0; $i<=3; $i++) {
            $item_title=$x->item($i)->getElementsByTagName('title')
            ->item(0)->childNodes->item(0)->nodeValue;
            $item_link=$x->item($i)->getElementsByTagName('link')
            ->item(0)->childNodes->item(0)->nodeValue;

            echo ("<div class='link'><a href='" . $item_link . "' target='_blank'>" . $item_title . "</a></div>");
          }
        ?>

        <div class="deck">Powered by The San Francisco Chronicle, GreenState is a cannabis-infused lifestyle site with a West Coast vibe.</div>

      </div>

    </main>
  </body>
</html>
