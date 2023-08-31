<?php
#=================================================
# フロント画面 (接頭辞: my_front_ )
#=================================================

    #-----------------------------------
    #   トップページ判定＆存在しないページからのリダイレクト
    #-----------------------------------
    function my_front_is_home(){
      if (get_option('show_on_front') == 'page') {
        $is_home = (is_front_page());
      } else {
        $is_home = (is_front_page() && is_home() && !is_paged());
      }

      //ページが存在しない
      if (!$is_home && get_the_title() == '') {
        wp_safe_redirect(home_url('/'));
        exit;
      }
      return $is_home;
    }

    #-----------------------------------
    #   よくあるグローバルメニュー用の判定
    #-----------------------------------
    function my_front_global_menu(){
      global $post;

      //トップページ
      $gPage        = my_front_is_home() ? 'home' : '';

      //固定ページの場合
      if (!$gPage && is_page()) {
        $_post      = $post;

        //一番上の固定ページ情報取得
        while ($_post->post_parent != 0) {
          $_post    = get_post($_post->post_parent);
        }
        $gPage      = get_post($_post->ID)->post_name;
      }

      //デフォルトのページ一覧
      if (!$gPage) {
        if (get_option('show_on_front') == 'page') {
          $gPage = is_home() ? 'post' : '';
        }
      }

      //投稿タイプを返す
      if (!$gPage) {
        $gPage_data = get_page(get_the_ID());
        $gPage      = $gPage_data->post_type;
      }
      return $gPage;
    }

    #-----------------------------------
    #   WP-PageNaviのマウスオーバー文言を変更
    #-----------------------------------
    add_filter('wp_pagenavi', 'my_front_wp_pagenavi', 10, 1);
    function my_front_wp_pagenavi($html)
    {
        $html = preg_replace('/title="Page ([0-9]+)"/i', 'title="$1ページ目"', $html);
        return $html;
    }

    #-----------------------------------
    #   両備グループのRSSを取得
    #-----------------------------------
    function my_front_ryobi_rss()
    {
      $list     = array();

      //お知らせ
      $options['ssl']['verify_peer']      = false;
      $options['ssl']['verify_peer_name'] = false;
      $rss      = simplexml_load_string( file_get_contents( 'https://ryobi.gr.jp/news/feed/', false, stream_context_create( $options ) ) );

      $list     = my_front_ryobi_rss_merge($list, $rss, 'news');

      //代表メッセージを取得
      $rss      = simplexml_load_string( file_get_contents( 'https://ryobi.gr.jp/message/feed/', false, stream_context_create( $options ) ) );
      $list     = my_front_ryobi_rss_merge($list, $rss, 'message');

      //配列をキーで逆順にソート
      krsort($list);

      return $list;
    }

    #-----------------------------------
    #   RSSをマージ
    #-----------------------------------
    function my_front_ryobi_rss_merge($list, $rss, $type)
    {
      $items = $rss->channel->item;
      $items = count($items) ? $items : array();
      foreach ($items as $item) {
        //ベースキー
        $key        = date('YmdHis', strtotime((string)$item->pubDate));

        $data       = array(
            "pubDate" => date('Y-m-d H:i:s', strtotime((string)$item->pubDate)),
            "link"    => (string)$item->link,
            "title"   => (string)$item->title,
            "type"    => $type,
        );

        //キーが被らないように番号を振る
        $no   = 0;
        do {
          $index    = sprintf($key."%02d", $no);
          $no++;
          if ($no == 100) {
            //諦める
            break;
          }
        } while ($list[$index]);

        $list[$index]  = $data;
      }
      return $list;
    }

    #-----------------------------------
    # タイトルタグを出力
    #-----------------------------------
    add_action( 'after_setup_theme', 'my_front_setup_my_theme');
    function my_front_setup_my_theme() {
        add_theme_support( 'title-tag' );
    }

    #-----------------------------------
    #   デフォルトのdescriptionを出す
    #-----------------------------------
    add_filter('aioseop_description_full', 'my_front_aioseop_description_full', 10, 1);
    function my_front_aioseop_description_full($description)
    {
        global $gDescription;
        $description = ($description != '') ? $description : $gDescription;
        return $description;
    }

    #-----------------------------------
    # オートパラグラフ オフ(Pタグが勝手に挿入されるのをブロック)
    #-----------------------------------
    remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
    remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする
