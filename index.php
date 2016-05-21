<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thumbs Collection Test</title>
<meta name="description" content="Insert, Update, Delete using jQuery, PHP and MySQL">

<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">



<link rel="stylesheet" href="assets/blueimp/css/jquery.fileupload.css">
<link rel="stylesheet" href="assets/blueimp/css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="assets/blueimp/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="assets/blueimp/css/jquery.fileupload-ui-noscript.css"></noscript>
</head>

<body>
    


	<div class="container">
       <h2 class="form-signin-heading">Thumbs Collections</h2><hr />
		  <!-- Button trigger modal -->
<button type="button" class="btn-modal btn btn-primary btn-md" data-url="add_form.php" data-title="Add Image">
 <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Image
</button>
         <hr />
        
        <div class="content-loader">
       

    </div>
      

    <br />
    
<div class="footer">
Sample Code for File managenent via AJAX/JSON with PHP backend.<br/>
<ul>
<li>Bootstrap
<li>jQuery
<li>BlueIMP
<li>Datatables
</ul>
Coded by <a href="http://about.me/lucifer.dels" target="_blank">john_d</a>
Date: 05/21/2016
</div>
 </div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
     
    </div>
  </div>
</div>
    
	
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
    
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>



<script src="assets/blueimp/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="assets/blueimp/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="assets/blueimp/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="assets/blueimp/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="assets/blueimp/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="assets/blueimp/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="assets/blueimp/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="assets/blueimp/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="assets/blueimp/js/jquery.fileupload-ui.js"></script>

<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="assets/blueimp/js/cors/jquery.xdr-transport.js"></script>
<![endif]-->


</body>
</html>