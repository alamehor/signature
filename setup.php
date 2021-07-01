<?php
require_once ABSPATH . 'wp-config.php';
include_once ABSPATH . "wp-includes/class-phpass.php";
?>
 <!DOCTYPE html>
 <html>

 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

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

     .red {
         background-color: red;
         color: white;
     }

     .blue {
         background-color: blue;
         color: white;
     }
     </style>


     <style>
     .hwt-container {
         background-color: #;
     }

     .hwt-content {
         width: 760px;
         height: 300px;
         padding: 20px;
         /*border: 1px solid #adb5bd;
				color: inherit;
                border-radius:5px;
				font: auto/auto 'Droid Sans Mono', sans-serif;  */
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

     .btn {
         background-color: darkorange !important;
         border: 1px solid orange;
         font-size: 12px;
     }
     </style>
 </head>

 <body>

     <h2>Editor</h2>
     <div class="containers">
         <div class="row">
             <div class="col" style="background-color:#eff0f3;border-right:1px solid #ced4da">
                 <?php

global $current_user;
get_currentuserinfo();

$current_user = wp_get_current_user();
$editorName = $current_user->user_login;
$editor = $current_user->ID;

?>
                 <h2></h2>
                 <p></p>

                 <form method="post" action="">
                     <?php
if ($_POST) {
    $password = esc_sql($_POST['password']);
    $wp_hash = new PasswordHash(8, true);
    $passwd = $wp_hash->HashPassword($password);
    echo "<div><p>The password <code>" . $password . "</code>, when hashed/salted/encrypted, becomes <strong><code>" . $passwd . "</code></strong></p></div>";

    if (get_option('signature_passwd') !== false) {

        // The option already exists, so update it.
        update_option('signature_passwd', $passwd);

    } else {

        // The option hasn't been created yet, so add it with $autoload set to 'no'.
        add_option('signature_passwd', $passwd, '', 'yes');
    }

}
?>

                     <div class="input-group ">
                         <span class="input-group-text"
                             style="width:100px;font-size:12px;font-weight:normal;padding-left:20px;">Password</span>
                         <input id="inPwd" type="password" name="password" value="" />
                         <input type="submit" value="Generate" />
                     </div>
                 </form>


                 <hr>

                 <div id="addVariable">
                     <div class="row">
                         <div class="col-md-3">

                             <div class="input-group ">
                                 <span class="input-group-text"
                                     style="width:100px;font-size:12px;font-weight:normal;padding-left:20px;">Variable
                                     name</span>
                                 <input type="text" class="form-control" id="variableName" placeholder="" value="">

                             </div>
                         </div>
                         <div class="col-md-3">

                             <div class="input-group ">
                                 <span class="input-group-text"
                                     style="width:100px;font-size:12px;font-weight:normal;padding-left:20px;">Valitation
                                     type</span>


                                 <select id="validationType" class="form-select" aria-label="Default select example">
                                     <option selected>Open this select menu</option>
                                     <option value="novalidate">No validate</option>
                                     <option value="text">Text validator</option>
                                     <option value="phone">Phone valitator</option>
                                     <option value="url">Url validator</option>
                                     <option value="number">Number validator</option>
                                 </select>

                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="input-group ">
                                 <input type="submit" id="generateVariable" value="Generate" />

                             </div>
                         </div>
                     </div>
                 </div>
                 <hr>
                 <!--textarea class="form-control  mb-3" rows="3" id="editors" placeholder="Large textarea" height="100%" style="font-family:Consolas;font-size:12px;"></textarea-->
                 <div id="ed"
                     style="margin-left:0px;margin-bottom:50px;background-color:#eff0f3;border-radius:5px;padding:20px;">
                     <div class="col-sm9">
                         <div class="alert alert-success" id="ok" role="alert" style="display:none">Template saved!
                         </div>

                         <br>

                         <input type="hidden" id="li">
                     </div>
                     <p style="margin:20px"> </p>
                     <div class="col-sm9">
                         <div class="input-group ">
                             <h6>Avaiable variables</h6>
                         </div>
                         <div id="variables">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <td>Name</td>
                                         <td>Status</td>
                                         <td>Verification</td>
                                         <td>Delete</td>
                                     </tr>
                                 </thead>
                             </table>

                         </div>
                     </div>
                     <p style="margin:10px"> </p>
                     <hr>
                 </div>
             </div>
         </div>
     </div>
     <script>
     $('#sendata').click(function(e) {
         e.preventDefault();
         $.ajax({
             type: "POST",
             url: "<? echo plugins_url();?>/signaturez/add.php",
             dataType: "json",
             data: {
                 'f': 'add_signature',
                 'signatureName': $('#signatureName').val(),
                 'signature': btoa(unescape(encodeURIComponent($('#editor').val()))),
                 'default': $('#default').is(':checked'),
                 'active': $('#active').is(':checked'),
                 'editor': '<?php echo $editor; ?>',
                 'li': $('#li').val()
             },
             success: function(data, textStatus, jqXHR) {
             }
         }).done(function(data) {
             // alert('ok');
             var info = data[0].last_id;
             var message = data[0].result;
             if (info.length > 0) {

                 $('#li').val(info);
             }
             var variables = data[0].variables;

             if (message == '1') {
                 $('#ok').show().delay(3000).fadeOut();
                 $('#modal').modal("show");
                 $("#zzz").modal("show");
             } else {

             }
         });
     });

     $(document).ready(function($) {
         $('#generateVariable').click(function(e) {

             //alert($('#variableName').val());
             e.preventDefault();
             $.ajax({
                 type: "POST",
                 url: "<? echo plugins_url();?>/signaturez/add.php",
                 dataType: "json",
                 data: {
                     'f': 'add_variable',
                     'variableName': $('#variableName').val(),
                     'validationType': $('#validationType').val(),
                     'editor': '<?php echo $editor; ?>'
                 },

                 success: function(data, textStatus, jqXHR) {

                     $.ajax({
                         type: "POST",
                         url: "<? echo plugins_url();?>/signaturez/add.php",
                         dataType: "json",
                         data: {
                             'f': 'check_variable_editor'
                         },

                         success: function(data, textStatus, jqXHR) {

                         }
                     }).done(function(data) {

                         for (var i = 0; i < data.length; i++) {
                             console.log(data[i][1]);
                             v_id = data[i][4];
                             v_name = data[i][1];
                             v_status = data[i][2];
                             v_validate = data[i][3];

                             if (v_status == '1') {
                                 v_text = 'Active';
                             }
                             if (v_status == '0') {
                                 v_text = 'Inactive';
                             }

                             $('#variables table').append(
                                 "<tr style='border-bottom:1px solid #ddd'><td width='200px'><span class='variable badge rounded-pill bg-success' iditem='{{" +
                                 v_name + "}}' id='" + v_name + "'>{{" +
                                 v_name +
                                 "}}</td><td width='100px'><button type='button' id=" +
                                 v_id +
                                 " class='status btn btn-secondary btn-sm'>" +
                                 v_text + "</button> </td><td>" + v_validate +
                                 "</td><td><button type='button' id=" + v_id +
                                 " class='delete btn btn-secondary btn-sm'>Delete(not working)</button></td></tr>"
                                 );
                         }
                     });
                 }
             }).done(function(data) {
                 // alert('ok');
                 var message = data[0].result;

                 var info = data[0].last_id;
                 var variables = data[0].variables;

                 $('#li').val(info);

                 if (message == '1') {
                     $('#ok').show().delay(3000).fadeOut();
                     $('#modal').modal("show");
                     $("#zzz").modal("show");
                 } else {
                 }
             });
         });

         $.ajax({
             type: "POST",
             url: "<? echo plugins_url();?>/signaturez/add.php",
             dataType: "json",
             data: {
                 'f': 'check_variable_editor'
             },

             success: function(data, textStatus, jqXHR) {

             }
         }).done(function(data) {

             for (var i = 0; i < data.length; i++) {
                 console.log(data[i][1]);
                 v_id = data[i][4];
                 v_name = data[i][1];
                 v_status = data[i][2];
                 v_validate = data[i][3];

                 if (v_status == '1') {
                     v_text = 'Active';
                 }
                 if (v_status == '0') {
                     v_text = 'Inactive';
                 }

                 $('#variables table').append(
                     "<tr style='border-bottom:1px solid #ddd'><td width='200px'><span class='variable badge rounded-pill bg-success' iditem='{{" +
                     v_name + "}}' id='" + v_name + "'>{{" + v_name +
                     "}}</td><td width='100px'><button type='button' id=" + v_id +
                     " class='status btn btn-secondary btn-sm'>" + v_text + "</button> </td><td>" +
                     v_validate + "</td><td><button type='button' id=" + v_id +
                     " class='delete btn btn-secondary btn-sm'>Delete(not working)</button></td></tr>"
                     );



             }

             $("button").click(function(e) {
                 e.preventDefault();
                 $.ajax({
                     type: "POST",
                     url: "<? echo plugins_url();?>/signaturez/add.php",
                     dataType: "json",
                     data: {
                         'f': 'change_status',
                         'i': this.id
                     },
                     success: function(data, textStatus, jqXHR) {
                     }
                 }).done(function(data) {

                     for (var i = 0; i < data.length; i++) {
                         //console.log(data[i][1]);
                         v_id = data;
                         v_name = data[i][1];
                         v_status = data[i][2];
                         v_validate = data[i][3];

                         if (v_status == '1') {
                             v_text = 'Active';
                             $(this.id).html(v_text);
                         }
                         if (v_status == '0') {
                             v_text = 'Inactive';
                             $(this.id).html(v_text);
                         }

                         // $('#variables table').append("<tr style='border-bottom:1px solid #ddd'><td width='200px'><span class='variable badge rounded-pill bg-success' iditem='{{"+v_name+"}}' id='"+v_name+"'>{{"+v_name+"}}</td><td width='100px'><button type='button' id="+v_id+" class='status btn btn-secondary btn-sm'>"+v_text+"</button> </td><td>"+v_validate+"</td></tr>");

                     }

                     var message = data[0].result;
                     now = $('#' + data[0].id).text();

                     if (message == '1' && now == 'Inactive') {
                         v_text = 'Active';
                         $('#' + data[0].id).html(v_text);
                     } else if (message == '1' && now == 'Active') {
                         v_text = 'Inactive';
                         $('#' + data[0].id).html(v_text);
                     } else {
                         v_text = 'No value';
                         $('#' + data[0].id).html(v_text);
                     }
                 });
             });

             //$('#template_list ul li').click(function() {
             $('#template_list').on('click', 'li', function() {

                 $('#template_list li').css({
                     backgroundColor: '#0d6efd95'
                 });
                 $.ajax({
                     type: "POST",
                     url: "<? echo plugins_url();?>/signaturez/add.php",
                     dataType: "json",
                     cache: false,
                     data: {
                         'f': 'change_template',
                         'li': this.id
                     },
                     success: function(data, textStatus, jqXHR) {}
                 }).done(function(data) {
                     for (var i = 0; i < data.length; i++) {
                         $("#signatureName").html("");
                         id_template = data[i]['ids'];
                         title_template = data[i]['titles'];
                         signature_default = data[i]['signature_default'];
                         signature_status = data[i]['signature_status'];
                         content_templatess = data[i]['signature_contents'];
                         signature_variables = JSON.parse(data[i][
                             'signature_variabless']);
                         for (var i = 0; i < signature_variables.length; i++) {
                             //    $("#formBuilder").append('<div class="input-group "><span class="input-group-text" style="width:100px;font-size:12px;font-weight:bold;">'+signature_variables[i]+'</span><input type="text" class="form-control" id="'+signature_variables[i]+'" placeholder="" value="'+signature_variables[i]+'"></div><br>');
                         }
                         $('#li').val(id_template);
                         $('#signatureName').val(title_template);
                         $('#editor').val(content_templatess);

                         if (signature_status == '1') {
                             $("#active").prop("checked", true);
                         } else {
                             $("#active").prop("checked", false);
                         }


                         if (signature_default == '1') {
                             $("#default").prop("checked", true);
                         } else {
                             $("#default").prop("checked", false);
                         }

                         const template_id = $('#li').val();

                         if (id_template == template_id) {
                             $('#' + id_template).css({
                                 backgroundColor: 'orange'
                             });

                         }

                         if (id_template > 0) {
                             //$('#template_list').append('<li class="list-group-item d-flex justify-content-between lh-sm" style="cursor:pointer;background-color:#0d6efd95"><div><h6 class="my-0">'+title_template+'</h6><small class="text-light">'+signature_variables+'</small></div><span class="text-muted"><span class="badge bg-primary rounded-pill">'+id_template+'</span></span></li>');
                         }
                         $("#formBuilder").html("");
                         for (var i = 0; i < signature_variables.length; i++) {
                             //$("#formBuilder").append('<div class="input-group "><span class="input-group-text" style="width:100px;font-size:11px;text-transform:capitalize;font-weight:bold;">'+signature_variables[i]+'</span><input type="text" class="form-control" id="'+signature_variables[i]+'" placeholder="" value=""></div><br>');
                         }
                     }
                     for (var i = 0; i < signature_variables.length; i++) {}
                     $('#valid :input').each(function() {
                         console.log($(this).serializeArray());
                     });
                     $('#valid :input').bind('change', function() {

                         var serialize = Array.from($('input'), e => e.id +
                             "=" + e.value).join('&');
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
                             success: function(data, textStatus,
                             jqXHR) {}
                         }).done(function(data) {
                             for (var i = 0; i < data.length; i++) {
                                 id_template = data[i]['id'];
                                 title_template = data[i]['title'];
                                 content_templatess = data[i][
                                     'signature_contents'
                                 ];
                                 signature_variables = JSON.parse(data[
                                     i]['signature_variabless']);
                                 for (var i = 0; i < signature_variables
                                     .length; i++) {
                                     // $("#formBuilder").append('<div class="input-group "><span class="input-group-text" style="width:100px;font-size:12px;font-weight:bold;">'+signature_variables[i]+'</span><input type="text" class="form-control" id="'+signature_variables[i]+'" placeholder="" value="'+signature_variables[i]+'"></div><br>');
                                 }
                                 // $("#t").deatach();
                                 $("#code").val(content_templatess);
                                 $("#t").html(content_templatess);
                                 if (id_template > 0) {
                                     $('#template_list').append(
                                         '<li class="list-group-item d-flex justify-content-between lh-sm" style="cursor:pointer;background-color:#0d6efd95"><div><h6 class="my-0">' +
                                         title_template +
                                         '</h6><small class="text-light">' +
                                         signature_variables +
                                         '</small></div></span></li>'
                                         );
                                 }
                             }
                             for (var i = 0; i < signature_variables
                                 .length; i++) {}

                         });
                     });
                 });
             });
         });
     });

     function addtext(x) {
         var e = document.getElementById('editor');
         e.value += x;
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