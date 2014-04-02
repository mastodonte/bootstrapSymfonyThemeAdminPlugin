[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
  <div class="form-group [?php echo $class ?]">
      [?php echo $form[$name]->renderLabel($label, array('class' => 'col-sm-3 control-label')) ?]
      
      <div class="col-sm-8 [?php echo $class ?]">
        [?php echo $form[$name]->renderError() ?]
  
        [?php echo $form[$name]->render(array('class' => 'form-control')) ?]
  
        [?php if ($help || $help = $form[$name]->renderHelp()): ?]
          <p class="help-block">[?php echo __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') ?]</p>
        [?php endif; ?]
    </div>
  </div>
[?php endif; ?]
