<?php echo $this->Element('projects/add_form', array(), array('plugin' => 'Projects')); ?>

<?php 
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Project Manager',
		'items' => array(
			$this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')),
			)
		),
	)));
?>


