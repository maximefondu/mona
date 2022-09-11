<?php
$classes = "button";
$attributes = $attributes ?? [];
$tag = $attributes["href"] ? "a" : "button";
?>

<{{$tag}} {{ $attributes->merge(["class" => $classes]) }}>{!! $slot !!}</{{$tag}}>
