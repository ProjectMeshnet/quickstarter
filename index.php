<?php require("config.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Expand the Meshnet</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="img/favicon.png">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</head>
<body>
	<div class="header">
		<a href="/"><img src="img/fund-logo.png"/></a>
    </div>
    <div class="main">
    	<h2 class="slogan">
		Bring the meshnet to the mainstream; help bring cjdns support to Windows!
        </h2>
	<h4 class="center">
                Time left
        </h4>
        <div class="countdown"></div>
        <div class="wrap">
            <div class="video">
            	<iframe src="https://player.vimeo.com/video/45819231?title=0&amp;byline=0&amp;portrait=0" width="512" height="375" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
            <div class="backing">
                <ul class="center">
                    <li class="stats" id="backers">
                        <?php echo $backers; ?>
                        <span>backers</span>
                    </li>
                    <li class="stats">
                        $<?php echo $total; ?>
                        <span>of $<?php echo $goal; ?></span>
                    </li>
                </ul>

		<div class="progress_bar">
			<div class="percent" style="width: <?php echo $percent; ?>%">
				<div id="progress_btc" style="width: <?php echo $percent_btc; ?>%"></div>
				<div id="progress_str" style="width: <?php echo $percent_str; ?>%"></div>
			</div>
			<div class="center">
				<div class="btc">Paid with Bitcoins</div>
				<div class="str">Paid with Stripe</div>
			</div>
		</div>
            <div id="reserve_container">
                <p id="ship_date">First Batch ships August 2013 </p>
                <a href="preorder/checkout" class="blue_button reserve">Pledge Now</a>
                <p id="price">Only $125 to get a Hyperboria router!</p>
                <p>Help us help the Internet, and get a router that will get you on Hyperboria. Your support helps to both develop cjdns, and expand the meshnet. Other reward tiers are offered below.</p>
                <div class="fb-like" data-send="false" data-width="70" data-layout="box_count" data-show-faces="true"></div>
                </div>
            </div>
        </div>
	</div>

    <div class="big_wrapper">
        <div class="wrapper" id="one">
            <div class="point_copy">
                <h3>
                    What is it?
                </h3>
                <p>
                Support the meshnet and get a limited production MeshBox - the official cjdns router for the next generation internet.
                <p>
            </div>
        </div>
    </div>
        
    <div class="big_wrapper">
        <div class="wrapper" id="two">
            <div class="point_copy right">
                <h3>
                    How do I use it?
                </h3>
                <p>
                All you have to do is plug the router in, and connect to it to whatever you want. Then you can start browsing Hyperboria, the premier cjdns based meshnet.
                <p>
            </div>
        </div>
    </div>
        
    <div class="big_wrapper">
        <div class="wrapper" id="three">
            <div class="point_copy">
                <h3>
                    What development work will occur?
                </h3>
                <p>
                We've kept our goals modest, but what this is paying for is the development work neccesary to get cjdns to build on OpenWRT and get NAT66/MAP66 to work on OpenWRT in conjunction with cjdns. 
                <p>
            </div>
        </div>
    </div>
        
    <div class="big_wrapper last">
        <div class="wrapper" id="four">
            <div class="point_copy right">
                <h3>
                    Is there a lesser donation level?
                </h3>
                <p>
                Yes there is, if you click the "Pledge Now" button below, then you can specify how much you'd like to donate. Listed below are the donation tiers below the $125 mark.
                <p>
            </div>
        </div>
    </div>
    
    <div class="other_points">
    	<div class="point">
        	<h4>Pledge $1 or more</h4>
            <p>Recieve an array of Creative Commons licensed posters & logos that have not been released yet!</p>
        </div>
        <div class="point">
        	<h4>Pledge $25 or more</h4>
            <p>2 posters (8.5 x 11, glossy) will be mailed to you, signed by the Seattle Meshnet Project Team.</p>
        </div>
        <div class="point">
        	<h4>Pledge $50 or more</h4>
            <p>And get a 15 minute videoconfrence with a member of the Seattle Meshnet Project</p>
        </div>
        <div class="point">
        	<h4>Pledge $125 or more</h4>
            <p>At this level, you will recieve a preflashed meshnet router that is preconfigured with peers.</p>
        </div>
    </div>
    
    <div class="big_wrapper last">
        <div class="wrapper center">
        	<h2>First Batch ships August 2013 </h2>
        	<a href="/preorder/checkout" class="blue_button reserve">Pledge Now</a>
        </div>
    </div>
    
    <div class="faq">
    	<h3>Frequently Asked Questions</h3>
        
        <div class="question">
        	&raquo; What is Project Meshnet, cjdns, Hyperboria and the Seattle Meshnet Project?
        </div>
        <div class="answer">
            Project Meshnet is a colation of meshnet groups that works to promote the development of local meshnets. Cjdns is a networking suite that is commonly used to set up local meshnets, and Hyperboria is what we call the networkof cjdns nodes that weave in and out of both local meshnets and the internet. And on a closing note, the Seattle Meshnet Project is a local meshnet group based out of Seattle that has organized this crowdfunding project.
        </div>
        
        <div class="question">
        	&raquo; Why is wireless router support so important, and what does it mean for meshnets?
        </div>
        <div class="answer">
            Once cjdns  runs on routers (which means it will run atop the OpenWRT platform), it will be possible to easily and affordably bring Hyperboria in to the average home. Right now it requires somewhat advanced computer knowledge in order to join the meshnet and connect to Hyperboria, but once OpenWRT integration is complete, it will be as simple as plugging in your new router. Our network has grown quickly as it is, but to really bring the mesh to most homes setup needs to be simpler.
        </div>
        
        <div class="question">
        	&raquo; How do I know this will even work?
        </div>
        <div class="answer">
            The Seattle Meshnet Project has ran previous group buys and sucessfully paid our current cjdns developer to fix bugs in cjdns. We intend to parlay this experience with paid bugfixing and group buys of hardware into this crowdfunded bugfix, and as with our previous group buy, we'll be distributing hardware and signed posters too.
        </div>
       
        <div class="question">
        	&raquo; I want to know about the plan for this project, who will be signing my poster, et cetera. Where should I look?
        </div>
        <div class="answer">
        	You can view a more in-depth F.A.Q. page <a href="faq/">here</a>.
        </div>
        
    </div>
       
    <div class="footer">
    	&copy; 2013 Project Meshnet
    </div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41024459-1', 'meshwith.me');
  ga('send', 'pageview');

</script>
</body>
</html>
