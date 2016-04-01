<?php

function array_2d_sort($arrays, $sort_key, $sort_order = SORT_DESC, $sort_type = SORT_NUMERIC)
{
    if (is_array($arrays)) {
        foreach ($arrays as $array) {
            if (is_array($array)) {
                $key_arrays[] = $array[$sort_key];
            } else {
                return false;
            }
        }
    } else {
        return false;
    }
    array_multisort($key_arrays, $sort_order, $sort_type, $arrays);
    return $arrays;
}

function create_user_info($type, $mail, $name, $password)
{
    return array(
        'type' => $type,
        'mail' => $mail,
        'name' => $name,
        'password' => $password,
        'time' => time(),
    );
}

function create_team_info($id, $name)
{
    return array(
        'id' => $id,
        'name' => $name,
        'content' => null,
    );
}