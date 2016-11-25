<?php

session_start();
if(isset($_POST['upload']))
{
function uploadImageFile() { // Note: GD library is required for this function


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $iWidth = 160;
		$iHeight = 200; // desired image result dimensions
        $iJpgQuality = 90;

        if ($_FILES) {

            // if no errors and size less than 250kb
            if (! $_FILES['image_file']['error'] && $_FILES['image_file']['size'] < 250 * 1024) {
               if (is_uploaded_file($_FILES['image_file']['tmp_name'])) {
				        
                     //  $file_name = $_FILES['image_file']['name'];
                    // new unique filename
                    $sTempFileName = 'C:/xampp/htdocs/project/assets/image/' . md5(time().rand());
					
                     // $sTempFileName= $sTempFileNamee.$file_name;
                    // move uploaded file into cache folder
                    move_uploaded_file($_FILES['image_file']['tmp_name'], $sTempFileName);
                    
                    // change file permission to 644
                    @chmod($sTempFileName, 0644);

                    if (file_exists($sTempFileName) && filesize($sTempFileName) > 0) {
                        $aSize = getimagesize($sTempFileName); // try to obtain image info
                        if (!$aSize) {
                            @unlink($sTempFileName);
                            return;
                        }

                        // check for image type
                        switch($aSize[2]) {
                            case IMAGETYPE_JPEG:
                                $sExt = '.jpg';

                                // create a new image from file 
                                $vImg = @imagecreatefromjpeg($sTempFileName);
                                break;
                            case IMAGETYPE_PNG:
                                $sExt = '.png';

                                // create a new image from file 
                                $vImg = @imagecreatefrompng($sTempFileName);
                                break;
                            default:
                                @unlink($sTempFileName);
                                return;
                        }

                        // create a new true color image
                        $vDstImg = @imagecreatetruecolor( $iWidth, $iHeight );

                        // copy and resize part of an image with resampling
                        imagecopyresampled($vDstImg, $vImg, 0, 0, (int)$_POST['x1'], (int)$_POST['y1'], $iWidth, $iHeight, (int)$_POST['w'], (int)$_POST['h']);

                        // define a result image filename
                        $sResultFileName = $sTempFileName . $sExt;
						
                        // output image to file
                       imagejpeg($vDstImg, $sResultFileName, $iJpgQuality);
                        @unlink($sTempFileName);

                        return $sResultFileName;
                    }
                }
            }
        }
    }
	
}
 
                        
$sImage = uploadImageFile();
$b= basename( $sImage);
						
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	$query="update signup SET image= '".  $sImage."' , imagename= '".$b."'where username= '".$_SESSION['user1']."'";
	$a=mysql_query($query,$conn);
	
	
	
	
header("location:http://localhost/project/innnowellprofile.php");

}

?>

<html>
<head>

<!-- add styles -->

<link href="assets/Jcrop/css/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" />

<!-- add scripts -->
    <script src="assets/Jcrop/js/jquery.min.js"> </script>
	    <script src="assets/Jcrop/js/jquery.Jcrop.min.js"> </script>
		
		
		
		
		


<style>

* {
    margin: 0;
    padding: 0;
}
html {
    background-color:white;
}
header {
    background-color:rgba(33, 33, 33, 0.9);
    color:#fff;
    display:block;
    font: 14px/1.3 Arial,sans-serif;
    height:50px;
    position:relative;
}
header h2{
    font-size: 22px;
    margin: 0px auto;
    padding: 10px 0;
    width: 80%;
    text-align: center;
}
header a, a:visited {
    text-decoration:none;
    color:#fcfcfc;
}

.demo {
    margin: 20px auto;
    overflow: hidden;
    width: 960px;
}
.bheader {
    background-color:#0066ff;
    border-radius: 10px 10px 0 0;
    padding: 10px 0;
    text-align: center;
}
.bbody {
    color: #000;
    overflow: hidden;
    padding-bottom: 20px;
    text-align: center;

    background: -moz-linear-gradient(#ffffff, #f2f2f2);
    background: -ms-linear-gradient(#ffffff, #f2f2f2);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%, #f2f2f2));
    background: -webkit-linear-gradient(#ffffff, #f2f2f2);
    background: -o-linear-gradient(#ffffff, #f2f2f2);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f2f2f2');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f2f2f2')";
    background: linear-gradient(#ffffff, #f2f2f2);
}
.bbody h2, .info, .error {
    margin: 10px 0;
}
.step2, .error {
    display: none;
}
.error {
    font-size: 18px;
    font-weight: bold;
    color: red;
}
.info {
    font-size: 14px;
}
label {
    margin: 0 5px;
}
input {
    border: 1px solid #CCCCCC;
    border-radius: 10px;
    padding: 4px 8px;
    text-align: center;
    width: 70px;
}
.jcrop-holder {
    display: inline-block;
}
input[type=submit] {
    background: #e3e3e3;
    border: 1px solid #bbb;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 0 1px 1px #f6f6f6;
    box-shadow: inset 0 0 1px 1px #f6f6f6;
    color: #333;
    font: bold 12px/1 "helvetica neue", helvetica, arial, sans-serif;
    padding: 8px 0 9px;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
    width: 150px;
}
input[type=submit]:hover {
    background: #d9d9d9;
    -webkit-box-shadow: inset 0 0 1px 1px #eaeaea;
    box-shadow: inset 0 0 1px 1px #eaeaea;
    color: #222;
    cursor: pointer;
}
input[type=submit]:active {
    background: #d0d0d0;
    -webkit-box-shadow: inset 0 0 1px 1px #e3e3e3;
    box-shadow: inset 0 0 1px 1px #e3e3e3;
    color: #000;
}
</style>
<script>


// convert bytes into friendly format
function bytesToSize(bytes) {
    var sizes = ['Bytes', 'KB', 'MB'];
    if (bytes == 0) return 'n/a';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];
};

// check for selected crop region
function checkForm() {
    if (parseInt($('#w').val())) return true;
    $('.error').html('Please select a crop region and then press Upload').show();
    return false;
};

// update info by cropping (onChange and onSelect events handler)
function updateInfo(e) {
    $('#x1').val(e.x);
    $('#y1').val(e.y);
    $('#x2').val(e.x2);
    $('#y2').val(e.y2);
    $('#w').val(e.w);
    $('#h').val(e.h);
};

// clear info by cropping (onRelease event handler)
function clearInfo() {
    $('.info #w').val('');
    $('.info #h').val('');
};

// Create variables (in this scope) to hold the Jcrop API and image size
var jcrop_api, boundx, boundy;

function fileSelectHandler() {

    // get selected file
    var oFile = $('#image_file')[0].files[0];

    // hide all errors
    $('.error').hide();

    // check for image type (jpg and png are allowed)
    var rFilter = /^(image\/jpeg|image\/png)$/i;
    if (! rFilter.test(oFile.type)) {
        $('.error').html('Please select a valid image file (jpg and png are allowed)').show();
        return;
    }

    // check for file size
    if (oFile.size > 250 * 1024) {
        $('.error').html('You have selected too big file, please select a one smaller image file').show();
        return;
    }

    // preview element
    var oImage = document.getElementById('preview');

    // prepare HTML5 FileReader
    var oReader = new FileReader();
        oReader.onload = function(e) {

        // e.target.result contains the DataURL which we can use as a source of the image
        oImage.src = e.target.result;
        oImage.onload = function () { // onload event handler

            // display step 2
            $('.step2').fadeIn(500);

            // display some basic image info
            var sResultFileSize = bytesToSize(oFile.size);
            $('#filesize').val(sResultFileSize);
            $('#filetype').val(oFile.type);
            $('#filedim').val(oImage.naturalWidth + ' x ' + oImage.naturalHeight);

            // destroy Jcrop if it is existed
            if (typeof jcrop_api != 'undefined') {
                jcrop_api.destroy();
                jcrop_api = null;
                $('#preview').width(oImage.naturalWidth);
                $('#preview').height(oImage.naturalHeight);
            }

            setTimeout(function(){
                // initialize Jcrop
                $('#preview').Jcrop({
                    minSize: [32, 32], // min crop size
                    aspectRatio : 1, // keep aspect ratio 1:1
                    bgFade: true, // use fade effect
                    bgOpacity: .3, // fade opacity
                    onChange: updateInfo,
                    onSelect: updateInfo,
                    onRelease: clearInfo
                }, function(){

                    // use the Jcrop API to get the real image size
                    var bounds = this.getBounds();
                    boundx = bounds[0];
                    boundy = bounds[1];

                    // Store the Jcrop API in the jcrop_api variable
                    jcrop_api = this;
                });
            },3000);

        };
    };

    // read selected file as DataURL
    oReader.readAsDataURL(oFile);
}

</script>


</head>

<body>

  
        <div class="demo">
            <div class="bheader"><h2>Choose Image</h2></div>

<div class="bbody">

    <!-- upload form -->
    <form id="upload_form" enctype="multipart/form-data" method="post" action="" onsubmit="return checkForm()">
        <!-- hidden crop params -->
        <input type="hidden" id="x1" name="x1" />
        <input type="hidden" id="y1" name="y1" />
        <input type="hidden" id="x2" name="x2" />
        <input type="hidden" id="y2" name="y2" />

        <h2> </h2>
        <div><input type="file" name="image_file" id="image_file" onchange="fileSelectHandler()"  style="width:100px"/></div>

        <div class="error"></div>

        <div class="step2">
            <h2></h2>
            <img id="preview" />

            <div class="info">
                <label></label> <input type="hidden" id="filesize" name="filesize" />
                <label></label> <input type="hidden" id="filetype" name="filetype" />
                <label></label> <input type="hidden" id="filedim" name="filedim" />
                <label></label> <input type="hidden" id="w" name="w" />
                <label></label> <input type="hidden" id="h" name="h" />
            </div>

            <input type="submit" name="upload" value="Upload" />
        </div>
    </form>
</div>



</body>
</html>