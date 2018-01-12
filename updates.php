<?php

    $updates    =   array(
                'January 11, 2018'   =>  array('update the design of <a href="shopping-cart.php">Shopping Cart</a> page.'),
                'January 9, 2018'   =>  array('update the design of <a href="shopping-cart.php">Shopping Cart</a> page.'),
                'January 8, 2018'   =>  array(
                                            'added <a href="shopping-cart.php">Shopping Cart</a> page.',
                                            'update some design of <a href="register.php">Create an Account</a> page.'
                                        ),
                'January 6, 2018'   =>  array(
                                            'added <a href="login.php">Sign In</a> page.',
                                            'redesign <a href="register.php">Create an Account</a> page.'
                                        ),
                'January 5, 2018'   =>  array('added <a href="register.php">Create an Account</a> page.'),
                'January 4, 2018'   =>  array(
                                            'update the design of <a href="about.php">About Us</a> page.',
                                            'added <a href="about.php#learn">Learn</a> section after the Our Team section.',
                                            'update <a href="workshop4.php">Workshop4 PRO IDE</a> product page.',
                                        ),
                'January 3, 2018'   =>  array('redesign <a href="about.php">About Us</a> page.'),
                'December 29, 2017' =>  array('new design of <a href="about.php">About Us</a> descriptions.'),
                'December 28, 2017' =>  array('redesigned <a href="about.php">About Us</a> descriptions.'),
                'December 27, 2017' =>  array('added <a href="about.php">About Us</a> page.'),
                'December 22, 2017' =>  array(
                                            'added <a href="privacy-policy.php">Privacy Policy</a> page.',
                                            'added <a href="terms-and-conditions.php">Terms and Conditions</a> page.',
                                            'style updates of <a href="app notes.php">App Notes</a>.'
                                        ),
    );

?>

<section class="updates-wrapper" id="updates-wrapper">

    <article class="updates-container">
        <div class="counter">
            <p id="visits">0 time</p>
            <pre id="times">--:--:--</pre>
        </div>
        <h1>Updates</h1>
        

        
            <?php foreach ($updates as $key => $value) {?>
                <div class="updates">
                    <strong><?php echo $key; ?></strong>
                    <ul>
                        <?php foreach ($value as $key => $val) { ?>
                            <li><?php echo $val; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </ul>

        <blockquote>Note: To view this popup again, close the current tab and view the website again.</blockquote>

        

    </article>

    <button id="close-update">Close</button>
    
    
</section>

<script type="text/javascript" src="js/json-serialization.js"></script>
<script type="text/javascript" src="js/session.js"></script>
<script type="text/javascript">
// <![CDATA[

// initialize application defaults
var counter = Session.get("counter") || {
	visits: 0,
	time: []
};

// onload
window.onload = function() {

	// update previous visits
	var d = new Date();
	counter.visits++;
	counter.time.push(Pad(d.getHours()) + ":" + Pad(d.getMinutes()) + ":" + Pad(d.getSeconds()));
	if (counter.time.length > 10) counter.time = counter.time.slice(1);

	// update page
	document.getElementById("visits").firstChild.nodeValue = counter.visits + " time" + (counter.visits == 1 ? "" : "s");
	var t = "";
	for (var i = counter.time.length-1; i >= 0; i--) t += counter.time[i] + "\n";
	document.getElementById("times").firstChild.nodeValue = t;

	// store value in session
    Session.set("counter", counter);
    
    
    if(counter.visits >= 2){
        document.getElementById("updates-wrapper").outerHTML='';
    }

};

// add leading zeros
function Pad(n) {
	n = "00" + n;
	return n.substr(n.length-2);
}
// ]]>
</script>