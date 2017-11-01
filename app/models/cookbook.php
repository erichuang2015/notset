<?php
/**
 * notset tools
 *
 * Simple personal project providing whois service,
 * cookbook manual, custom search and something more
 *
 * @copyright   Copyright (c) 2017, Anton Lukin <anton@lukin.me>
 * @license     MIT, https://github.com/antonlukin/notset/LICENSE
 * @version     1.0
 */

namespace notset\models;

use Flight as app;

class cookbook {
	public function render() {
		return app::render("cookbook");
	}
}