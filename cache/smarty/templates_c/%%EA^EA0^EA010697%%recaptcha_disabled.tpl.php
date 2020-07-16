<?php /* Smarty version 2.6.31, created on 2020-07-16 18:03:48
         compiled from C:%5CUsers%5Cccgm1%5CDocuments%5CJefferson%5CTrampo%5CSuiteCRM-7.10.27%5Cinclude%5Cutils/recaptcha_disabled.tpl */ ?>
<?php echo '
<script>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById(\'username_password\').value = document.getElementById(\'new_password\').value;
      document.getElementById(\'ChangePasswordForm\').submit();
    }
</script>
'; ?>