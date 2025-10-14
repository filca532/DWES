<?php
require_once 'TeamMember.php';

$team1 = new TeamMember("Ana Garcia", "ana.g@nexus.com", "Developer");

echo $team1 -> getProfile();
?>