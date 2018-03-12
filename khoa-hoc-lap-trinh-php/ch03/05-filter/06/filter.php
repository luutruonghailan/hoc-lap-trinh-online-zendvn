<?php

	if(!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
		echo 'Email khong hop le';
	}else {
		echo 'Email hop le';
	}