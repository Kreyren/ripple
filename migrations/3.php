<?php
include dirname(__FILE__) . "/../osu.ppy.sh/inc/functions.php";

$GLOBALS["db"]->execute("ALTER TABLE `bancho_tokens` ADD `latest_heavy_packet_time` INT NOT NULL AFTER `latest_packet_time`;");