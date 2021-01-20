<?php

function getEncryptedInfo($timeOut = 0, $send_to_uri_pattern = "") {
    if (empty($timeOut)) {
        $timeOut = 43200; // valid for 12 hours
    }
    $msgObj = new stdClass();
    $msgObj->from_users_id = User::getId();
    $msgObj->yptDeviceId = getDeviceID();
    $msgObj->token = getToken($timeOut);
    $msgObj->time = time();
    $msgObj->selfURI = getSelfURI();
    $msgObj->send_to_uri_pattern = $send_to_uri_pattern;
    $msgObj->autoEvalCodeOnHTML = array();
    if (empty($msgObj->videos_id)) {
        $msgObj->videos_id = getVideos_id();
    }
    if (empty($msgObj->live_key)) {
        $msgObj->live_key = isLive();
    }    
    if (!empty($msgObj->live_key)) {
        $msgObj->is_live = Live::isLiveAndIsReadyFromKey($msgObj->live_key['key'], $msgObj->live_key['live_servers_id'], true);
        if($msgObj->is_live){
             $code = "onlineLabelOnline('.liveOnlineLabel');";
        }else{
             $code = "onlineLabelOffline('.liveOnlineLabel');";
        }
        $msgObj->autoEvalCodeOnHTML[] = $code;
    }
    
    return encryptString(json_encode($msgObj));
}

function getDecryptedInfo($string) {
    $decriptedString = decryptString($string);
    $json = json_decode($decriptedString);
    if (!empty($json) && !empty($json->token)) {
        if (isTokenValid($json->token)) {
            return $json;
        } else {
            _error_log("socket:getDecryptedInfo: token is invalid ");
        }
    } else {
        _error_log("socket:getDecryptedInfo: json->token is empty ({$decriptedString})");
    }
    return false;
}

class SocketMessageType {

    const NEW_CONNECTION = "NEW_CONNECTION";
    const NEW_DISCONNECTION = "NEW_DISCONNECTION";
    const DEFAULT_MESSAGE = "DEFAULT_MESSAGE";
    const ON_VIDEO_MSG = "ON_VIDEO_MSG";
    const ON_LIVE_MSG = "ON_LIVE_MSG";

}

function getTotalViewsLive_key($live_key) {
    if (empty($live_key)) {
        return false;
    }
    $live_key = object_to_array($live_key);
    _mysql_connect();
    $liveUsersEnabled = \AVideoPlugin::isEnabledByName("LiveUsers");
    if ($liveUsersEnabled) {
        $liveUsers = new \LiveOnlineUsers(0);
        $total = $liveUsers->getTotalUsersFromTransmitionKey($live_key['key'], $live_key['live_servers_id']);
    } else {
        $total = null;
    }

    _mysql_close();

    return $total;
}
