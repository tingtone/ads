<?php /* Smarty version 2.6.26, created on 2011-08-26 08:50:27
         compiled from ../tpl/www/common/redirect.tpl */ ?>
<html>
 <head>
  <title>Redirecting...</title>
   <meta http-equiv="refresh" content="0; url=<?php echo $this->_tpl_vars['url']; ?>
">
  </head>
  <body>
   <script type="text/javascript" language="javascript">
    location.replace("<?php echo $this->_tpl_vars['url']; ?>
")
   </script>
 </body>
</html>