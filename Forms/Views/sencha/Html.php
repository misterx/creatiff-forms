<?php
/** @var Creatiff\Forms\UI\Html $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
?>
Ext.create('Ext.Component', {
	componentCls: '<?=$component->class;?>',
	id: '<?=$component->id;?>',
	html: '<?=$component->html;?>',
})