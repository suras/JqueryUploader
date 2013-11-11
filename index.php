
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Force latest IE rendering engine or ChromeFrame if installed -->
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta charset="utf-8">
    <title>Claim Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <!-- Generic page styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="css/jquery.fileupload.css">
    <link rel="stylesheet" href="css/jquery.fileupload-ui.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>

    <script src="js/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js"></script>
</head>
<body>

    <div class="container">
        <h1>Dummy Form</h1>
        <form id="claimForm" method="POST" enctype="multipart/form-data" action="send_mail.php">
            <input type="hidden" value="" name="file_path" id="file_path">
            <ol class="forms">
                <li>
                    <label for="ponumber">PO Number</label>
                    <input type="text" name="ponumber" id="ponumber" class="txt requiredField" />
                </li>	
                <li>
                    <label for="category">Product Type</label>
                    <select name="category" id="category" class="select requiredField">
                        <option value="" selected="selected">Select Product Type</option>
                        <option value="Bed">Bed</option>
                        <option value="Bedside">Bedside</option>
                        <option value="Tallboy">Tallboy</option>
                        <option value="ETU">TV Unit</option>
                        <option value="CT">Coffee Table</option>
                        <option value="ET">End Table</option>
                        <option value="Buffet">Buffet</option>
                        <option value="Desk">Office Desk</option>
                        <option value="Dining Chair">Dining Chair</option>
                        <option value="Dining Table">Dining Table</option>
                        <option value="Sofa Bed">Other</option>
                    </select>
                </li>
                <li id="bed-size">
                    <label for="size"><?php echo 'Bed Size';?></label>
                    <select id="size" name="size" class="select requiredField">
                        <option value="" selected="selected">Select Bed Size</option>
                        <option value="King Single">King Single</option>
                        <option value="Double">Double</option>
                        <option value="Single">Single</option>
                        <option value="King">King</option>
                        <option value="Queen">Queen</option>
                    </select>
                </li>
                <li id="etu-size">
                    <label for="modelsize"><?php echo 'Model Size'; ?></label>
                    <select id="modelsize" name="modelsize" class="select requiredField">
                        <option value="" selected="selected">Select TV unit size</option>
                        <option value="1.5m">1.5m</option>
                        <option value="1.8m">1.8m</option>
                        <option value="2m">2m</option>
                        <option value="2.4m">2.4m</option>
                        <option value="Other">Other</option>
                    </select>
                </li>
                <li>
                    <label for="productName">Product Name</label>
                    <input type="text" name="productName" id="productName" class="txt requiredField" />
                </li>
                <li>
                    <label for="productCode">Product Code</label>
                    <input type="text" name="productCode" id="productCode" class="txt requiredField" />
                </li>	
                <li>
                    <label for="color">Color</label>
                    <input type="text" name="color" id="color" class="txt" />
                </li>
                <li>
                    <label for="Quantity">Quantity</label>
                    <input type="text" name="quantity" id="quantity" class="txt requiredField" />
                </li>
                <li class="textarea"><label for="commentsText">Reasons to claim</label>
                    <textarea name="reason" id="commentsText" rows="5" cols="30" class="requiredField"></textarea>
                </li>
                <li>
                    <div class="clear">
                        <br>
                        <label for="fileupload">Upload Pictures</label><br />
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <div class="include-form"></div>
                    </div>                                                
                </li> 
                <li class="buttons">
                    <div class="move-to-last">
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                        <input class="submit button" type="submit" id="submit-button" value="Submit" />
                    </div>
                </li>
            </ol>

        </form>  

    </div>

    <div class="container">
        <form id="fileupload" action="" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="move-top-rel">
                <div class="move-top-abs">
                    <input type="hidden" value="test" name="path" id="path">
                    <div class="row fileupload-buttonbar">
                        <div class="col-lg-7">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files...</span>
                                <input type="file" name="files[]" multiple>
                            </span>
                            <!-- <button type="submit" class="btn btn-primary start">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start upload</span>
                            </button> -->
                            <button type="reset" class="btn btn-warning cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel upload</span>
                            </button>
                            <button type="button" class="btn btn-danger delete">
                                <i class="glyphicon glyphicon-trash"></i>
                                <span>Delete</span>
                            </button>
                            <input type="checkbox" class="toggle">
                            <!-- The global file processing state -->
                            <span class="fileupload-process"></span>
                        </div>
                        <!-- The global progress state -->
                        <div class="col-lg-5 fileupload-progress fade">
                            <!-- The global progress bar -->
                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                            </div>
                            <!-- The extended global progress state -->
                            <div class="progress-extended">&nbsp;</div>
                        </div>
                    </div>
                    <!-- The table listing the files available for upload/download -->
                    <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                </div>
            </div>
        </form>
    </div>

    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td>
                <span class="preview"></span>
            </td>
            <td>
                <p class="name">{%=file.name%}</p>
                <strong class="error text-danger"></strong>
            </td>
            <td>
                <p class="size">Processing...</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
                {% } %}
                {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
            <td>
                <span class="preview">
                    {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                    {% } %}
                </span>
            </td>
            <td>
                <p class="name">
                    {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                    {% } else { %}
                    <span>{%=file.name%}</span>
                    {% } %}
                </p>
                {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                {% } %}
            </td>
            <td>
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
                {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
                {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}
    </script>


    <script>
        $(document).ready(function() {
            $(document).on('change','#category',function () {
                var categoryName = $(this).val();
                $('#bed-size').css("display","none");
                $('#etu-size').css("display","none");
                if(categoryName == 'Bed'){
                    $('#bed-size').css("display","block");
                }else if(categoryName == 'ETU'){
                    $('#etu-size').css("display","block");
                }
            });
            $("#claimForm").validate({
                rules: {
                    ponumber: "required",
                    category: "required",
                    size: "required",
                    modelsize: "required",
                    productName: "required",
                    productCode: "required",
                    color: "required",
                    quantity: "required",
                    reason: "required"
                },
                messages: {
                    ponumber: "You forgot to enter  PO Number.",
                    category: "You forgot to enter category",
                    size: "You forgot to enter size",
                    modelsize: "You forgot to enter modelsize",
                    productName: "You forgot to enter product name.",
                    productCode: "You forgot to enter product code.",
                    color: "You forgot to enter color.",
                    quantity: "You forgot to enter quantity.",
                    reason: "You forgot to reasons. "
                }
            });

$(document).on("click","#submit-button",function(){
    if($("#claimForm").valid())
        return true
    else
        return false
});
});
</script>

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->

<script type="text/javascript">

    // $(".move-top-abs").hide();
    var path = $.now();
    $("#path").val(path.toString());
    $("#file_path").val(path.toString());

    $(document).on("DOMSubtreeModified",".move-top-abs",function(){
        $(this).css("top","-"+($(this).height()+200)+"px");
        $(".include-form").height($(this).height());
    });
    /*$(document).on("change","#ponumber,#productName",function(){
        var path = $("#ponumber").val()+$("#productName").val()+$.now();
        $("#path").val(path.toString());
        $("#form_path").val(path.toString());
       
    });*/


</script>

</body> 
</html>
