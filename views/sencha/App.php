<?php
/** @var Creatiff\Forms\UI\App $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once "_helpers.php";
?>
Ext.application({
	name   : '<?=$component->name;?>',
	launch : function() {
		<?php
		foreach($component->getComponents() as $child){
			echo 'var '.$child->id.' = '. $this->render($child).";\n";
		}
		?>
<?php if(!($component->defaultView() instanceof \Creatiff\Forms\UI\Viewport)){?>
		<?=$component->defaultView()->id?>.render(Ext.getBody());
<?php }?>
	}
});
