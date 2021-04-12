<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div class="vc_message_box vc_message_box_closeable vc_message_box-standard vc_message_box-square vc_color-success vc_message_box_closeable inited">
    <div class="vc_message_box-icon">
        <i class="fa fa-check"></i>
    </div>
    <p><?= $message ?></p>
</div>
