<?php

function link_url($url, $body, $parameters = null)
{
    $url = url($url);
    $attributes = $parameters ? Html::attributes($parameters) : '';

    return "<a href='{$url}'{$attributes}>{$body}</a>";
}
