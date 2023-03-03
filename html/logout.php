<?php
@ob_start();
@session_start();
unset($_SESSION['SES_ID']);
unset($_SESSION['SES_STDCODE']);
unset($_SESSION['SES_STDNAME_FULL_TH']);
unset($_SESSION['SES_STEFF_ID']);

session_destroy();
			echo"<script>window.location='index.php';</script>";
?>