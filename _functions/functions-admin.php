<?php
#=================================================
# 管理画面 (接頭辞: my_admin_ )
#=================================================

    #-----------------------------------
    # メニュー操作
    #-----------------------------------
    add_action( 'admin_menu', 'my_admin_remove_menus' );
    function my_admin_remove_menus(){
      remove_menu_page( 'edit.php' ); //「投稿」メニュー非表示
    }