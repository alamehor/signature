 <?php
//main signature plugin file - without table wp_signature & wp_signature_variables - to do
//include wp-config or wp-load.php
$root = dirname(dirname(dirname(dirname(__FILE__))));
if (file_exists($root . '/wp-load.php')) {
    // WP 2.6
    require_once $root . '/wp-load.php';
} else {
    // Before 2.6
    require_once $root . '/wp-config.php';
}

$wpdb = new wpdb(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
global $wpdb;

include_once ABSPATH . "wp-includes/class-phpass.php";


//my function to check variable types
function check_number($ni, $il, $ill)
{
    if (isset($ni)) {
        if (is_numeric($ni)) {
            if (strlen($ni) >= $il or strlen($ni) <= $ill) {
                if (preg_match('#^[1234567890]*$#is', $ni)) {
                    return $ni;
                } else { $json[] = array("info" => "0");}
            } else { $json[] = array("info" => "0");}
        } else { $json[] = array("info" => "0");}
    } else { $json[] = array("info" => "0");}
}
function check_phone($ni, $il, $ill)
{
    if (isset($ni)) {
        if (is_numeric($ni)) {
            if (strlen($ni) >= $il or strlen($ni) <= $ill) {
                if (preg_match('#^[1234567890+ ]*$#is', $ni)) {
                    return $ni;
                } else { $json[] = array("info" => "0");}
            } else { $json[] = array("info" => "0");}
        } else { $json[] = array("info" => "0");}
    } else { $json[] = array("info" => "0");}
}
function check_string($ni, $il, $ill)
{
    if (isset($ni)) {
        if (!is_numeric($ni)) {
            if (strlen($ni) >= $il or strlen($ni) <= $ill) {
                if (!preg_match('#^[1234567890-<>?\/_* ]*$#is', $ni)) {
                    return $ni;
                } else { $json[] = array("info" => "0");}
            } else { $json[] = array("info" => "0");}
        } else { $json[] = array("info" => "0");}
    } else { $json[] = array("info" => "0");}
}
function check_kod($ni, $il, $ill)
{
    if (isset($ni)) {
        if (strlen($ni) >= $il or strlen($ni) <= $ill) {
            if (preg_match('#^[1234567890-]*$#is', $ni)) {
                return $ni;
            } else { $json[] = array("info" => "0");}
        } else { $json[] = array("info" => "0");}
    } else { $json[] = array("info" => "0");}
}
function check_mail($ni, $il, $ill)
{
    if (isset($ni)) {
        if (strlen($ni) >= $il or strlen($ni) <= $ill) {
            if (filter_var($ni, FILTER_VALIDATE_EMAIL)) {
                return $ni;
            } else { $json[] = array("info" => "0");}
        } else { $json[] = array("info" => "0");}

    } else { $json[] = array("info" => "0");}
}
function check_url($ni, $il, $ill)
{
    if (isset($ni)) {
        if (strlen($ni) >= $il or strlen($ni) <= $ill) {
            if (filter_var($ni, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME)) {
                return $ni;
            } else { $json[] = array("info" => "0");}
        } else { $json[] = array("info" => "0");}
    } else { $json[] = array("info" => "0");}
}

function check_mix($ni, $il, $ill)
{
    if (isset($ni)) {

        if (strlen($ni) >= $il or strlen($ni) <= $ill) {
            // echo strlen($ni);
            // var_dump(!preg_match('#[<?!.=,>]#g', $ni));
            if (!preg_match('/[<?!.=,>]/i', $ni)) {
                return $ni;
            } else { $json[] = array("info" => "0");}
        } else { $json[] = array("info" => "0");}
    } else { $json[] = array("info" => "0");}
}


//check variables  - yes this may be a quite shorten
//string
$variableName = strip_tags($_POST['variableName']);
$variableName = check_string($_POST['variableName'], 3, 30);
if (isset($variableName)) {
    $variableName = $variableName;
} else {
    $variableName = '0';
}
//string
$validationType = strip_tags($_POST['validationType']);
$validationType = check_string($_POST['validationType'], 3, 30);
if (isset($validationType)) {
    $validationType = $validationType;
} else {
    $validationType = '0';
}
//string
$utm_source = strip_tags($_POST['utm_source']);
$utm_source = check_string($_POST['utm_source'], 3, 30);
if (isset($utm_source)) {
    $utm_source = $utm_source;
} else {
    $utm_source = '0';
}
//string
$utm_mediume = strip_tags($_POST['utm_medium']);
$utm_medium = check_string($_POST['utm_medium'], 3, 30);
if (isset($utm_medium)) {
    $utm_medium = $utm_medium;
} else {
    $utm_medium = '0';
}

//string
$utm_campaign = strip_tags($_POST['utm_campaign']);
$utm_campaign = check_mix($_POST['utm_campaign'], 3, 30);
if (isset($utm_campaign)) {
    $utm_campaign = $utm_campaign;
} else {
    $utm_campaign = '0';
}

//string
$signatureName = strip_tags($_POST['signatureName']);
$signatureName = check_mix($_POST['signatureName'], 3, 30);
if (isset($signatureName)) {
    $signatureName = $signatureName;
} else {
    $signatureName = '0';
}

//number
$editor = strip_tags($_POST['editor']);
$editor = check_number($editor, 1, 10);
if (isset($editor)) {
    $editor = $editor;
} else {
    $editor = '0';
}

//number
$i = strip_tags($_POST['i']);
$i = check_number($i, 1, 10);
if (isset($i)) {
    $i = $i;
} else {
    $i = '0';
}
//number
$active = strip_tags($_POST['active']);
$active = check_number($i, 1, 10);
if (isset($active)) {
    $active = $active;
} else {
    $active = '0';
}
//number
$default = strip_tags($_POST['default']);
$default = check_number($default, 1, 10);
if (isset($default)) {
    $default = $default;
} else {
    $default = '0';
}
//number
$li = strip_tags($_POST['li']);
$li = check_number($li, 1, 10);
if (isset($li)) {
    $li = $li;
} else {
    $li = '0';
}

//call to every function
$cv = $_POST['f'];
//echo $cv;
if ('check_variable' == $cv) {

    check_variables($wpdb);
}

if ('check_variable_editor' == $cv) {

    check_variables_editor($wpdb);
}

if ('add_signature' == $cv) {

    add_signature($wpdb, $signatureName, $default, $active, $editor, $li, $utm_source, $utm_medium, $utm_campaign);
}

if ('load_templates' == $cv) {

    load_templates($wpdb);
}

if ('load_templates_editor' == $cv) {

    load_templates_editor($wpdb);
}
if ('default_templates' == $cv) {

    default_templates($wpdb);
}

if ('change_template' == $cv) {
    change_template($wpdb, $li);
}

if ('reload_templates' == $cv) {
    reload_templates($wpdb);
}
if ('reload_templates_editor' == $cv) {
    reload_templates_editor($wpdb);
}

if ('check_passwd' == $cv) {
    check_passwd();
}
if ('change_status' == $cv) {
    change_status($wpdb, $i);
}

if ('add_variable' == $cv) {
    add_variable($wpdb, $variableName, $validationType, $editor, $active);
}

function change_template($wpdb, $li)
{

    $default_v_template = $wpdb->prepare("SELECT `signature_v_title`,`signature_v_type`
                            FROM `wp_signature_variables`
                            WHERE signature_v_status='1'");

    $df_v_variables[] = '';
    $df_v_data = $wpdb->get_results($default_v_template);
    $df_v_variables = [];
    foreach ($df_v_data as $pages) {
        $df_v_variables[] = array(
            "v_title" => $pages->signature_v_title,
            "v_type" => $pages->signature_v_type,

        );
    }
    $default_template = $wpdb->prepare("SELECT `ID`,`signature_title`,`signature_content`,`signature_variables`,`signature_status`,`signature_default`
                            FROM `wp_signature`
                            WHERE ID = %d", $li);
    $df_variables[] = '';

    $df_data = $wpdb->get_results($default_template);
    $df_variables = [];
    foreach ($df_data as $pages) {
        $df_variables[] = array(
            "ids" => $pages->ID,
            "titles" => $pages->signature_title,
            "signature_contents" => $pages->signature_content,
            "signature_variabless" => $pages->signature_variables,
            "signature_status" => $pages->signature_status,
            "signature_default" => $pages->signature_default,
            "signature_variables_type" => $df_v_variables,
        );
    }
    echo json_encode($df_variables);
    $df_variables = '';
    $id_signature = '';
}

//no security added
function reload_templates($wpdb)
{

    //$string = $_POST['firstName'];
    $string = $_POST['value'];
    $update = explode('=', $string);

    $area = '{{' . $update[0] . '}}';
    $value = $update[1];

    $id = $_POST['id'];
    if ($id > 1) {
        $id = 'ID=' . $id;
    } else {

        $id = 'signature_default =1';

    }

    parse_str($_POST['value'], $searcharray);
    $default_template = $wpdb->prepare("SELECT `ID`,`signature_title`,`signature_content`,`signature_variables`
                            FROM `wp_signature`
                            WHERE signature_status='1'
                            AND  $id
                            ORDER BY signature_default DESC");

    $df_variables[] = '';

    $df_data = $wpdb->get_results($default_template);
    $df_variables = [];

    foreach ($df_data as $pages) {

        function unserializeForm($str)
        {
            $strArray = explode("&", $str);
            foreach ($strArray as $item) {
                $array = explode("=", $item);
                $returndata[] = $array;
            }
            return $returndata;
        }

        $ar = explode('"', $pages->signature_variables);
        $key = unserializeForm($_POST['value']);

        $areas = array();
        $values = array();
        for ($k = 0; $k < count($key); $k++) {
            $element = $key[$k][0];
            if (in_array($element, $ar)) {

                $areas[] = '{{' . $key[$k][0] . '}}';
                $values[] = $key[$k][1];
            }
        }
        $text_to_send = str_replace($areas, $values, $pages->signature_content);

        function array_keys_exist($keys, $array)
        {
            foreach ($keys as $key) {
                echo 'key' . $key;
                if (!array_key_exists($key, $array)) {
                    return false;
                }

            }
            return true;
        }

        $df_variables[] = array(
            "ids" => $pages->ID,
            "titles" => $pages->signature_title,
            "signature_contents" => $text_to_send,
            "signature_variabless" => $pages->signature_variables,
        );
    }

    echo json_encode($df_variables);
    $df_variables = '';
    $string = '';
}

function load_templates($wpdb)
{

    $data = $wpdb->prepare("SELECT `ID`,`signature_title`,`signature_variables`
                            FROM `wp_signature`
                            WHERE signature_status='1'
                            AND signature_title>''
                            ORDER BY signature_default DESC");

    //$json[]   ='';
    $result = $wpdb->get_results($data);

    $variables = [];
    foreach ($result as $page) {
        $variables[] = array(
            "id" => $page->ID,
            "title" => $page->signature_title,
            "signature_variables" => $page->signature_variables);

    }
    echo json_encode($variables);
    $variables = '';
}

function load_templates_editor($wpdb)
{

    $data = $wpdb->prepare("SELECT `ID`,`signature_title`,`signature_variables`,`signature_default`,`signature_status`
                            FROM `wp_signature`
                            /*WHERE signature_status='1'
                            AND signature_title>''*/
                            ORDER BY signature_default DESC");

    $result = $wpdb->get_results($data);

    $variables = [];
    foreach ($result as $page) {
        $variables[] = array(
            "id" => $page->ID,
            "title" => $page->signature_title,
            "signature_variables" => $page->signature_variables,
            "signature_default" => $page->signature_default,
            "signature_status" => $page->signature_status);

    }

    echo json_encode($variables);
    $variables = '';
}

function default_templates($wpdb)
{
    //list of variables
    $default_v_template = $wpdb->prepare("SELECT `signature_v_title`,`signature_v_type`
                            FROM `wp_signature_variables`
                            WHERE signature_v_status='1'");

    $df_v_variables[] = '';
    $df_v_data = $wpdb->get_results($default_v_template);
    $df_v_variables = [];
    foreach ($df_v_data as $pages) {
        $df_v_variables[] = array(
            "v_title" => $pages->signature_v_title,
            "v_type" => $pages->signature_v_type,

        );
    }

    $default_template = $wpdb->prepare("SELECT `ID`,`signature_title`,`signature_content`,`signature_variables`
                            FROM `wp_signature`
                            WHERE signature_status='1'
                            AND signature_default ='1'");

    $df_variables[] = '';
    $df_data = $wpdb->get_results($default_template);
    $df_variables = [];
    foreach ($df_data as $pages) {
        $df_variables[] = array(
            "ids" => $pages->ID,
            "titles" => $pages->signature_title,
            "signature_contents" => $pages->signature_content,
            "signature_variabless" => $pages->signature_variables,
            "signature_variables_type" => $df_v_variables,
        );
    }
    echo json_encode($df_variables);
    $df_variables = '';

    $df_v_variables = '';

}

//add signature or update signature
//html tags and security problem
function add_signature($wpdb, $signatureName, $default, $active, $editor, $li, $utm_source, $utm_medium, $utm_campaign)
{

    $clean = strtr($_POST['signature'], ' ', '+');
    $ascii = base64_decode($clean);
    $code = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $ascii);

    preg_match_all("~\{\{\s*(.*?)\s*\}\}~", $code, $matches);
    $array = array_values(array_unique($matches[1], SORT_REGULAR));
    $result = json_encode($array);

    if ($result) {
        $result = $result;
    } else {
        $result = "";
    }

    if ('true' == $default) {
        $default = '1';
        //reset default
        $update_default = $wpdb->prepare("UPDATE `wp_signature`
                                          SET `signature_default` = '0'
                                      ");
        $wpdb->query($update_default);
    } else {
        $default = '0';
    }

    if ('true' == $active) {
        $active = '1';
    } else {
        $active = '0';
    }
    if ($li > 0) {

        $sql = $wpdb->prepare("UPDATE
                      wp_signature
                      SET
                      signature_title = %s,
                      signature_content = %s,
                      signature_default = %d,
                      signature_status = %d,
                      signature_variables = %s,
                      signature_utm= %s,
                      signature_source = %s,
                      signature_campain= %s

                      WHERE `wp_signature`.`ID` =%d", array($signatureName, $code, $default, $active, $result, $utm_source, $utm_medium, $utm_campaign, $li));
    } else {
        $sql = $wpdb->prepare("INSERT
                        INTO `wp_signature` (`signature_content`,`signature_status`,`signature_default`,`signature_title`,`signature_variables`,`signature_author`,`signature_utm`,`signature_source`,`signature_campain`)
                        VALUES (
                          %s,
                          %d,
                          %d,
                          %s,
                          %s,
                          %d,
                          %s,
                          %s,
                          %s
                        )", array($code, $active, $default, $signatureName, $result, $editor, $utm_source, $utm_medium, $utm_campaign));

    }
    $result = $wpdb->query($sql);
    if ($result) {
        if ($li > 0) {
            $lastId = $li;
        } else {
            $lastId = $wpdb->insert_id;
        }

        $data = $wpdb->prepare("SELECT `signature_variables`
                            FROM `wp_signature`
                            WHERE ID = %d)", $lastId);

        $result = $wpdb->get_results($data);
        $json[] = array("result" => 1, "last_id" => $lastId, "var" => $result->signature_variables, "info" => $info);

    } else {
        $json[] = array("result" => '0', "last_id" => $li, "var" => $result->signature_variables, "info" => $info);
    }
    echo $result->signature_variables;
    echo json_encode($json);

}

function check_variables($wpdb)
{

    $data = $wpdb->prepare("SELECT `signature_v_title`
                            FROM `wp_signature_variables`
                            WHERE signature_v_status='1'");

    $json[] = '';
    $result = $wpdb->get_results($data);
    $variables = [];
    foreach ($result as $page) {
        $variables[] = array("var", $page->signature_v_title);

    }
    echo json_encode($variables);

}

//show variables into editor panel
function check_variables_editor($wpdb)
{

    $data = $wpdb->prepare("SELECT `id`,`signature_v_title`,`signature_v_type`,`signature_v_status`
                            FROM `wp_signature_variables` ");

    $json[] = '';
    $result = $wpdb->get_results($data);
    $variables = [];
    foreach ($result as $page) {
        $variables[] = array("var", $page->signature_v_title, $page->signature_v_status, $page->signature_v_type, $page->id);

    }
    echo json_encode($variables);
}

//check passwd
function check_passwd()
{

    $pass_signature = get_option('signature_passwd');
    $password = esc_sql($_POST['password']);
    $wp_hash = new PasswordHash(8, false);
    $passwd = $wp_hash->HashPassword($password);
    if ($wp_hash->CheckPassword($password, $pass_signature)) {

        echo json_encode('1');
    } else {
        echo json_encode('0');
    }
}

//change status variable
function change_status($wpdb, $i)
{
    $data = $wpdb->prepare("UPDATE wp_signature_variables
                        SET `signature_v_status` = IF(`signature_v_status` = 0 , 1, IF(`signature_v_status` = 1, 0, `signature_v_status`))
                        WHERE `ID` = %d  AND
                        `signature_v_status` IS NOT NULL", $i);
    $result = $wpdb->query($data);

    if ($result) {
        // check_variables_editor($wpdb);
        $json[] = array("result" => 1, "id" => $i);

    } else {
        $json[] = array("result" => '0');

    }
    echo $result->signature_variables;
    echo json_encode($json);
}

//adding variable - editor
function add_variable($wpdb, $variableName, $validationType, $editor, $active)
{
    //new variable
    $active = 0;

    if ($editor > 0) {

        $sql = $wpdb->prepare("INSERT
                        INTO `wp_signature_variables` (
                        `signature_v_author`,
                        `signature_v_type`,
                        `signature_v_title`,
                        `signature_v_status`)
                        VALUES (%d,%s,%s,%d)", array($editor, $validationType, $variableName, $active));

//
        var_dump($sql);
        if ($wpdb->query($sql)) {
            check_variables_editor($wpdb);

        }

    }}
?>
