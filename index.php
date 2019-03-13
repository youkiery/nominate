<?php
  include_once "/include/class/xtemplate.php";
  include_once "/include/config/database.php";

  $xtpl = new xtemplate("index.tpl", "include/template/page");
  $xtpl->assign("title", "Petcoffee web service");
  $xtpl->assign("header", "");
  $xtpl->assign("content", "under construct");
  $xtpl->assign("footer", "");
  $xtpl->parse("main");
  echo $xtpl->text();
