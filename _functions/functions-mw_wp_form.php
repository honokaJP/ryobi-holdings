<?php
#=================================================
# MW WP Form (接頭辞: my_mwform_ )
#=================================================

    #-----------------------------------
    # お問い合わせフォームのバリデーション
    #-----------------------------------
    function my_mwform_contact_form_rule( $Validation, $data ) {

        // バリデーションチェック
        $Validation->set_rule( 'NAME',       'noEmpty',  array( 'message' => '必須項目に入力してください。' ) );
        $Validation->set_rule( 'KANA',       'hiragana', array( 'message' => 'ひらがなでご入力ください。' ) );
        $Validation->set_rule( 'MAIL',       'noEmpty',  array( 'message' => '必須項目に入力してください。' ) );
        $Validation->set_rule( 'MAIL',       'mail',     array( 'message' => '入力されたメールアドレスに間違いがあります。' ) );

        return $Validation;

    }
    add_filter( 'mwform_validation_mw-wp-form-112', 'my_mwform_contact_form_rule', 10, 3 );

