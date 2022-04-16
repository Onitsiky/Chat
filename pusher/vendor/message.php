<?php
  require __DIR__ . '../vendor/autoload.php';

  $options = array(
    'cluster' => 'mt1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'b3a4655789e146592bbf',
    '4b86d462007a6e4e0af9',
    '1383105',
    $options
  );

  $ready_data = '<div class="dataMess">
  <header>' .htmlspecialchars($_POST['name']). '</header>
  <main>' .htmlspecialchars($_POST['message']). '</main>
</div>';
// htmlspecialchars is used to remove tag ... it's especially used to avoid random script to be executed in the page
// for example: message => <script>alert('hacked')</script> ... < and > will be changed to &lt; and &gt;


if ($pusher->trigger('WeChat', 'event_on_send_message', $ready_data)){
// channel you have set in the javascript
// 'even_on_send_message'... is an event which will bind your javascript and pusher
echo 'success';
// handle error
} else {
echo 'error';
 
}
?>