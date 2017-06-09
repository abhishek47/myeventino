<?php

function flash($title, $message)
{
	
        session()->flash('flash_title', $title);
        session()->flash('flash_message', $message);  	
}

function sub_array(array $haystack, array $needle)
{
    return array_intersect_key($haystack, array_flip($needle));
}