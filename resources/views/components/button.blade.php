<?php
$attributes = $attributes ?? [];
$tag = $attributes["href"] ? "a" : "button";
?>

<{{$tag}} {{ $attributes->merge(["class" => "button"]) }}>{!! $slot !!}</{{$tag}}>
