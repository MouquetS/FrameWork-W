<?php
$w_routes = array(
    ['GET', '/', 'Default#home', 'default_home'],

    ['GET', '/article/', 'Article#home', 'article_home'],
    ['GET', '/article/ecrire/', 'Article#ecrire', 'article_ecrire'],


    ['GET', '/user/', 'User#home', 'user_home'],
    ['GET', '/user/login/', 'User#login', 'user_login'],
    ['GET', '/user/logout/', 'User#logout', 'user_logout'],
    ['GET', '/user/inscription/', 'User#inscription', 'user_inscription'],



);