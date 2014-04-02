[?php if ($sf_user->hasFlash('notice')): ?]
  <div class="alert alert-success">
    <a href="#" class="close fade" data-dismiss="alert">&times;</a>
    [?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?]
  </div>
[?php endif; ?]

[?php if ($sf_user->hasFlash('error')): ?]
  <div class="alert alert-warning">
    <a href="#" class="close fade" data-dismiss="alert">&times;</a>
    [?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?]
  </div>
[?php endif; ?]
