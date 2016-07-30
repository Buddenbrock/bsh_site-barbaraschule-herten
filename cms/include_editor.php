<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="minified/themes/default.min.css" type="text/css" media="all" />
<script type="text/javascript" src="minified/jquery.sceditor.bbcode.min.js"></script>

<script>
// Source: http://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
var loadCSS = function(url, callback){
  var link = document.createElement('link');
  link.type = 'text/css';
  link.rel = 'stylesheet';
  link.href = url;
  link.id = 'theme-style';

  document.getElementsByTagName('head')[0].appendChild(link);

  var img = document.createElement('img');
  img.onerror = function(){
    if(callback) callback(link);
  }
  img.src = url;
}

$(document).ready(function() {
  var initEditor = function() {
    $("textarea").sceditor({
      plugins: 'xhtml',
      style: "./minified/jquery.sceditor.default.min.css"
    });
  };

  $("#theme").change(function() {
    var theme = "./minified/themes/" + $(this).val() + ".min.css";

    $("textarea").sceditor("instance").destroy();
    $("link:first").remove();
    $("#theme-style").remove();

    loadCSS(theme, initEditor);
  });

  initEditor();
});
</script>
