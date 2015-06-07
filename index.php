<?php
    // {common variables and functions }}
include_once('ww.incs/common.php');
$page=isset($_REQUEST['page'])?$_REQUEST['page']:'';
$id=isset($_REQUEST['id'])?(int)$_REQUEST['id']:0;
//}
    // { get current page id
    if(!$id) {
        if($page) { //load by name
        $r=Page::getInstanceByName($page);
        if($r && isset($r->id))$id=$r->id;
        unset($r);
        }
        if(!$id) { //else load by special
        $r=Page::getInstanceBySpecial($special);
        if($r && isset($r->id))$id=$r->id;
        unset($r);
        }
    }

 //load page data
    if($id) {
        $PAGEDATA=(isset($r) && $r)? : Page::getInstance($id);
    } else {
        echo "404 thing goes here";
        exit;
    }
   echo $PAGEDATA->$body;