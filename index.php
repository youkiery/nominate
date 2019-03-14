<?php
  include_once "/include/class/xtemplate.php";
  include_once "/include/config/database.php";
  include_once "/include/class/database.php";

  $db = new Database($dbserver, $dbuser, $dbpass, $dbname);
  $db->checkConnect();

  $xtpl = new xtemplate("index.tpl", "include/template/page");
  $xtpl->assign("title", "Petcoffee web service");
  $xtpl->assign("header", "");
  $xtpl->assign("content", "under construct");
  $xtpl->assign("footer", "");
  $xtpl->parse("main");
  echo $xtpl->text();
