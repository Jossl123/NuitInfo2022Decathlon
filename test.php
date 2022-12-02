<?php
$r=shell_exec("C:/Users/jogautier/AppData/Local/Programs/Python/Python311/python.exe ./fetch.py https://contents.mediadecathlon.com/s805210/k$0f89cfa1b3aa05f81672dbd3b2287e29/dbi_1f2ff19d+fe7b+4745+b829+d33071c00b3d.jpg"); 
$r = json_decode($r, true);
$sportName=$r["data"]["sport"][0]["name"];
echo $sportName;