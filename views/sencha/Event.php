<?php
/** @var Creatiff\Forms\UI\Event $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
?>
<?=$component->getName()?>: {
	fn: <?=renderPropertyCode($component,$this,'handler');?>
}