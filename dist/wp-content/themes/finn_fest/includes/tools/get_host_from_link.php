<?php

function get_host_from_link($link) {
	return preg_replace('~http://|https://~', '', $link);
}