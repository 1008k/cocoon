<div class="metabox-holder">

<!-- その他 -->
<div id="editor" class="postbox">
  <h2 class="hndle"><?php _e( 'エディター設定', THEME_NAME ) ?></h2>
  <div class="inside">

    <p><?php _e( '投稿・固定ページ管理画面の生きた設定です。', THEME_NAME ) ?></p>

    <table class="form-table">
      <tbody>

        <!-- 文字カウンター -->
        <tr>
          <th scope="row">
            <?php generate_label_tag(OP_ADMIN_EDITOR_COUNTER_VISIBLE, __('文字カウンター', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(OP_ADMIN_EDITOR_COUNTER_VISIBLE , is_admin_editor_counter_visible(), __( 'タイトル等の文字数カウンター表示', THEME_NAME ));
            generate_tips_tag(__( 'タイトルや、SEOタイトル、メタディスクリプションの文字数を表示します。', THEME_NAME ));
            ?>
          </td>
        </tr>

        <!-- 確認ダイアログ -->
        <tr>
          <th scope="row">
            <?php generate_label_tag(OP_CONFIRMATION_BEFORE_PUBLISH, __('確認ダイアログ', THEME_NAME) ); ?>
          </th>
          <td>
            <?php
            generate_checkbox_tag(OP_CONFIRMATION_BEFORE_PUBLISH , is_confirmation_before_publish(), __( 'ページ公開前に確認アラートを出す', THEME_NAME ));
            generate_tips_tag(__( '記事を投稿する前に確認ダイアログを表示します。', THEME_NAME ));
            ?>
          </td>
        </tr>


      </tbody>
    </table>

  </div>
</div>

</div><!-- /.metabox-holder -->