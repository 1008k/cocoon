<?php
//////////////////////////////////
// トップへ戻るボタンのAMP用script呼び出し
//////////////////////////////////
if ( is_go_to_top_button_visible() ): //トップへ戻るボタンを表示するか?>
  <amp-animation id="show-page-top" layout="nodisplay">
  <script type="application/json">
  {
    "direction": "alternate",
    "duration": "300ms",
    "fill": "both",
    "animations": [{
      "selector": ".go-to-top-common",
      "easing": "cubic-bezier(.4,0,.2,1)",
      "keyframes": [{
        "opacity": "1",
        "visibility": "visible"
      }]
    }]
  }
  </script>
  </amp-animation>
  <amp-animation id="hide-page-top" layout="nodisplay">
  <script type="application/json">
  {
    "direction": "alternate",
    "duration": "300ms",
    "fill": "both",
    "animations": [{
      "selector": ".go-to-top-common",
      "easing": "cubic-bezier(.4,0,.2,1)",
      "keyframes": [{
        "opacity": "0",
        "visibility": "hidden"
      }]
    }]
  }
  </script>
  </amp-animation>
<?php endif; ?>