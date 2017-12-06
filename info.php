<?php

  echo $randName = strtoupper(md5(uniqid(rand(),true))) . ".jpg" . "<br>";
  echo md5(uniqid(rand(1,100),true));