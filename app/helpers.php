<?php

function link_url($url, $body, $parameters = null)
{
    $url = url($url);
    $attributes = '';

    if ($parameters) {
        foreach ($parameters as $attribute => $value) {
            $attributes .= " {$attribute}='{$value}'";
        }
    }

    return "<a href='{$url}'{$attributes}>{$body}</a>";
}
