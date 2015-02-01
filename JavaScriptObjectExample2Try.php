<!DOCTYPE HTML>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Color Test</title>
<script type="text/javascript">
 function Color(r,g,b,a){
  this.red = r;
  this.green = g;
  this.blue = b;
  this.alpha = a;
}
var myColor = new Color(255,20,13,.2);
document.write("Green is " + myColor.green);

var myColor2 = new Color(255,137,13,.5);
document.write("Green is " + myColor2.green);
</script>
 </head>
 <body>

</body>
</html>