<?php
if (!function_exists('dump')) {
    function dump($var, $echo = true, $label = null, $strict = true)
    {
        $label = ($label === null) ? '' : rtrim($label) . ' ';
        if (!$strict) {
            if (ini_get('html_errors')) {
                $output = print_r($var, true);
                $output = "<pre>" . $label . htmlspecialchars($output, ENT_QUOTES) . "</pre>";
            } else {
                $output = $label . " : " . print_r($var, true);
            }
        } else {
            ob_start();
            var_dump($var);
            $output = ob_get_clean();
            if (!extension_loaded('xdebug')) {
                $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
                $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
            }
        }
        if ($echo) {
            echo($output);
            return null;
        } else
            return $output;
    }
}

function data_log()
{
    $args = func_get_args();
    $str = "";
    foreach ($args as $arg) {
        if (is_array($arg) || is_object($arg)) {
            $str .= json_encode($arg);
        } else {
            $str .= $arg;
        }
        $str .= "; ";
    }
    $fp = fopen('log/data_log_' . date("m_d"), 'a+');
    if ($fp) {
        fwrite($fp, date("Y-m-d H:i:m") . "[INFO]" . $str . "\n");
        fclose($fp);
    }
}

function dump_log()
{
    $args = func_get_args();
    $str = "";
    foreach ($args as $arg) {
        if (is_array($arg) || is_object($arg)) {
            $str .= json_encode($arg);
        } else {
            $str .= $arg;
        }
        $str .= "; ";
    }
    $fp = fopen('log/dump_log_' . date("m_d"), 'a+');
    if ($fp) {
        fwrite($fp, date("Y-m-d H:i:m") . "[INFO]" . $str . "\n");
        fclose($fp);
    }
}

function clean_log()
{
    $args = func_get_args();
    $str = "";
    foreach ($args as $arg) {
        if (is_array($arg) || is_object($arg)) {
            $str .= json_encode($arg);
        } else {
            $str .= $arg;
        }
        $str .= "; ";
    }
    $fp = fopen('log/clean_log_' . date("m_d"), 'a+');
    if ($fp) {
        fwrite($fp, date("Y-m-d H:i:m") . "[INFO]" . $str . "\n");
        fclose($fp);
    }
}

function my_error_log()
{
    $e = new Exception;
    $stack_trace = $e->getTraceAsString();
    $args = func_get_args();
    $str = "";
    foreach ($args as $arg) {
        if (is_array($arg) || is_object($arg)) {
            $str .= json_encode($arg);
        } else {
            $str .= $arg;
        }
        $str .= "; ";
    }
    $str .= "\n" . $stack_trace;
    $fp = fopen('log/error_log_' . date("m_d"), 'a+');
    if ($fp) {
        fwrite($fp, date("Y-m-d H:i:s") . "[ERROR]" . $str . "\n");
        fclose($fp);
    }
}

function is_null2($var)
{
    if (is_array($var)) {
        if (count($var) == 0)
            return true;
        else
            return false;
    }
    if (!isset($var))
        return true;
    if ($var == false || $var == null || strlen($var) == 0)
        return true;
    return false;
}

function is_dev()
{
    return config_item("dev") === true;
}

function get_miliseconds()
{
    return floor(microtime(true) * 1000);
}

function array_unshift_assoc(&$arr, $key, $val)
{
    $arr = array_reverse($arr, true);
    $arr[$key] = $val;
    $arr = array_reverse($arr, true);
    return count($arr);
}

function my_http_curl_get($url)
{
    $ch = curl_init();
    $timeout = 15;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $file_data = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    return array(
        "file_data" => $file_data,
        "info" => $info,
    );
}

function my_http_curl_post($url, $data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}