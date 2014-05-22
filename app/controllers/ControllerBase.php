<?php

use Phalcon\Mvc\Controller;


class ControllerBase extends Controller
{
	public function to($url) {
    	echo '<meta http-equiv="refresh" content="0;url=' . $this->url->getBaseUri() . $url .'" />';
    }

}
