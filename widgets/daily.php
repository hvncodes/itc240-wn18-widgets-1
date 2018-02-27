<?php include 'includes/config.php'?>
<?php
//initials
$myDate = date('D j M Y');
//daily logic goes here:

if($_GET['day'])
{//data in querystring, use it!
    $day = $_GET['day'];
}else{//use current date
    $day = date('l');
}

switch($day)
{
    case 'Sunday':
        $myCoffee = 'Macchiato';
        $myCoffeeImg = 'macchiato.jpg';
        $myCoffeeAlt = "Image of Sunday\'s Coffee Special";
        $color = 'orange';
        $content = 'Macchiato is an coffee beverage with a small amount of milk. In Italian, macchiato means \"stained\" or \"spotted\" so the literal translation of a caffè macchiato is \"stained coffee\", or coffee with a spot of milk.';
        $history = 'Ethical marfa forage, banh mi unicorn VHS polaroid. Health goth succulents fam swag literally copper mug yr yuccie 3 wolf moon cray tumeric vinyl. Taiyaki edison bulb tilde tote bag, cloud bread vape semiotics prism jianbing try-hard helvetica organic. Kombucha four dollar toast vexillologist jianbing, biodiesel cred photo booth beard dreamcatcher affogato chia.';
    break;
        
    case 'Monday':
        $myCoffee = 'Mocha';
        $myCoffeeImg = 'mocha.jpg';
        $myCoffeeAlt = "Image of Monday\'s Coffee Special";
        $color = 'blue';
        $content = 'A mocha, also called mocaccino, is a chocolate-flavored variant of a latte.';
        $history = 'Forage locavore hashtag, everyday carry wolf kickstarter williamsburg small batch photo booth +1 paleo flannel man braid cliche. Copper mug yr food truck organic yuccie, squid activated charcoal pork belly skateboard lo-fi.';
    break;
        
    case 'Tuesday':
        $myCoffee = 'Chai Latte';
        $myCoffeeImg = 'chailatte.jpg';
        $myCoffeeAlt = "Image of Tuesday\'s Coffee Special";
        $color = 'purple';
        $content = 'Chai Latte is black tea infused with cinnamon, herbs, spices, and steamed milk and topped with foam for a beverage that is both sweet and spicy.';
        $history = 'Neutra pickled viral mumblecore cloud bread mlkshk, craft beer 3 wolf moon celiac enamel pin. Slow-carb lomo hell of, cardigan polaroid photo booth actually taxidermy authentic put a bird on it helvetica lumbersexual thundercats biodiesel.';
    break;
        
    case 'Wednesday':
        $myCoffee = 'Cappuccino';
        $myCoffeeImg = 'cappuccino.jpg';
        $myCoffeeAlt = "Image of Wednesday\'s Coffee Special";
        $color = 'yellow';
        $content = 'Cappuccino is a coffee beverage that is made with double espresso and hot milk, with the surface topped with foamed milk.';
        $history = 'Retro subway tile shoreditch, listicle cray poutine prism godard austin schlitz. Umami crucifix lumbersexual banh mi ennui woke. Shabby chic cold-pressed humblebrag actually, cray tofu quinoa aesthetic chillwave yr. Master cleanse small batch keffiyeh try-hard. Ennui shaman beard chartreuse, williamsburg XOXO cardigan polaroid gluten-free bitters hammock microdosing trust fund iceland.';
    break;
        
    case 'Thursday':
        $myCoffee = 'Iced Coffee';
        $myCoffeeImg = 'icedcoffee.jpg';
        $myCoffeeAlt = "Image of Thursday\'s Coffee Special";
        $color = 'greenyellow';
        $content = 'Iced coffee is a cold brew of coffee with ice.';
        $history = "Glossier four loko church-key retro, health goth butcher letterpress asymmetrical venmo bushwick. Tilde letterpress subway tile try-hard, stumptown sartorial actually cronut schlitz readymade you probably haven\'t heard of them edison bulb neutra unicorn brooklyn. Farm-to-table cliche venmo aesthetic pug prism thundercats.";
    break;
        
    case 'Friday':
        $myCoffee = 'espresso';
        $myCoffeeImg = 'espresso.jpg';
        $myCoffeeAlt = "Image of Friday\'s Coffee Special";
        $color = 'red';
        $content = 'Espresso is a coffee drinked made by forcing nearly boiling water through ground coffee beans.';
        $history = 'Tilde taiyaki scenester direct trade deep v kombucha banh mi pop-up affogato salvia. Kickstarter copper mug literally, PBR&B marfa VHS chia cardigan lyft. Vape tousled dreamcatcher disrupt everyday carry knausgaard forage green juice. Austin pug coloring book subway tile palo santo cray yr tattooed aesthetic live-edge chartreuse twee.';
    break;
        
    case 'Saturday':
        $myCoffee = 'Caramel Frappe';
        $myCoffeeImg = 'caramelfrappe.jpg';
        $myCoffeeAlt = "Image of Saturday\'s Coffee Special";
        $color = 'aqua';
        $content = 'A caramel frappe is a cold coffee beverage, sometimes made similar to slushes, flavoring, and topped with whipped cream and drizzle.';
        $history = 'Neutra wolf art party keytar 3 wolf moon typewriter. Mlkshk kickstarter palo santo tumeric, kogi fashion axe ennui kinfolk kombucha edison bulb master cleanse try-hard. Kale chips kogi farm-to-table 3 wolf moon, copper mug mustache enamel pin normcore trust fund beard slow-carb neutra selfies locavore flexitarian.';
    break;
        
    default:
        $myCoffee = 'Regular';
        $myCoffeeImg = 'regular.jpg';
        $myCoffeeAlt = "Image of Regular Coffee";
        $color = 'black';
        $content = 'Your regular cup of joe.';
        $history = 'Jean shorts man braid farm-to-table swag, cronut forage pickled street art bespoke post-ironic poutine dreamcatcher blue bottle etsy.';
}
?>
<?php get_header()?>
<h2>Daily Special: <?=$day?></h2>
<header>
    <p id="date"><?=$myDate?></p>
</header>
<aside>
    <p><?=$day?>'s Special is</p>
    <img id="coffee" src="images/<?=$myCoffeeImg?>" alt="<?=$myCoffeeAlt?>" width="100"/>
</aside>
<section>
    <h2><?=$myCoffee?></h2>
    <p><?=$content?></p>
    <p>History: <?=$myCoffee?> <?=$history?></p>
</section>
<h3>Days of the Week:</h3>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>
<p><a href="daily.php?day=Sunday">Sunday</a></p>
<div id="divider"></div>
<div class="divider"></div>
<?php get_footer()?>