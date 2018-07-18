<?php
//入力内容を表示する
for ($i = 0; $i < count(@$_POST["hotel"]); $i++){
  echo @$_POST["hotel"][$i]."　";
}
echo "</p>\n";
?>