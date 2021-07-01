<?php
//editor - create and edit templates http://signature.klienci.org/blog/wp-admin/admin.php?page=signature-plugin
require_once(ABSPATH . 'wp-config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
        </script>
<style>
* {
  box-sizing: border-box;
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.red{background-color:red; color:white;}
.blue{background-color:blue; color:white;}
</style>   
<style>     
			.hwt-container {
				background-color: #; 
			}
			.hwt-content {
				width: 760px;     
				height:300px;       
				padding: 20px;

			}
			.hwt-input:focus {
				outline-color: #495057;
			}
			.hwt-content mark {
				border-radius: 3px;
				background-color: #d0bfff;
			}
			.hwt-content mark.red {
				background-color: #ffc9c9;
			}
			.hwt-content mark.blue {
				background-color: #a3daff;
			}
			.hwt-content mark.yellow {
				background-color: #ffec99;
			}
.btn {background-color:darkorange!important;
border:1px solid orange;font-size:12px;}
		</style>      
</head>
<body>
<h2>Editor</h2>
<div class="containers" >    
<div class="row" >  
  <div class="col" style="background-color:#eff0f3;border-right:1px solid #ced4da">    
  <?php
  global $current_user;
get_currentuserinfo();
$current_user = wp_get_current_user();
$editorName =  $current_user->user_login;
$editor = $current_user ->ID;
?>
    <h2></h2>
    <p></p>  
    <? // UPLOAD ENGINE
function load_wp_media_files() {
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'load_wp_media_files' );   
       wp_enqueue_script('jquery');  
// This will enqueue the Media Uploader script
wp_enqueue_media();     
?>
</div-->
<script type="text/javascript">
jQuery(document).ready(function($){
    $('#upload-btn').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()                                           
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#image_url').val(image_url);    
        });
    });
}); 
</script>   
    <!--textarea class="form-control  mb-3" rows="3" id="editors" placeholder="Large textarea" height="100%" style="font-family:Consolas;font-size:12px;"></textarea-->
   <div id="ed"  style="margin-left:0px;margin-bottom:50px;background-color:#eff0f3;border-radius:5px;padding:20px;">
     <div class="col-sm9">
              <div class="alert alert-success" id="ok" role="alert" style="display:none">Template saved!</div> 
              <div class="input-group ">   
                <span class="input-group-text"  style="width:200px;font-size:12px;font-weight:normal;padding-left:20px;" id="upload-btn">Upload image</span>
              <input type="text" class="form-control" id="image_url" placeholder="" value="" >
            </div>
                <br>
              <div class="input-group ">
                <span class="input-group-text"  style="width:200px;font-size:12px;font-weight:normal;padding-left:20px;">Name of template</span>
              <input type="text" class="form-control" id="signatureName" placeholder="" value="" >
            </div>  <input type="hidden" id="li">
            </div>
            <p style="margin:20px"> </p>   
            <div class="col-sm9"> 
            <div class="input-group ">
              <h6>Avaiable variables</h6></div>       
                <div id = "variables">
                </div>
                </div>
            <p style="margin:10px"> </p>   
    <div class="col-sm-12">  
              <div class="input-group ">
              <textarea class="form-control  mb-3 hwt-input hwt-content" rows="30" id="editor" placeholder="Insert template"  height="300px" 
      style="font-family:Consolas;font-size:12px;background:#ffffff;border-radius:5px;border:1px solid #ced4da"></textarea>
            </div>
            </div>        
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="default" value="on">
  <label class="form-check-label" for="default" style="font-size:12px"" style="font-size:12px">Set as default template</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="active" value="on">
  <label class="form-check-label" for="active"  style="font-size:12px">Set as Active</label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label" for="active"  style="font-size:12px"> <h6><a href="https://www.iconfinder.com/" target="_blank" style="text-decoration:none;font-size:12px;color:green;FLOAT:RIGHT">ICON  FINDER</a></h6></label>
</div>
           <hr>  <div class="row">                                          
            <div class="col-md-4">
            <div class="input-group ">
                <span class="input-group-text"  style="width:100px;font-size:12px;font-weight:normal;padding-left:20px;">Utm Source</span>
               <input type="text" class="form-control" id="utm_source" placeholder="" value="footer">
            </div>
</div>
            <div class="col-md-4">
            <div class="input-group ">
                <span class="input-group-text"  style="width:100px;font-size:12px;font-weight:normal;padding-left:20px;">Utm Medium</span>
                 <input type="text" class="form-control" id="utm_medium" placeholder="" value="email">
            </div>
</div>
            <div class="col-md-4">
             <div class="input-group ">
                <span class="input-group-text"  style="width:100px;font-size:12px;font-weight:normal;padding-left:20px;">Campaign</span>
                  <input type="text" class="form-control" id="utm_campaign" placeholder="" value="">
            </div>
</div>
</div>
            <hr>
                <div class="row form-group">
   <div class="col-md-12">
      <!--input type="button" id="addBtn" value="Pobierz" class="btn py-2 px-5 text-dark btn"-->
      <input type="button" value="Save" id="sendata" class="btn py-2 px-5 text-dark btn">
     <hr> 
   </div>
   <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingZero">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <b><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                                                    </svg> Template list</b>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingZero" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <hr>
                                                <div id="template_list">
                                                    <ul class="list-group mb-3">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>           
   </div> 
</div>
  <div class="col" style="background-color:#eff0f3;">
    <h2></h2>
    <p></p>
    <div id="editor_x"  style="margin-left:20px;margin-right:20px;margin-top:35px;margin-bottom:50px;background-color:#fff;border-radius:5px;padding:20px;border:1px solid #ced4da"></div>
  </div>
</div>
 </div>
<script>     
         function copyToTarget(target) {
            return function copyDataHandler(evt) {
                evt = evt || event;
                var source = evt.target || srcElement; // target here being the source element of the event
                target.innerHTML = source.value;
            };
        }
            var source = document.getElementById('editor');
            source.oninput = copyToTarget(document.getElementById('editor_x'));
            var source = document.getElementById('signatureName');
            source.oninput = copyToTarget(document.getElementById('utm_campaign'));
const editor =  document.getElementById('editor');
function interpolate(str) {
    return function interpolate(o) {
        return str.replace(/{([^{}]*)}/g, function (a, b) {
            var r = o[b];
            return typeof r === 'string' || typeof r === 'number' ? r : a;
        });
    }
}
    $('#sendata').click(function(e){ 
   e.preventDefault(); 
    $.ajax({
      type:"POST",
      url:"<? echo plugins_url();?>/signaturez/add.php",
      dataType: "json",
      data:{
      'f':'add_signature',
      'signatureName':$('#signatureName').val(),
      'signature':btoa(unescape(encodeURIComponent($('#editor').val()))),
      'default':$('#default').is(':checked'),
      'active':$('#active').is(':checked'),
      'editor':'<?php echo $editor;?>' ,
      'li':$('#li').val(),
      'utm_source':$('#utm_source').val(),
      'utm_medium':$('#utm_medium').val(),
      'utm_campaign':$('#utm_campaign').val()
      },
    success: function(data, textStatus, jqXHR) {
    }
    }).done(function ( data ) {
   // alert('ok');
      var message = data[0].result; 
      var info  = data[0].last_id;         
      var variables = data[0].variables;
     // alert(info); 
         $('#li').val(info);
     if(message == '1'){
         $('#ok').show().delay(3000).fadeOut();
          $('#modal').modal("show");
          $("#zzz").modal("show"); 
      }else{
      } 
    });
  });
      $(document).ready(function($) {
    $.ajax({
      type:"POST",
      url:"<? echo plugins_url();?>/signaturez/add.php",
      dataType: "json",
      data:{
      'f':'check_variable'
      },
    success: function(data, textStatus, jqXHR) {
    }
    }).done(function ( data ) {
      var message = data[0].var; 
      var info  = data[0].w; 
      for (var i = 0; i < data.length; i++) {
      console.log(data[i][1]);
      ll =  data[i][1];
      //alert(ll);
      $('#variables').append("<span class='variable badge rounded-pill bg-success' iditem='{{"+ll+"}}' id='"+ll+"'>{{"+ll+"}}</span> ");
      }                     
            $('#template_list').on('click', 'li', function(){
            $('#template_list li').css({backgroundColor: '#0d6efd95'}); 
            //$('#template_list li').css({backgroundColor: ''});
            $.ajax({
                type: "POST",
                url: "<? echo plugins_url();?>/signaturez/add.php",
                dataType: "json",
                cache: false,
                data: {
                    'f': 'change_template',
                    'li': this.id
                },
                success: function(data, textStatus, jqXHR) {
                }
            }).done(function(data) {
                for (var i = 0; i < data.length; i++) {
                    $("#signatureName").html("");
                    id_template = data[i]['ids'];
                    title_template = data[i]['titles'];
                    signature_default = data[i]['signature_default'];
                    signature_status = data[i]['signature_status'];
                    content_templatess = data[i]['signature_contents'];
                    signature_variables = JSON.parse(data[i]['signature_variabless']);
                    for (var i = 0; i < signature_variables.length; i++) {
                        //    $("#formBuilder").append('<div class="input-group "><span class="input-group-text" style="width:100px;font-size:12px;font-weight:bold;">'+signature_variables[i]+'</span><input type="text" class="form-control" id="'+signature_variables[i]+'" placeholder="" value="'+signature_variables[i]+'"></div><br>');
                    }
                    // $("#t").deatach();
                    $('#li').val(id_template);
                    $('#signatureName').val(title_template);
                    $('#editor').val(content_templatess);
                    if(signature_status=='1'){
                        $("#active").prop( "checked", true );
                    }else{
                        $("#active").prop( "checked", false );
                    }
                    if(signature_default=='1'){
                        $("#default").prop( "checked", true );
                    }else{
                        $("#default").prop( "checked", false );
                    }
                    const template_id = $('#li').val();
                    if(id_template==template_id){
                        $('#'+id_template).css({backgroundColor: 'orange'});  
                    }
                    if (id_template > 0) {
                    //$('#template_list').append('<li class="list-group-item d-flex justify-content-between lh-sm" style="cursor:pointer;background-color:#0d6efd95"><div><h6 class="my-0">'+title_template+'</h6><small class="text-light">'+signature_variables+'</small></div><span class="text-muted"><span class="badge bg-primary rounded-pill">'+id_template+'</span></span></li>');
                    }
                    $("#formBuilder").html("");
                    for (var i = 0; i < signature_variables.length; i++) {
                        //$("#formBuilder").append('<div class="input-group "><span class="input-group-text" style="width:100px;font-size:11px;text-transform:capitalize;font-weight:bold;">'+signature_variables[i]+'</span><input type="text" class="form-control" id="'+signature_variables[i]+'" placeholder="" value=""></div><br>');
                    }
                }
                for (var i = 0; i < signature_variables.length; i++) {
                }
                /*$('.variable').click(function() {
                    var variables = $(this).attr("iditem");
                    var textarea = $("#editor");
                    textarea.val(textarea.val() + variables);
                });*/
                $('#valid :input').each(function() {
                    console.log($(this).serializeArray());
                });
                $('#valid :input').bind('change', function() {
                    var serialize = Array.from($('input'), e => e.id + "=" + e.value).join('&');
                    console.log(serialize);
                    return false;
                });
                $('#valid :input').bind('change click', function() {
                    var clickedBtnID = Array.from($('input'), e => e.id + "=" + e.value).join('&');
                    f = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "<? echo plugins_url();?>/signaturez/add.php",
                        dataType: "json",
                        cache: false,
                        data: {
                            'f': 'reload_templates',
                            'id': id_template,
                            'value': clickedBtnID
                        },
                        success: function(data, textStatus, jqXHR) {
                        }
                    }).done(function(data) {
                        for (var i = 0; i < data.length; i++) {
                            id_template = data[i]['id'];
                            title_template = data[i]['title'];
                            content_templatess = data[i]['signature_contents'];
                            signature_variables = JSON.parse(data[i]['signature_variabless']);
                            for (var i = 0; i < signature_variables.length; i++) {
                                // $("#formBuilder").append('<div class="input-group "><span class="input-group-text" style="width:100px;font-size:12px;font-weight:bold;">'+signature_variables[i]+'</span><input type="text" class="form-control" id="'+signature_variables[i]+'" placeholder="" value="'+signature_variables[i]+'"></div><br>');
                            }
                            // $("#t").deatach();
                            $("#code").val(content_templatess);
                            $("#t").html(content_templatess);
                            if (id_template > 0) {         
                                $('#template_list').append(
                                    '<li class="list-group-item d-flex justify-content-between lh-sm" style="cursor:pointer;background-color:#0d6efd95"><div><h6 class="my-0">'+title_template+'</h6><small class="text-light">'+signature_variables+'</small></div></span></li>');
                            }
                        }
                        for (var i = 0; i < signature_variables.length; i++) {}
                    });
                });
            });
        });
        $.ajax({
        type: "POST",
        url: "<? echo plugins_url();?>/signaturez/add.php",
        dataType: "json",
        cache: false,
        data: {
            'f': 'load_templates_editor'
        },
        success: function(data, textStatus, jqXHR) {
        }
    }).done(function(data) {
        for (var i = 0; i < data.length; i++) {
            id_template = data[i]['id'];
            title_template = data[i]['title'];
            signature_variables = JSON.parse(data[i]['signature_variables']);
            $('#template_list ul').append('<li id="' + id_template +
                '" class="list-group-item d-flex justify-content-between lh-sm" style="cursor:pointer;background-color:#0d6efd95;border-radius:5px; margin-bottom:5px"><div style="position:absolute"><h6 style=float:left;color:#0d6efd;font-weight:bold;border-radius:5px;padding:10px;width:100%!important;text-transform:uppercase;" class="y-0">' +
                title_template +
                '</h6></div><div style="position:relative;padding:10px;margin-top:10px;margin-bottom:20px;"><small class="text-light" style="float:left;width:100%;margin-top:10px;font-size:10px;text-transform:uppercase">' +
                signature_variables.toString().replace(/,/g, " ") +
                '</small></div><span class="text-muted"></span></li>');
        }
    });
    });
  });          
    function addtext(x) {
        var e = document.getElementById('editor');
        e.value+=x;
    }      
</script>
  <!-- Modal-->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ok</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            Tempalte saved.        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
</body>
</html>
