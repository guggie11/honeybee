<script type="text/javascript">
    var public_lang = "<?php echo e(trans('backLang.calendarLanguage')); ?>"; // this is a public var used in app.html.js to define path to js files
    var public_folder_path = "<?php echo e(URL::to('')); ?>"; // this is a public var used in app.html.js to define path to js files
</script>
<script src="<?php echo e(URL::to('backEnd/scripts/app.html.js')); ?>"></script>
<?php echo Helper::SaveVisitorInfo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>