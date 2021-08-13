<?php

include_once "app/Controller/Backend/Comment.php";
include_once "app/Controller/Backend/Post.php";
include_once "app/Controller/Frontend/Comment.php";
include_once "app/Controller/Frontend/Post.php";
include_once "app/Model/Backend/Comment.php";

use \App\Controller\Backend\Comment as be_comment;
use \App\Controller\Backend\Post as be_post;
use \App\Controller\Frontend\Comment as fe_comment;
use \App\Controller\Frontend\Post as fe_post;
use \App\Model\Backend\CommentModel;

$be_cmt = new be_comment();
$be_cmt->getComment2();

$fe_cmt = new fe_comment();
$fe_cmt->getComment();

$mod = new CommentModel();
$mod->getComment();