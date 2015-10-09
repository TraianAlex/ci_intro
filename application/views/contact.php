<style type="text/css">
body{background: #b6b6b6;margin: 0;padding: 0;font-family: Arial;}
#contact_form{width: 300px;background: #f0f0f0;border: 1px solid white;margin: 100px auto 0;
    padding: 1em;-moz-border-radius: 3px;}
h1,h2,h3,h4,h5{margin-top: 0;font-family: arial black, arial;text-align: center;}
input[type=text], input[type=password], textarea{display: block;margin: 0 0 1em 0;width: 250px;
 border: 5px;-moz-border-radius: 1px;-webkit-border-radius: 1px;padding: 1em;}
input[type=submit], form a{border: none;margin-right: 1em;padding: 6px;text-decoration: none;
    font-size: 12px;-moz-border-radius: 4px;background: #348075;color: white;box-shadow: 0 1px 0 white;
    -moz-box-shadow: 0 1px 0 white;-webkit-box-shadow: 0 1px 0 white;}
input[type=submit]:hover, form a:hover{background: #287368;cursor: pointer;}

</style>
<div id="contact_form">
    <h1>Contact Ajax</h1>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5 alert-info"><?=$this->session->flashdata('message');?></div>
    <div class="col-md-3"></div>
</div><?php
    echo validation_errors();
    echo form_open("site/submit");
    echo form_input('name', 'Name', 'id="name"');
    echo form_input('email', "Email", 'id="email"');
    $data = ["name" => "message", "cols" => 35, "rows" => 12];
    echo form_textarea($data, 'Message', 'id="message"');
    echo form_submit("submit", "Submit", 'id="submit"');
    echo form_close();?>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $('#submit').click(function(){

    var name = $('#name').val();
    if(!name || name == "Name"){
        alert("Please enter your name");
        return false;
    }
    var form_data = {
        name: $('#name').val(),
        email: $('#email').val(),
        message: $('#message').val(),
        ajax: '1'
    };
    $.ajax({
        url: "<?=site_url('site/submit')?>",
        type: 'POST',
        data: form_data,
        success: function(msg){
            $('body').html(msg);
        }
    });
    return false;
});
</script>