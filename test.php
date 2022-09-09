<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Backstretch: a simple jQuery plugin that allows you to add a dynamically-resized background image to any page</title>
	<link href='http://fonts.googleapis.com/css?family=Gravitas+One' rel='stylesheet' type='text/css'>
	<link href="http://srobbin.github.com/chosen/chosen.css" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=1024">
	<link href="styles.css?v=3" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="content">

        <h2>Demos</h2>
        <button id="outside" class="demo-change btn btn-info">Click to show Image 1</button>
        <button id="cheers" class="demo-change btn btn-info">Click to show Image 2</button>
        <div id="demo" class="snippet">
        </div>
        <hr />

        <h2>Where can I get it?</h2>
        <p>
            If you are interested in learning more about Backstretch, it's recommended that you view <a href="https://github.com/srobbin/jquery-backstretch" title="Backstretch on GitHub">the project on GitHub</a>.<br />
            There, you will find the source code, and additional options that the script accepts.
        </p>
        <p><a href="https://raw.github.com/srobbin/jquery-backstretch/master/jquery.backstretch.min.js" class="btn btn-large btn-success download">Download Backstretch Now</a><br />
        <a class="download-alternate" href="http://cdnjs.com/#jquery-backstretch">link to a hosted copy on cdnjs.com</a><br />
        <a class="download-alternate" href="https://github.com/srobbin/jquery-backstretch/zipball/master">or download the entire project, including examples.</a></p>
        <hr />

        <h2>Support</h2>
        <p>Basic support is offered through <a href="https://github.com/srobbin/jquery-backstretch/issues">Github's issues tracker</a>. Many requests are resolved through the help of fellow Backstretch users and myself, however assistance is not guaranteed or timely.</p>
        <p>If you are in need of immediate support, <a href="https://www.paypal.com/cgi-bin/webscr?business=srobbin@gmail.com&amp;cmd=_xclick&amp;currency_code=USD&amp;amount=17&amp;item_name=Backstretch%20Email%20Support">Email Support is available for $17</a>. Email Support provides you with direct email access to me, and allows me to set time aside to help solve your problem quickly.</p>
        <hr />

        <h2>Other jQuery Plugins</h2>
        <p>If you like this plugin, feel free to check out some of the others I've built.</p>
        <ul class="plugins">
            <li>
                <h3><a href="../intelligist/" title="jQuery Intelligist plugin">Intelligist</a></h3>
                <p>
                    Share and demo code in-page, using<br />GitHub gists.
                </p>
            </li>
            <li>
                <h3><a href="../approach/" title="jQuery Approach plugin">Approach</a></h3>
                <p>
                    Animate CSS properties based on<br> distance to an object.
                </p>
            </li>
        </ul>

        <div class="footer">
            <hr />
            &copy; 2012 Robbin & Co.
            <span>This plugin is distributed under the <a href="https://raw.github.com/srobbin/jquery-backstretch/master/LICENSE-MIT">MIT license</a>.</span>
        </div>

        <a href="https://github.com/srobbin/jquery-backstretch"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://a248.e.akamai.net/camo.github.com/4c7dc970b89fd04b81c8e221ba88ff99a06c6b61/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67" alt="Fork me on GitHub"></a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://srobbin.github.com/chosen/chosen.jquery.min.js"></script>
    <script src="http://srobbin.github.com/intelligist/jquery.intelligist.min.js?v=1.0.5"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.3/jquery.backstretch.min.js"></script>
    <script>
        // Preload the images
        var images = [
              "http://dl.dropbox.com/u/515046/www/outside.jpg"
            , "http://dl.dropbox.com/u/515046/www/garfield-interior.jpg"
            , "http://dl.dropbox.com/u/515046/www/cheers.jpg"
            , "http://dl.dropbox.com/u/515046/www/coffee-light.jpg"
          ];

        // A little script for preloading all of the images
        // It"s not necessary, but generally a good idea
        $(images).each(function(){
            $("<img/>")[0].src = this;
        });

        $("#demo").intelligist({
            "1976643": "Basic usage"
          , "3668973": "On a block-level element"
          , "1978678": "Using Backstretch as a slideshow"
          , "1978737": "Attach Backstretch to click events"
        }, {
            exec: true
          , before: function(oldGistId, newGistId) {
                var $clickers = $("button#outside, button#cheers");

                // Destroy the old Backstretches
                $(":backstretch").each(function() {
                    $(this).data("backstretch").destroy();
                });

                // Unbind click events, in case they view the demo twice
                $("#outside, cheers").unbind("click");

                // Special stuff for the click demo
                if( newGistId == "1978737" ) {
                    // The click slideshow should start off with a backstretch
                    $.backstretch( images[1] );
                    $clickers.show();
                } else {
                    $clickers.hide();
                }
            }
          , after: function() {
                // Hack to overcome delay in Gist resize
                try {
                    setInterval(function() {
                        $("#demo").data("backstretch") && $("#demo").data("backstretch").resize();
                    }, 1000);
                } catch(err) {}
            }
        });
    </script>
</body>