<?php

    if(isset($_GET['lang']) && $_GET['lang'] == 'es'){
        define('LANG_NAME_C1','Nombre');
        define('LANG_EMAIL_C1','Email');
        define('LANG_SUBJECT_C1','Asunto');
        define('LANG_MESSAGE_C1','Mensaje');
        define('LANG_SEND_C1','ENVIAR');
        define('LANG_SENT_C1','Gracias, tu mensaje se ha enviado. <br>Nos comunicaremos contigo lo más pronto posible.');
        define('LANG_DATE_C1','Fecha');
    }else{
        define('LANG_NAME_C1','Name');
        define('LANG_EMAIL_C1','Email');
        define('LANG_SUBJECT_C1','Subject');
        define('LANG_MESSAGE_C1','Message');
        define('LANG_SEND_C1','SEND');
        define('LANG_SENT_C1','Thank you, your message has been sent. <br>We will contact you as soon as possible.');
        define('LANG_DATE_C1','Date');
    }


    if(count($_POST)>0){
        $msg = "<h2>Msg through APP<h2>";
        $msg .= "Name: " . htmlspecialchars($_POST['f_name']) . '<br>';
        $msg .= "Email: " . htmlspecialchars($_POST['f_email']) . '<br>';
        //$msg .= "Subject: " . htmlspecialchars($_POST['f_subject']) . '<br>';
        $msg .= "Date:" . htmlspecialchars($_POST['f_date']) . '<br>';
        $msg .= "Message: " . htmlspecialchars($_POST['f_message']) . '<br>';

        //$to = get_field('c_global_email','option');
        $subject = 'Vallartalifestyles - Contact';
        $body = $msg;
        $headers = array('Content-Type: text/html; charset=UTF-8');
        //wp_mail( $to, $subject, $body, $headers );
        //$to2 = 'paco@vallartalifestyles.com';
        $to2 = 'jose@vallartalifestyles.com';
        wp_mail( $to2, $subject, $body, $headers );
        //echo json_encode(array('success'=>true))  ;
        //exit;

        $message_sent = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Nimabay</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" crossorigin="anonymous">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
          
        <link rel="stylesheet" href="css/styles.css">

    </head>
<body class="wrapper">
    
    <div class="">
        <div class="container">
            <div class="row">
                <br>
                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 logo-wrapper" >
                    <img src="images/logo-nimabay.png" class="logo"/>
                </div>
    
                
                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                    <?php if(isset($message_sent)){?>
                        <h4 style="margin-bottom:20px;"><?=LANG_SENT_C1?></h4>
                    <?php } ?>
    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="field_name"><?=LANG_NAME_C1?></label>
                            <input type="text" class="form-control" id="field_name" name="f_name" value="">
                        </div>
                        <div class="form-group">
                            <label for="field_email"><?=LANG_EMAIL_C1?></label>
                            <input type="email" class="form-control" id="field_email" name="f_email" value="">
                        </div>
                        <!--<div class="form-group">
                            <label for="field_subject"><?=LANG_SUBJECT_C1?></label>
                            <input type="text" class="form-control" id="field_subject" name="f_subject" value="">
                        </div>-->
                        <div class="form-group">
                            <label for="field_message"><?=LANG_MESSAGE_C1?></label>
                            <textarea id="field_message" class="form-control" rows="3" name="f_message"></textarea>
                        </div>
    
    
                        <div class="form-group">
                            <label for="field_message"><?=LANG_DATE_C1?></label>
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" name="f_date" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
    
                        <button type="submit" class="btn btn-default btn-primary nima-bg-color btn-send"><?=LANG_SEND_C1?></button>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.js" crossorigin="anonymous"></script>

    <?php if(isset($_GET['lang']) && $_GET['lang']=='es'){?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/locale/es.js"></script>
    <?php } ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
 
        });
    </script>
</body>
</html>

