<link href="<?php echo URL ?>css/baked.css" rel="stylesheet" type="text/css">
<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo URL ?>js/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<?php if (EDITTING) : ?>
  <link href="<?php echo URL ?>js/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css" rel="stylesheet" type="text/css">
  <link href="<?php echo URL ?>css/editor.css" rel="stylesheet" type="text/css">
<?php endif ; ?>
<?php foreach ($blockEquipments['css'] as $css) : ?>
  <?php if (!EDITTING && !empty($css['editting'])) continue ; ?>
  <link href="<?php echo URL.$css['file'] ?>" rel="stylesheet" type="text/css">
<?php endforeach ; ?>