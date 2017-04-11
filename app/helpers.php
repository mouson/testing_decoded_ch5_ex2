<?php

function link_url($url, $body)
{
    $url = url($url);
    return "<a href='{$url}'>{$body}</a>";
}
