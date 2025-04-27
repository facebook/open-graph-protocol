<?php
/**
 * The Open Graph Protocol website
 * 
 * The Open Graph protocol enables any web page to become a rich object in a social graph.
 * For instance, this is used on Facebook to allow any web page to have the same functionality
 * as any other object on Facebook.
 *
 * Visit http://ogp.me/.
 *
 * @author Facebook team & GitHub contributors (see https://github.com/facebook/open-graph-protocol/graphs/contributors)
 */

$base_dir = dirname( __FILE__ );

$markdown = @file_get_contents( $base_dir . '/content/index.markdown' );

if (!$markdown) {
  header( 'HTTP/1.1 500 Internal Server Error', true, 500 );
  exit;
}

require_once 'lib/Michelf/Markdown.inc.php';

use \Michelf\Markdown;

$html = Markdown::defaultTransform($markdown);
?>
<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <title>The Open Graph protocol</title>
    <meta name="description" content="The Open Graph protocol enables any web page to become a rich object in a social graph.">
    <script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
    <link rel="stylesheet" href="base.css" type="text/css">
    <meta property="og:title" content="Open Graph protocol">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://ogp.me/">
    <meta property="og:image" content="http://ogp.me/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:description" content="The Open Graph protocol enables any web page to become a rich object in a social graph.">
    <meta prefix="fb:http://ogp.me/ns/fb#" property="fb:app_id" content="115190258555800">
    <link rel="alternate" type="application/rdf+xml" href="http://ogp.me/ns/ogp.me.rdf">
    <link rel="alternate" type="text/turtle" href="http://ogp.me/ns/ogp.me.ttl">
  </head>
  <body>
    <div id="body">
    <div id="header">
      <h1>The Open Graph protocol</h1>
      <img alt="Open Graph protocol logo" src="http://ogp.me/logo.png" width="300" height="300">
    </div>
    <div id="content">
      <?php echo $html; ?>
    </div>
    <div id="footer">
      <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fogp.me%2F&send=false&layout=standard&width=450&show_faces=true&action=like&colorscheme=light&height=80&appId=115190258555800" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
      <p>The Open Graph protocol was originally created at Facebook and is inspired by <a href="http://en.wikipedia.org/wiki/Dublin_Core">Dublin Core</a>, <a href="http://googlewebmastercentral.blogspot.com/2009/02/specify-your-canonical.html">link-rel canonical</a>, <a href="http://microformats.org/">Microformats</a>, and <a href="http://en.wikipedia.org/wiki/RDFa">RDFa</a>. The specification described on this page is available under the <a href="http://www.openwebfoundation.org/legal/the-0-9-agreements---necessary-claims">Open Web Foundation Agreement, Version 0.9</a>. This website is <a href="https://github.com/facebook/open-graph-protocol">Open Source</a>. Last updated <?php $updated_time = filemtime( $base_dir . '/content/index.markdown' ); ?><time pubdate="<?php echo date('c', $updated_time); ?>"><?php date_default_timezone_set('UTC'); echo date( 'F dS, Y', $updated_time ); ?></time></p>
    </div>
    </div>
<script type="text/javascript">
var _sf_async_config={uid:1415,domain:"ogp.me"};
(function(){
  function loadChartbeat() {
    window._sf_endpt=(new Date()).getTime();
    var e = document.createElement('script');
    e.setAttribute('language', 'javascript');
    e.setAttribute('type', 'text/javascript');
    e.setAttribute('src',
       (("https:" == document.location.protocol) ? "https://s3.amazonaws.com/" : "http://") +
       "static.chartbeat.com/js/chartbeat.js");
    document.body.appendChild(e);
  }
  var oldonload = window.onload;
  window.onload = (typeof window.onload != 'function') ?
     loadChartbeat : function() { oldonload(); loadChartbeat(); };
})();

</script>
  </body>
</html>
