<?php
  namespace hoge\lib;
  function output($s) {
    echo strtoupper($s)."\n";
  }

  namespace fuga\lib;
  function output($s) {
    echo "(*{$s}*)\n";
  }

  namespace project_a;

  \hoge\lib\output("test");

  \fuga\lib\output("test");
 ?>
