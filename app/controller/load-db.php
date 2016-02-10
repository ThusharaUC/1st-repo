<?php
/**
 * Created by Thush
 */
include '../core/init.php';
include '../models/dbConfig.php';
$db=DB::getInstance();

$project="SELECT * FROM projects";
$presult=$db->query($project)->result();
$pcount=$db->query($project)->count();

$nproject="SELECT * FROM projects WHERE progress!='100%'";
$npresult=$db->query($nproject)->result();
$npcount=$db->query($nproject)->count();

$clist="SELECT * FROM client";
$cresult=$db->query($clist)->result();
$ccount=$db->query($clist)->count();

$photo="SELECT * FROM photos";
$photores=$db->query($photo)->result();
$photocnt=$db->query($photo)->count();

