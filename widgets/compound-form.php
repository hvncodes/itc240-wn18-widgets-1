<?php include 'includes/config.php'?>
<?php get_header()?>
<h2>Compound Form</h2>
<?php
//compound-form.php

if(isset($_POST['Submit']))
{//send email
    
    $to = "john.nguyen3@seattlecentral.edu";
    
    $subject = "Random Form " . date("m/d/y, G:i:s");
    
    //collect and clean post data
    $FirstName = coffee_clean_post('FirstName');
    $LastName = coffee_clean_post('LastName');
    $Email = coffee_clean_post('Email');
    $Comments = coffee_clean_post('Comments');
    
    $Beverages = $_POST['Beverages'];
    
    //build beverages list
    $a_list = $Beverages[0];//initialize fencepost
    for($x=1; $x<count($Beverages); $x++){
        $a_list .= ', ' . $Beverages[$x];
    }
    
    //echo $a_list = 'echo test: Beverages: ' . $a_list;
    
    //build body of email
    $text = '';//initialize variable
    
    $text .= 'First Name: ' . $FirstName . PHP_EOL . PHP_EOL;
    $text .= 'Last Name: ' . $LastName . PHP_EOL . PHP_EOL;
    $text .= 'Email: ' . $Email . PHP_EOL . PHP_EOL;
    $text .= 'Beverages: ' . $a_list . PHP_EOL . PHP_EOL; 
    $text .= 'Comments: ' . $Comments . PHP_EOL . PHP_EOL;
    
    $headers = 'From: noreply@blanchefil.com' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    
    mail($to,$subject,$text,$headers);
    
    
    
    
    echo '
    <div clas="row">
        <div class="col-lg-12">
            <h3>Form Sent</h3>
            <p>Thank you for your submission!</p>
        </div>
    </div>
    ';
    
    echo 'Debugging? Helper Thing.';
    echo '<pre style="text-align:left;">';
    var_dump($_POST);
    echo '</pre>';
    
}else{//show compound form!
    echo '
    <form action="" method="post">
    
    <div class="row">
        <div class="form-group col-lg-4">
            <label class="text-heading" for="FirstName">First Name</label>
            <input class="form-control" type="text" name="FirstName" id="FirstName" autofocus required/>
        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading" for="LastName">Last Name</label>
            <input class="form-control" type="text" name="LastName" id="LastName" required/>
        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading" for="Email">Email</label>
            <input class="form-control" type="email" name="Email" id="Email" required/>
        </div>
        
        <div class="clearfix"></div>
        
        <div class="form-group col-lg-12">
            <label class="text-heading" for="Beverages">What Beverages Are You Interested In?</label><br />
            <input type="checkbox" name="Beverages[]" id="Beverages" value="Americano" tabindex="40" /> Americano <br />
            <input type="checkbox" name="Beverages[]" id="Beverages" value="Cappuccino" /> Cappuccino <br />
            <input type="checkbox" name="Beverages[]" id="Beverages" value="Motor Oil" /> Motor Oil <br />
        </div>
        
        <div class="form-group col-lg-12">
            <label class="text-heading" for="Comments">Comments</label>
            <textarea class="form-control" name="Comments" id="Comments"></textarea>
        </div>
        
        <div class="form-group col-lg-12">
            <label class="text-heading" for="MailingList">Would you like to join our mailing list?</label><br />
            <input type="radio" name="MailingList" id="MailingList" value="Yes" title="Mailing list is required" required checked/> Yes 
            <input type="radio" name="MailingList" id="MailingList" value="No" /> No 
        </div>
        
        <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-secondary" name="Submit">Submit</button>
        </div>
        
    </div>
    
    </form>
    ';

}
?>
<?php get_footer();

function coffee_clean_post($key)
{
    if(isset($_POST[$key])){
        return strip_tags(trim($_POST[$key]));
    }else{
        return '';
    }
    
}
?>