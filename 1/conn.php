<?php
$conn = new mysqli("localhost", "liuyanban", "liuyanban", "liuyanban");
if ($conn->connect_error)
    echo "链接失败";