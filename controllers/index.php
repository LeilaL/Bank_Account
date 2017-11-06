<?php

function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");

$mon_chien = new Chien("fifi", 5, "long");

include "../views/indexVue.php";
 ?>
