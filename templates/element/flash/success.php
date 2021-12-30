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
<div style="margin-top: 20px;" class="message success" onclick="this.classList.add('hidden')"><?= $message ?> 
<button type="button" class="close" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>