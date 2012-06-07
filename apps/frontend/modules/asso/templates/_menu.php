<div class="wrap">
  <div id="asso-menu" style="background:<?php echo $couleur ?>">
    <a href="<?php echo url_for('assos_show', $asso) ?>"><i class="icon-home icon-white"></i> <?php echo $asso->getName() ?></a>
    <span class="arrow-e"></span>
    <a href="<?php echo url_for('asso_articles', $asso) ?>">Articles</a>
    <a href="<?php echo url_for('asso_events', $asso) ?>">Événements</a>
    <a href="<?php echo url_for('asso_trombi', $asso) ?>">Trombinoscope</a>
    <?php if($sf_user->isAuthenticated() && $sf_user->getGuardUser()->hasAccess($asso->getLogin(), 0x02)): ?>
      <a href="<?php echo url_for('asso_member', $asso) ?>">Gestion des membres</a>
    <?php endif ?>
  </div>
</div>