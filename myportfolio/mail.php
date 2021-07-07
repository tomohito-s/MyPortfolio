<?php
  mb_language("ja");
  mb_internal_encording("UTF-8");
  mb_send_mail("contact@s-tomohito.sakura.ne.jp", "表題subject", "本文の内容\r\n次の行");
?>