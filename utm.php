<?
require_once(ABSPATH . 'wp-config.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Signature
    </title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
                      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="row flex-row" style="width:100%" id="main">
        <div class="panel panel-default flex-col">
            <div class="panel-heading" style="height: 100px">
            </div>
            <div class="panel-body flex-grow">
                <div class="row seven-col flex-row">
                    <div class="col-xs-6 col-md-4">
                        <div class="panel panel-default no-margin ">
                            <div class="panel-heading">
                                <!-- -->
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPass">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsePass "
                                                aria-expanded="false" aria-controls="collapseThree ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                                                    <path
                                                        d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                                                </svg>&nbsp; <b>PASSWORD</b>
                                        </h2>
                                        <div id="collapsePass" class="accordion-collapse collapse"
                                            aria-labelledby="headingPass" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <hr>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="password">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" id="passwords"
                                                            type="button" class="btn btn-light">Login</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingZero">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <b><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                                                    </svg> SETUP</b>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingZero" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <h5 class="d-flex justify-content-between align-items-center mb-3">
                                                    <span>Template list</span>
                                                </h5>
                                                <hr>
                                                <div id="template_list">
                                                    <ul class="list-group mb-3">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne"> <b>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                                                        <path
                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                        <path
                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                    </svg> SIGNATURE </b> &nbsp;<div id="sign" style="font-weight:bold">
                                                </div> <input type="hidden" id="li">
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <h4 class="mb-3"></h4>
                                                <!--form class="">
                                                                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" placeholder="Choose File">
                                                            </form-->
                                                <!--form class="needs-validation" id="valid" novalidate="">   data-toggle="validator"-->
                                                <form data-toggle="validator" id="valid" role="form">
                                                    <div class="row g-3">
                                                        <div class="col-sm-12" id="formBuilder">
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- -->
                                <hr class="my-4">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="panel panel-default no-margin flex-col">
                            <div class="p-3 mb-4">
                                <div class="panel-body flex-grow" id="t">
                                    <div id="signature" style="float: left;position:absolute;display:inline-flex;">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">&nbsp;
                                        <hr>Html
                                    </label>
                                    <textarea class="form-control" id="code" style="font-size:11px;"
                                        rows="5"></textarea>
                                    <div class="col-md-12">
                                        <hr>
                                        <input type="button" onclick="addCard()" id="addBtn" value="Download"
                                            class="btn btn-primary py-2 px-4 text-white btn-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <!--div class="col-md-12">
                                  <input type="button" onclick="addCard()" id="addBtn" value="Pobierz" class="btn btn-primary py-2 px-4 text-white btn-sm">
                                  <input type="button" onclick="saveHtml()" value="Zapisz" class="btn btn-primary py-2 px-4 text-white btn-lg">
                               </div-->
                    </div>
                </div>
            </div>
        </div>
        <!--/row-->
        <canvas style="dispaly:none;" id="canvas" width=100 height=100>
        </canvas>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"
            crossorigin="anonymous">
        < script src = "https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"
        integrity = "sha512-Mf4TMPxK1TE3jNpbt6cFIM9Rz+Ezs+mvG6SvEKq2ZYEAix8QNtbseSccunI4efVNtvfzrRmd8vVwRRBgYMtfnA=="
        crossorigin = "anonymous"
        referrerpolicy = "no-referrer" >
        </script>
        </script>
</body>
<script src="./js/qrcode.min.js"></script>
<script>
(function() {
    'use strict'
    function abc() {
        document.getElementById("contact").style.color = "red";
    }
    function copyToTarget(target) {
        return function copyDataHandler(evt) {
            evt = evt || event;
            var source = evt.target || srcElement; // target here being the source element of the event
            target.innerHTML = source.value;
        };
    }
})();
//font manipulation
function font_change() {
    let f = 'Segoe UI'; //family
    let s = 12; //size
    let c = 'red'; //color
    let t = 'none'; //text-transform
    //font-family
    f = document.getElementById("fonts").value;
    document.getElementById("signature").style.fontFamily = f;
    //font size
    s = document.getElementById("fontSize").value;
    document.getElementById("first_name").style.fontSize = s * 1.6 + 'px';
    //document.getElementById("last_name").style.fontSize = s*1.33+'px';
    document.getElementById("data").style.fontSize = s + 'px';
    document.getElementById("job_title").style.fontSize = s * 0.9 + 'px';
    document.getElementById("company_title").style.fontSize = s * 1.1 + 'px';
    //font color
    c = document.getElementById("fontColor").value;
    if (c.length > 0) {
        document.getElementById("contact").style.color = c;
        document.getElementById("content").style.borderLeft = '1px solid ' + c;
        if (document.getElementById("phoneLink")) {
            document.getElementById("phoneLink").style.color = c;
        }
        if (document.getElementById("wwwLink")) {
            document.getElementById("wwwLink").style.color = c;
        }
        if (document.getElementById("emailLink")) {
            document.getElementById("emailLink").style.color = c;
        }
    } else {
        c = 'red';
        document.getElementById("contact").style.color = c;
        document.getElementById("content").style.borderLeft = '1px solid ' + c;
        //  if(document.getElementById("phoneLink")){
        document.getElementById("phoneLink").style.color = c;
        //   }
        if (document.getElementById("wwwLink")) {
            document.getElementById("wwwLink").style.color = "red";
        }
        if (document.getElementById("emailLink")) {
            document.getElementById("emailLink").style.color = "red";
        }
    }
    //text-transform
    t = document.getElementById("textTransform").value;
    if (c.length > 0) {
        document.getElementById("signature").style.textTransform = t;
    } else {
        t = 'none';
        document.getElementById("signature").style.textTransform = t;
    }
}
const phoneLink = document.getElementById('phone');
function phoneChange(event) {
    const c = document.getElementById("fontColor").value;
    const phone = document.getElementById('phone');
    const phoneSource = '<a id="phoneLink" style="text-decoration:none" href="tel:' + document.getElementById('phone')
        .value + '">' + document.getElementById('phone').value + '</a>';
    console.log('phoneSource', phoneSource);
    document.getElementById("cell_phone").innerHTML = phoneSource;
    if (c.length > 0) {
        if (document.getElementById("phoneLink")) {
            document.getElementById("phoneLink").style.color = c;
        }
    } else {
        c = 'red';
        if (document.getElementById("phoneLink")) {
            document.getElementById("phoneLink").style.color = c;
        }
    }
}
const wwwLink = document.getElementById('www');
function wwwChange(event) {
    const c = document.getElementById("fontColor").value;
    const www = document.getElementById('www');
    const utm_source = document.getElementById('utm_source').value;
    const utm_medium = document.getElementById('utm_medium').value;
    const utm_campaign = document.getElementById('utm_campaign').value;
    ///?utm_source=footer&utm_medium=email&utm_campaign=TemplateOne
    // if(utm_source) {
    const utm = '/?utm_source=' + utm_source + '&utm_medium=' + utm_medium + '&utm_campaign=' + utm_campaign;
    //  }
    const wwwSource = '<a id="wwwLink" style="text-decoration:none;" href="https://' + document.getElementById('www')
        .value + utm + '">' + document.getElementById('www').value + '</a>';
    document.getElementById("ww_w").innerHTML = wwwSource;
    if (c.length > 0) {
        if (document.getElementById("wwwLink")) {
            document.getElementById("wwwLink").style.color = c;
        }
    } else {
        c = 'red';
        if (document.getElementById("wwwLink")) {
            document.getElementById("wwwLink").style.color = c;
        }
    }
}
const mailLink = document.getElementById('email');
function mailChange(event) {
    const c = document.getElementById("fontColor").value;
    const mail = document.getElementById('email');
    const mailSource = '<a id="emailLink" style="text-decoration:none;" href="mailto:' + document.getElementById(
        'email').value + '">' + document.getElementById('email').value + '</a>';
    document.getElementById("e__mail").innerHTML = mailSource;
    if (c.length > 0) {
        if (document.getElementById("emailLink")) {
            document.getElementById("emailLink").style.color = c;
        }
    } else {
        c = 'red';
        if (document.getElementById("emailLink")) {
            document.getElementById("emailLink").style.color = c;
        }
    }
}
// mailLink.addEventListener('change', mailChange);
// phoneLink.addEventListener('change', phoneChange);
// wwwLink.addEventListener('change',wwwChange);
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var cw = canvas.width;
var ch = canvas.height;
// limit the image to 150x100 maximum size
var maxW = 150;
var maxH = 150;
if (document.getElementById('fileToUpload')) {
    var input = document.getElementById('fileToUpload');
    input.addEventListener('change', handleFiles);
}
//load img and convert to square - or not :) - this is question about logo size
//  wh = document.getElementById("imageSize").value;
function handleFiles(e) {
    var img = new Image;
    img.onload = function() {
        var iw = img.width;
        var ih = img.height;
        var scale = Math.min((maxW / iw), (maxH / ih));
        var iwScaled = iw * scale;
        var ihScaled = ih * scale;
        canvas.width = iwScaled;
        canvas.height = ihScaled;
        ctx.drawImage(img, 0, 0, iwScaled, ihScaled);
        url = canvas.toDataURL();
        crop(url, 1 / 1).then(canvas => {
            sto = canvas.toDataURL();
            console.log('sto', sto);
            if (sto) {
                const els = document.getElementById('canvas');
                els.parentNode.removeChild(els);
                console.log('els:', els);
                if (els) {
                    els.remove();
                    console.log('els.remove:', els.remove());
                    addElement();
                }
                const imageSize = document.getElementById("imageSize");
                let imageSized = document.getElementById("imageSize").value;
                imageSize.addEventListener("change", function(event) {
                    if (wh >= 100 || wh < 200) {
                        imageSized = wh;
                        //alert(imageSized);
                        console.log('zmieniony', imageSized);
                        getElementById('image').style.width = imageSized + 'px';
                        document.getElementById('image').setAttribute("style", "width:" +
                            imageSized + "px");
                    } else {
                        imageSized = 150;
                        console.log('niezmieniony', imageSized);
                    }
                });
                ctx.clearRect(0, 0, iwScaled, ihScaled);
                resizeImage(sto, imageSized, imageSized);
                //crop image to square
                function resizeImage(base64Str, maxWidth = imageSized, maxHeight = imageSized) {
                    return new Promise((resolve) => {
                        let img = new Image()
                        img.src = base64Str
                        img.onload = () => {
                            //let canvas = document.getElementById('canvass');
                            //let canvas = document.createElement('canvas')
                            const MAX_WIDTH = maxWidth
                            const MAX_HEIGHT = maxHeight
                            let width = img.width
                            let height = img.height
                            if (width > height) {
                                if (width > MAX_WIDTH) {
                                    height *= MAX_WIDTH / width
                                    width = MAX_WIDTH
                                }
                            } else {
                                if (height > MAX_HEIGHT) {
                                    width *= MAX_HEIGHT / height
                                    height = MAX_HEIGHT
                                }
                            }
                            canvas.width = width
                            canvas.height = height
                            let ctx = canvas.getContext('2d')
                            ctx.drawImage(img, 0, 0, width, height)
                            resolve(canvas.toDataURL())
                            var sourceImage = document.createElement('img'),
                                imgContainer = document.getElementById("canvasss");
                            sourceImage.src = canvas.toDataURL();
                            imgContainer.appendChild(sourceImage);
                        }
                    })
                }
            }
        });
    }
    img.src = URL.createObjectURL(e.target.files[0]);
}
function crop(url, aspectRatio) {
    return new Promise(resolve => {
        // this image will hold our source image data
        const inputImage = new Image();
        // we want to wait for our image to load
        inputImage.onload = () => {
            // let's store the width and height of our image
            const inputWidth = inputImage.naturalWidth;
            const inputHeight = inputImage.naturalHeight;
            // get the aspect ratio of the input image
            const inputImageAspectRatio = inputWidth / inputHeight;
            // if it's bigger than our target aspect ratio
            let outputWidth = inputWidth;
            let outputHeight = inputHeight;
            if (inputImageAspectRatio > aspectRatio) {
                // outputWidth = inputWidth * aspectRatio;
                outputWidth = inputHeight * aspectRatio;
            } else if (inputImageAspectRatio < aspectRatio) {
                outputHeight = inputWidth / aspectRatio;
            }
            // calculate the position to draw the image at
            const outputX = (outputWidth - inputWidth) * .5;
            const outputY = (outputHeight - inputHeight) * .5;
            // create a canvas that will present the output image
            const outputImage = document.createElement('canvas');
            // set it to the same size as the image
            outputImage.width = outputWidth;
            outputImage.height = outputHeight;
            // draw our image at position 0, 0 on the canvas
            const ctx = outputImage.getContext('2d');
            ctx.drawImage(inputImage, outputX, outputY);
            resolve(outputImage);
            let out = outputImage.toDataURL()
            return out;
        };
        // start loading our image
        inputImage.src = url;
    });
};
//remove img with click
const imgg = document.getElementById('canvasss');
function imgDel(event) {
    const imgs = document.getElementById('canvasss').getElementsByTagName('img')[0].remove();
    const elem = document.createElement("img");
    elem.setAttribute("src", "");
    console.log('imgDel:', arguments)
}
if (imgg) {
    imgg.addEventListener('click', imgDel);
}
//rem qrcode with click
const qrCode = document.getElementById('qrcodein');
function remove_qrCode(event) {
    const imgs = document.getElementById('qrcodein').getElementsByTagName('img')[0].remove();
    const elem = document.createElement("img");
    elem.setAttribute("src", "");
    console.log('remove_qrCode:', arguments)
}
if (qrCode) {
    qrCode.addEventListener('click', remove_qrCode);
}
//remove code | with option - not working - problem with document.getElementById('qrcodein').getElementsByTagName('img')[0].remove();
const qrD = document.getElementById('qrcode');
const qrCodex = document.getElementById('qrcode');
function qrDel(event) {
    console.log('qrDel inside');
    const imgss = document.getElementById('qrcodein').getElementsByTagName('img')[0].remove();
    const elem = document.createElement("img");
    elem.setAttribute("src", "");
    console.log('qr Del:', arguments);
}
//qrD.addEventListener('change', qrDel);
//remove code || with option - not working - problem with document.getElementById('qrcodein').getElementsByTagName('img')[0].remove();
function remove_qrCodes() {
    if (!document.getElementById("qrcodein")) {
        console.log('nie usuwam bo nie ma');
    } else {
        const div = document.getElementById('qrcodein');
        const obr = document.getElementById('qrcodein');
        const qrImg = obr.getElementsByTagName('img')[0].src;
        obr.getElementsByTagName('img')[0].src = "/";
        document.getElementById('qrcodein').getElementsByTagName('img')[0].removeAttribute('src');
        var olddata = document.getElementById("qrcodein").lastChild;
        document.getElementById("qrcodein").removeChild(olddata);
        console.log('remove_qrCode:-->', qrImg);
    }
}
//https://stackoverflow.com/questions/14544104/checkbox-check-event-listener
var checkboxes = document.querySelectorAll("input[type=checkbox][name=settings]");
let enabledSettings = []
/*
For IE11 support, replace arrow functions with normal functions and
use a polyfill for Array.forEach:
https://vanillajstoolkit.com/polyfills/arrayforeach/
*/
// Use Array.forEach to add an event listener to each checkbox.
checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        enabledSettings =
            Array.from(checkboxes) // Convert checkboxes to an array to use filter and map.
            .filter(i => i.checked) // Use Array.filter to remove unchecked checkboxes.
            .map(i => i
                .id) // Use Array.map to extract only the checkbox values from the array of objects.
        console.log(enabledSettings);
        const bolder_settings = enabledSettings.find(element => element == 'bolder');
        const qrcode_settings = enabledSettings.find(element => element == 'qrcode');
        console.log('found->', bolder_settings);
        console.log('found->', qrcode_settings);
        //bold letters
        document.getElementById("contact").style.fontWeight = 'normal';
        if (typeof bolder_settings !== 'undefined' || qrcode_settings == 'border') {
            if (document.getElementById('bolder').checked) {
                document.getElementById("contact").style.fontWeight = 'bolder';
                console.log(document.getElementById("bolder").value);
            } else {
                document.getElementById("contact").style.fontWeight = 'normal';
                console.log(document.getElementById("bolder").value);
            }
        }
        //generate qrcode
        if (typeof qrcode_settings !== 'undefined' || qrcode_settings == 'qrcode') {
            console.log("qrcode_settings", qrcode_settings);
            window.addEventListener("change", function() {
                //var qrc='';
                console.log(document.getElementById("qrcode").value);
                document.getElementById("qrcodein").innerHTML = "";
                let cards = "BEGIN:VCARD\r\n";
                cards += "VERSION:3.0\r\n";
                cards += "FN:" + document.getElementById("firstName").value + " " + document
                    .getElementById("last_name").innerHTML + "\r\n";
                //cards += "TITLE:"+document.getElementById("job_title").innerHTML+"\r\n";
                cards += "ORG:" + document.getElementById("companyTitle").value + "\r\n";
                cards += "TEL;TYPE=cell:" + document.getElementById("phone").value + "\r\n";
                cards += "EMAIL;TYPE=internet:" + document.getElementById("email").value +
                    "\r\n";
                cards += "URL;TYPE=internet:" + document.getElementById("www").value + "\r\n";
                // new QRCode(document.getElementById("qrcodein"), card);
                qrc = new QRCode(document.getElementById("qrcodein"), {
                    text: cards,
                    width: 150,
                    height: 150,
                    colorDark: "#000000",
                    colorLight: "#ffffff",
                    // QRCode.CorrectLevel.L | QRCode.CorrectLevel.M | QRCode.CorrectLevel.H
                    //correctLevel : QRCode.CorrectLevel.H
                }, cards);
                document.getElementById("qrcodein").innerHTML.reload;
            });
        } else {
            console.log('no qr code');
        }
    })
});
document.body.onload = addElement;
function addElement() {
    // create a new div element
    const newDiv = document.createElement("div");
    newDiv.setAttribute("id", "canvas");
    // and give it some content
    //const newContent = document.createTextNode("Hi there and greetings!");
    // add the text node to the newly created div
    //newDiv.appendChild(newContent);
    // add the newly created element and its content into the DOM
    const currentDiv = document.getElementById("main");
    document.body.insertBefore(newDiv, currentDiv.nextSibling);
}
//download signature
function addCard() {
    ////alert($('#formBuilder').find('input[type=text]')[0].value);
    let fileName = $('#formBuilder').find('input[type=text]')[0].value;
    //document.getElementById("code").value;
    fileName = fileName.replace(/\s+/g, '-').toLowerCase() + '.html';
    var a = document.body.appendChild(
        document.createElement("a")
    );
    // alert(document.getElementById("code").value);
    let htmlcode = document.getElementById("code").value;
    a.download = fileName;
    a.href = "data:text/plain;charset=utf-8," + encodeURIComponent(htmlcode);
    a.click();
}
$(document).ready(function($) {
    $('#passwords').bind('click', function() {
        $.ajax({
            type: "POST",
            url: "<? echo plugins_url();?>/signaturez/add.php",
            dataType: "json",
            cache: false,
            data: {
                'f': 'check_passwd',
                'password': $('#password').val()
            },
            success: function(data, textStatus, jqXHR) {}
        }).done(function(data) {
            alert(data);
            if (data == '1') {
                $('#t').show();
            } else {
                $('#t').hide();
            }
            $("tr:has(td:contains('lastname'))").css("text-decoration", "underline");
            $("tr:has(td:contains('lastname'))").each(function() {
                $("tr:has(td:contains('lastname'))").css("background-color", "yellow");
            });
            $.ajax({
                type: "POST",
                url: "<? echo plugins_url();?>/signaturez/add.php",
                dataType: "json",
                cache: false,
                data: {
                    'f': 'load_templates'
                },
                success: function(data, textStatus, jqXHR) {}
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
                        '</small></div></li>');
                }
                $('.variable').click(function() {
                    var variables = $(this).attr("iditem");
                    var textarea = $("#editor");
                    textarea.val(textarea.val() + variables);
                });
            });
            $.ajax({
                type: "POST",
                url: "<? echo plugins_url();?>/signaturez/add.php",
                dataType: "json",
                data: {
                    'f': 'default_templates'
                },
                cache: false,
                success: function(data, textStatus, jqXHR) {}
            }).done(function(data) {
                for (var i = 0; i < data.length; i++) {
                    id_template = data[i]['id'];
                    title_template = data[i]['titles'];
                    $('#sign').text(title_template);
                    content_template = data[i]['signature_contents'];
                    signature_variables = JSON.parse(data[i]['signature_variabless']);
                    signature_variables_type = data[0]['signature_variables_type'];
                    for (var i = 0; i < signature_variables.length; i++) {
                        stri = signature_variables[i];
                        //console.log('ggg'+signature_variables_type.length);
                        if (jQuery.inArray(signature_variables[i],
                                signature_variables_type)) {
                        }
                        for (var j = 0; j < signature_variables_type.length; j++) {
                            console.log(toString(signature_variables_type[j].v_title) +
                                "===" + toString(signature_variables[i]));
                            //console.log('>>>myArray___'+signature_variables_type[ii].v_title+'----'+signature_variables[i]);
                            if (signature_variables_type[j].v_title.includes(
                                    signature_variables[i])) {
                                if (toString(signature_variables_type[j].v_title) ===
                                    toString(signature_variables[i])) {
                                    console.log('myArray___' + signature_variables_type[
                                        j].v_title);
                                    console.log('myArray___' + signature_variables_type[
                                        j].v_type);
                                    //return myArray[i];
                                    //var
                                    var valids = signature_variables_type[j].v_type;
                                }
                            }
                        }
                        // alert(valids);
                        $("#formBuilder").append(
                            '<div class="input-group "><span class="input-group-text" style="width:100px;font-size:11px;text-transform:capitalize;font-weight:bold;">' +
                            signature_variables[i] +
                            '</span><input  class="form-control" id="' +
                            signature_variables[i] +
                            '" placeholder="" value="" type="' + valids +
                            '"></div><br>');
                    }
                    // $("#t").d
                    $("#t").html(content_template);
                    if (id_template > 0) {
                        $('#template_list').append(
                            '<li class="list-group-item d-flex justify-content-between lh-sm" style="cursor:pointer;background-color:#0d6efd95"><div><h6 class="my-0">' +
                            title_template + '</h6><small class="text-light">' +
                            signature_variables + '</small></div></li>');
                    }
                }
                $('.variable').click(function() {
                    var variables = $(this).attr("iditem");
                    var textarea = $("#editor");
                    textarea.val(textarea.val() + variables);
                });
                $('#valid :input').each(function() {
                    console.log($(this).serializeArray());
                });
                $('#valid :input').bind('change', function() {
                    var serialize = Array.from($('input'), e => e.id + "=" + e
                        .value).join('&');
                    console.log(serialize);
                    return false;
                });
                $('#valid :input').bind('change click', function() {
                    $("#valid").validate({
                        rules: {
                            www: {
                                required: true,
                                url: true
                            }
                        }
                    });
                    var clickedBtnID = Array.from($('input'), e => e.id + "=" +
                        e.value).join('&');
                    f = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "<? echo plugins_url();?>/signaturez/add.php",
                        dataType: "json",
                        cache: false,
                        data: {
                            'f': 'reload_templates',
                            'id': $("#li").val(),
                            'value': clickedBtnID
                        },
                        success: function(data, textStatus, jqXHR) {}
                    }).done(function(data) {
                        for (var i = 0; i < data.length; i++) {
                            id_template = data[i]['id'];
                            title_template = data[i]['title'];
                            //  alert(title_template);
                            content_templatess = data[i][
                                'signature_contents'
                            ];
                            signature_variables = JSON.parse(data[i][
                                'signature_variabless'
                            ]);
                            for (var i = 0; i < signature_variables
                                .length; i++) {
                                //    $("#formBuilder").append('<div class="input-group "><span class="input-group-text" style="width:100px;font-size:12px;font-weight:bold;">'+signature_variables[i]+'</span><input type="text" class="form-control" id="'+signature_variables[i]+'" placeholder="" value="'+signature_variables[i]+'"></div><br>');
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
                                    '</small></div></li>');
                            }
                        }
                        /// alert(signature_variables.length);
                        for (var i = 0; i < signature_variables
                            .length; i++) {
                            // alert(signature_variabless) ;
                        }
                        $('.variable').click(function() {
                            var variables = $(this).attr(
                                "iditem");
                            var textarea = $("#editor");
                            textarea.val(textarea.val() +
                                variables);
                        });
                    });
                });
                $('#template_list ul li').click(function() {
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
                            $("#sign").html("");
                            id_template = data[i]['ids'];
                            title_template = data[i]['titles'];
                            content_templatess = data[i][
                                'signature_contents'
                            ];
                            signature_variables = JSON.parse(data[i][
                                'signature_variabless'
                            ]);
                            signature_variables_type = data[0][
                                'signature_variables_type'
                            ];
                            $('#sign').text(title_template);
                            $('#li').val(id_template);
                            for (var i = 0; i < signature_variables
                                .length; i++) {
                                //    $("#formBuilder").append('<div class="input-group "><span class="input-group-text" style="width:100px;font-size:12px;font-weight:bold;">'+signature_variables[i]+'</span><input type="text" class="form-control" id="'+signature_variables[i]+'" placeholder="" value="'+signature_variables[i]+'"></div><br>');
                            }
                            // $("#t").deatach();
                            $("#code").val(content_templatess);
                            $("#t").html(content_templatess);
                            if (id_template > 0) {
                                //   $('#template_list').append('<li class="list-group-item d-flex justify-content-between lh-sm" style="cursor:pointer;background-color:#0d6efd95"><div><h6 class="my-0">'+title_template+'</h6><small class="text-light">'+signature_variables+'</small></div><span class="text-muted"><span class="badge bg-primary rounded-pill">'+id_template+'</span></span></li>');
                            }
                            $("#formBuilder").html("");
                            for (var i = 0; i < signature_variables
                                .length; i++) {
                                for (var j = 0; j <
                                    signature_variables_type.length; j++
                                    ) {
                                    console.log(toString(
                                            signature_variables_type[
                                                j].v_title) +
                                        "===" + toString(
                                            signature_variables[i]));
                                    //console.log('>>>myArray___'+signature_variables_type[ii].v_title+'----'+signature_variables[i]);
                                    if (signature_variables_type[j]
                                        .v_title.includes(
                                            signature_variables[i])) {
                                        if (toString(
                                                signature_variables_type[
                                                    j].v_title) ===
                                            toString(
                                                signature_variables[i])
                                            ) {
                                            console.log('myArray___' +
                                                signature_variables_type[
                                                    j].v_title);
                                            console.log('myArray___' +
                                                signature_variables_type[
                                                    j].v_type);
                                            //return myArray[i];
                                            //var
                                            var valids =
                                                signature_variables_type[
                                                    j].v_type;
                                        }
                                    }
                                }
                                $("#formBuilder").append(
                                    '<div class="input-group "><span class="input-group-text" style="width:100px;font-size:11px;text-transform:capitalize;font-weight:bold;">' +
                                    signature_variables[i] +
                                    '</span><input  class="form-control" id="' +
                                    signature_variables[i] +
                                    '" placeholder="" value="" type="' +
                                    valids + '"></div><br>');
                            }
                        }
                        for (var i = 0; i < signature_variables
                            .length; i++) {}
                        $('.variable').click(function() {
                            var variables = $(this).attr(
                                "iditem");
                            var textarea = $("#editor");
                            textarea.val(textarea.val() +
                                variables);
                        });
                        $('#valid :input').each(function() {
                            console.log($(this)
                            .serializeArray());
                        });
                        $('#valid :input').bind('change', function() {
                            var serialize = Array.from($(
                                    'input'), e => e.id +
                                "=" + e.value).join('&');
                            console.log(serialize);
                            return false;
                        });
                        $('#valid :input').bind('change click',
                            function() {
                                var clickedBtnID = Array.from($(
                                        'input'), e => e.id +
                                    "=" + e.value).join('&');
                                ////$(this).attr('id'); // or var clickedBtnID = this.id
                                //   alert('you clicked on button #' + clickedBtnID);
                                //   alert($(this).val());
                                //});
                                //      $("#firstName" ).click(function() {
                                //
                                // ss= $("#valid").find("select,textarea, input").serialize();
                                // console.log('serialise',ss);
                                f = $(this).val();
                                //value':clickedBtnID+'='+f
                                $.ajax({
                                    type: "POST",
                                    url: "<? echo plugins_url();?>/signaturez/add.php",
                                    dataType: "json",
                                    cache: false,
                                    data: {
                                        'f': 'reload_templates',
                                        'id': $("#li")
                                        .val(),
                                        'value': clickedBtnID
                                    },
                                    success: function(data,
                                        textStatus,
                                        jqXHR) {}
                                }).done(function(data) {
                                    for (var i = 0; i < data
                                        .length; i++) {
                                        id_template = data[
                                            i]['id'];
                                        title_template =
                                            data[i][
                                            'title'];
                                        content_templatess =
                                            data[i][
                                                'signature_contents'
                                            ];
                                        signature_variables
                                            = JSON.parse(
                                                data[i][
                                                    'signature_variabless'
                                                ]);
                                        for (var i = 0; i <
                                            signature_variables
                                            .length; i++) {
                                            // $("#formBuilder").append('<div class="input-group "><span class="input-group-text" style="width:100px;font-size:12px;font-weight:bold;">'+signature_variables[i]+'</span><input type="text" class="form-control" id="'+signature_variables[i]+'" placeholder="" value="'+signature_variables[i]+'"></div><br>');
                                        }
                                        // $("#t").deatach();
                                        $("#code").val(
                                            content_templatess
                                            );
                                        $("#t").html(
                                            content_templatess
                                            );
                                        // $("#template_list").detach();
                                        if (id_template >
                                            0) {
                                            $('#template_list')
                                                .append(
                                                    '<li class="list-group-item d-flex justify-content-between lh-sm" style="cursor:pointer;background-color:#0d6efd95"><div><h6 class="my-0">' +
                                                    title_template +
                                                    '</h6><small class="text-light">' +
                                                    signature_variables +
                                                    '</small></div></li>'
                                                    );
                                        }
                                    }
                                    for (var i = 0; i <
                                        signature_variables
                                        .length; i++) {}
                                    $('.variable').click(
                                        function() {
                                            var variables =
                                                $(this)
                                                .attr(
                                                    "iditem"
                                                    );
                                            var textarea =
                                                $(
                                                    "#editor");
                                            textarea
                                                .val(
                                                    textarea
                                                    .val() +
                                                    variables
                                                    );
                                        });
                                });
                            });
                    });
                });
            });
        });
    });
});
</script>
</script>
</body>
</html>
