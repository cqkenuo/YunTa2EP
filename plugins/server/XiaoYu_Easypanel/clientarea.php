<?php

function ClientArea_LoginService($params){
    echo '<form action="http://'.$params['server']['serverip'].':3312/vhost/index.php?c=session&a=login" method="POST"><input type="hidden" name="username" value="'.$params['service']['username'].'"><input type="hidden" name="passwd" value="'.$params['service']['password'].'"><button type="submit">点击登陆</button></form>';
}

?>