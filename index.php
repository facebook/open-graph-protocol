<?php
/**
 * The Open Graph Protocol website
 * 
 * The Open Graph protocol enables any web page to become a rich object in a social graph.
 * For instance, this is used on Facebook to allow any web page to have the same functionality
 * as any other object on Facebook.
 *
 * Visit https://ogp.me/.
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
  <head prefix="og: https://ogp.me/ns#">
    <meta charset="utf-8">
    <title>The Open Graph protocol</title>
    <meta name="description" content="The Open Graph protocol enables any web page to become a rich object in a social graph.">
    <script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
    <link rel="stylesheet" href="base.css" type="text/css">
    <meta property="og:title" content="Open Graph protocol">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ogp.me/">
    <meta property="og:image" content="https://ogp.me/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:image:alt" content="The Open Graph logo">
    <meta property="og:description" content="The Open Graph protocol enables any web page to become a rich object in a social graph.">
    <meta prefix="fb: https://ogp.me/ns/fb#" property="fb:app_id" content="115190258555800">
    <link rel="alternate" type="application/rdf+xml" href="https://ogp.me/ns/ogp.me.rdf">
    <link rel="alternate" type="text/turtle" href="https://ogp.me/ns/ogp.me.ttl">
  </head>
  <body>
    <div id="body">
    <div id="header">
      <h1>The Open Graph protocol</h1>
      <img alt="Open Graph protocol logo" src="https://ogp.me/logo.png" width="300" height="300">
    </div>
    <div id="content">
      <?php echo $html; ?>
    </div>
    <div id="footer">
      <p>The Open Graph protocol was originally created at Facebook and is inspired by <a href="https://en.wikipedia.org/wiki/Dublin_Core">Dublin Core</a>, <a href="https://googlewebmastercentral.blogspot.com/2009/02/specify-your-canonical.html">link-rel canonical</a>, <a href="https://microformats.org/">Microformats</a>, and <a href="https://en.wikipedia.org/wiki/RDFa">RDFa</a>. The specification described on this page is available under the <a href="https://openwebfoundation.org/legal/the-0-9-agreements---necessary-claims">Open Web Foundation Agreement, Version 0.9</a>. This website is <a href="https://github.com/facebook/open-graph-protocol">Open Source</a>. </p>
    </div>
    </div>

  </body>
</html>
