<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="/css/styles.css">


    <!-- Latest compiled and minified JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script type="text/javascript">

    </script>
    <title>Shop</title>
</head>
<body>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1><?php echo lang('login_heading');?></h1>
        <p><?php echo lang('login_subheading');?></p>

        <div id="infoMessage"><?php echo $message;?></div>

        <?php echo form_open("auth/login");?>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">
            <?php echo lang('login_identity_label', 'identity');?></label>
            <div class="col-sm-10">
            <?php echo form_input($identity);?>
            </div>
        </div>
<br/>
        <br/>
       <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">
            <?php echo lang('login_password_label', 'password');?></label>
        <div class="col-sm-10">
            <?php echo form_input($password);?>
    </div>
</div>

        <br/>
        <br/>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
        <?php echo form_submit('submit', lang('login_submit_btn'), "class='btn btn-default'");?>
</div>
            </div>
        <?php echo form_close();?>
    </div>
</div>



</body>
</html>












