
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="/css/styles.css">



    <title>Shop</title>
</head>
<body>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div id="infoMessage"><?php echo $message;?></div>
    <?php echo form_open("auth/create_user");?>


    <div class="form-group">
        <h3>Registration</h3>
        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('create_user_fname_label', 'first_name');?></label>
        <div class="col-sm-10">

            <?php echo form_input($first_name);?>
        </div>
    </div>
        <br />
        <br />
        <br />
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('create_user_lname_label', 'last_name');?></label>
        <div class="col-sm-10">

            <?php echo form_input($last_name);?>
        </div>
    </div>
        <br />
        <br />

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('create_user_email_label', 'email');?></label>
        <div class="col-sm-10">

            <?php echo form_input($email);?>
        </div>
    </div>
        <br />
        <br />

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('create_user_phone_label', 'phone');?></label>
        <div class="col-sm-10">

            <?php echo form_input($phone);?>
        </div>
    </div>
        <br />

        <br />

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">

                <?php echo form_input($company);?>
            </div>
        </div>
        <br />
        <br />

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('create_user_password_label', 'password');?></label>
        <div class="col-sm-10">

            <?php echo form_input($password);?>
        </div>
    </div>
        <br />
        <br />

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
        <div class="col-sm-10">

        <?php echo form_input($password_confirm);?>
</div>
</div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo form_submit('submit', lang('create_user_submit_btn'), "class='btn btn-default'");?>

        </div>
    </div>



    <?php echo form_close();?>
        </div>
</div>

</body>
</html>



