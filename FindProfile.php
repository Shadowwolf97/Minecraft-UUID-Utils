<?php

include('MinecraftUUID.php');

$user_name = (filter_input(INPUT_GET, 'username')) ? filter_input(INPUT_GET, 'username') : 'Shadowwolf97';
$uuid = str_replace('-', '', filter_input(INPUT_GET, 'uuid'));

$profile = (!empty($uuid)) ? ProfileUtils::getProfile($uuid) : ProfileUtils::getProfile($user_name);

if ($profile != null) {
    $result = $profile->getProfileAsArray();
    echo 'username: '.$result['username'].'<br>';
    echo 'uuid: '.$result['uuid'].'<br/>';
}
