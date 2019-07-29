<?php

function get_phone_link($phone) {
	return 'tel:' . preg_replace('~[^0-9+]+~', '', $phone);
}
