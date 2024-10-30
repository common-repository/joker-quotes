<?php
/*
Plugin Name: Joker Quotes
Plugin URI: http://slapstickanarchy.com/?page_id=334
Description: Adds the Joker Quotes widget, which displays randomly selected Joker quotes from  The Dark Knight.
Version: 1.5
Author: Sty Dresden
Author URI: http://slapstickanarchy.com/
*/

function joker_quotes(){
 	$quotes = array();
 
	$quotes[0] = '<blockquote class="joker"><p>I believe whatever doesn\'t kill you simply makes you... stranger.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[1] = '<blockquote class="joker"><p>Come on, I want you to do it, I want you to do it. Come on, hit me. *Hit me!*</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[2] = '<blockquote class="joker"><p>And I thought my jokes were bad...</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[3] = '<blockquote class="joker"><p>So I had a wife, beautiful, like you, who tells me I worry too much. Who tells me I ought to smile more.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[4] = '<blockquote class="joker"><p>Well, hello, beautiful. You must be Harvey\'s squeeze, hmm? And you *are* beautiful.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[5] = '<blockquote class="joker"><p>It\'s a funny world we live in. Speaking of which, do you know how I got these scars?</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[6] = '<blockquote class="joker"><p>I like this job - I like it!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[7] = '<blockquote class="joker"><p>And... here... we... go!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[8] = '<blockquote class="joker"><p>You just couldn\'t let me go could you? This is what happens when an unstoppable force meets an immovable object.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[9] = '<blockquote class="joker"><p>Do you wanna know why I use a knife? Guns are too quick. You can\'t savor all the... little... emotions.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[10] = '<blockquote class="joker"><p>I took Gotham\'s white knight, and brought him down to our level.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[11] = '<blockquote class="joker"><p>We really should stop fighting, we\'ll miss the fireworks!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[12] = '<blockquote class="joker"><p>The only sensible way to live in this world is without rules!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[13] = '<blockquote class="joker"><p>Wanna know how I got these scars?</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[14] = '<blockquote class="joker"><p>My father was... a drinker. And a fiend.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[15] = '<blockquote class="joker"><p>You\'ll see, I\'ll show you, that when the chips are down, these uh... civilized people, they\'ll eat each other. You see, I\'m not a monster. I\'m just ahead of the curve.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[16] = '<blockquote class="joker"><p>I want... my phone call. I want it. I want it! I want my phone call!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[17] = '<blockquote class="joker"><p>See, this is how crazy Batman\'s made Gotham!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[18] = '<blockquote class="joker"><p>Harvey, Harvey, Harvey Dent. Ohh, excuse me, I want to drive!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[19] = '<blockquote class="joker"><p>It\'s simple, we, uh, kill the Batman.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[20] = '<blockquote class="joker"><p>If you\'re good at something, never do it for free.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[21] = '<blockquote class="joker"><p>Tonight you\'re all gonna be part of a social experiment.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[22] = '<blockquote class="joker"><p>Ooohhh. You want to play. Come on!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[23] = '<blockquote class="joker"><p>You just couldn\'t let me go, could you?</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[24] = '<blockquote class="joker"><p>You have nothing, nothing to threaten me with. Nothing to do with all your strength.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[25] = '<blockquote class="joker"><p>You didn\'t think I\'d risk the battle for Gotham\'s soul in a fistfight with you?</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[26] = '<blockquote class="joker"><p>Gambol: You\'re crazy.<br>The Joker: I\'m not. No, I\'m not.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[27] = '<blockquote class="joker"><p>I don\'t want to kill you! What would I do without you? Go back to ripping off mob dealers? No, no, NO! No. You... you... complete me.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[28] = '<blockquote class="joker"><p>Don\'t talk like one of them. You\'re not! Even if you\'d like to be. To them, you\'re just a freak, like me!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[29] = '<blockquote class="joker"><p>They need you right now, but when they don\'t, they\'ll cast you out, like a leper!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[30] = '<blockquote class="joker"><p>You see, their morals, their code, it\'s a bad joke. Dropped at the first sign of trouble. They\'re only as good as the world allows them to be.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[31] = '<blockquote class="joker"><p>You have all these rules, and you think they\'ll save you.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[32] = '<blockquote class="joker"><p>Ah ta ta ta, let\'s not *blow* things out of proportion.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[33] = '<blockquote class="joker"><p>Look, why don\'t you give me a call when you want to start taking this a little more seriously. Here\'s my card.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[34] = '<blockquote class="joker"><p>Gambol: You think you can steal from us and just walk away?<br>The Joker: Yeah.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[35] = '<blockquote class="joker"><p>Let\'s wind the clocks back a year. These cops and lawyers wouldn\'t dare cross any of you. I mean, what happened? Did your balls drop off?</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[36] = '<blockquote class="joker"><p>Now, our operation is small but there is a lot of potential for \'aggressive\' expansion.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[37] = '<blockquote class="joker"><p>Never start with the head, the victim gets all fuzzy.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[38] = '<blockquote class="joker"><p>Those mob fools want you gone so they can get back to the way things were. But I know the truth: there\'s no going back. You\'ve changed things... forever.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[39] = '<blockquote class="joker"><p>You have all these rules and you think they\'ll save you.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[40] = '<blockquote class="joker"><p>Then that\'s the rule you\'ll have to break to know the truth.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[41] = '<blockquote class="joker"><p>No, there\'s only minutes left, so you\'re gonna have to play my little game if you want to save one of them.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[42] = '<blockquote class="joker"><p>I had a vision, of a world without Batman.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[43] = '<blockquote class="joker"><p>Brian: He\'s a symbol... that we don\'t have to be afraid of scum like you.<br>The Joker: Yeah, you do, Brian. You *really* do!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[44] = '<blockquote class="joker"><p>We made it!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[45] = '<blockquote class="joker"><p>This town deserves a better class of criminal... and I\'m gonna give it to them. Tell your men they work for me now. This is my city.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[46] = '<blockquote class="joker"><p>Why don\'t we cut you up into little pieces and feed you to your pooches? Hmm? And then we\'ll see how loyal a hungry dog really is.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[47] = '<blockquote class="joker"><p>Me? I was right here.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[48] = '<blockquote class="joker"><p>Does it depress you, commissioner? To know just how alone you really are? Does it make you feel responsible for Harvey Dent\'s current predicament?</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[49] = '<blockquote class="joker"><p>Well, depending on the time, he may in one spot, or several.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[50] = '<blockquote class="joker"><p>No. No, no, no. I kill the bus driver.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[51] = '<blockquote class="joker"><p>Oh, and by the way, the suit, it wasn\'t cheap. You oughta know, you bought it.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[52] = '<blockquote class="joker"><p>How about a magic trick?</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[53] = '<blockquote class="joker"><p>I\'m gonna make this pencil disappear.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[54] = '<blockquote class="joker"><p>Ta-daa! It\'s... it\'s gone.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[55] = '<blockquote class="joker"><p>Do I really look like a guy with a plan?</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[56] = '<blockquote class="joker"><p>When I say that you and your girlfriend was nothing personal, you know that I\'m telling the truth.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[57] = '<blockquote class="joker"><p>I just did what I do best. I took your little plan and I turned it on itself.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[58] = '<blockquote class="joker"><p>Introduce a little anarchy. Upset the established order, and everything becomes chaos.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[59] = '<blockquote class="joker"><p>I wanted to see what you\'d do. And you didn\'t disappoint... You let five people die. Then, you let Dent take your place. Even to a guy like me, that\'s cold...</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[60] = '<blockquote class="joker"><p>I know why you choose to have your little... group therapy sessions in broad daylight. I know why you\'re afraid to go out at night.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[61] = '<blockquote class="joker"><p>It\'s not about money... it\'s about sending a message. Everything burns!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[62] = '<blockquote class="joker"><p>Now I see the funny side. Now I\'m always smiling!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[63] = '<blockquote class="joker"><p>You truly are incorruptible aren\'t you? You won\'t kill me out of some misplaced sense of self-righteousness, and I won\'t kill you, because you\'re just too much fun.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[64] = '<blockquote class="joker"><p>I think you and I are destined to do this forever.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[65] = '<blockquote class="joker"><p>Look what I did to this city with a few drums of gas and a couple of bullets.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[66] = '<blockquote class="joker"><p>Nobody panics when things go "according to plan". Even if the plan is horrifying!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[67] = '<blockquote class="joker"><p>Nobody panics when things go "according to plan". Even if the plan is horrifying!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[68] = '<blockquote class="joker"><p>I\'m an agent of chaos. Oh, and you know the thing about chaos? It\'s fair!</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[69] = '<blockquote class="joker"><p>You know what I am? I\'m a dog chasing cars. I wouldn\'t know what to do with one if I caught it.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[70] = '<blockquote class="joker"><p>I\'m not a schemer. I try to show the schemers how... pathetic, their attempts to control things really are.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[71] = '<blockquote class="joker"><p>If Coleman Reese isn\'t dead in sixty minutes then I blow up a hospital.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[72] = '<blockquote class="joker"><p>It\'s the schemers that put you where you are. You were a schemer, you had plans, and look where that got you.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[73] = '<blockquote class="joker"><p>So which one of you fine gentlemen would like to join our team? Oh, there\'s only one spot open right now so we\'re gonna have... tryouts. Make it fast.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[74] = '<blockquote class="joker"><p>Why so serious?</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[75] = '<blockquote class="joker"><p>Y\'see, madness, as you know, is like gravity. All it takes is a little... push.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[76] = '<blockquote class="joker"><p>I\'m a man of my word.</p><p><cite>The Joker</cite></p></blockquote>';
	$quotes[77] = '<blockquote class="joker"><p>In... you see, in their last moments, people show you who they really are. So in a way, I know your friends better than you ever did. Would you like to know which of them were cowards?</p><p><cite>The Joker</cite></p></blockquote>';
	
	$the_quote = rand(0,77);
	echo $quotes[$the_quote];
}

function widget_init_joker_quotes(){
	if(!function_exists('register_sidebar_widget') || !function_exists('register_widget_control')) return;
 
	function widget_joker_quotes($args){
		extract($args);
		$options = get_option('widget_joker_quotes');
		$title = $options['title'];

		echo $before_widget;
		if(!empty($title)){echo $before_title.$title.$after_title;}
		joker_quotes();
		echo $after_widget;
	}
 
	function widget_joker_quotes_control(){
		$options = get_option('widget_joker_quotes');
	  
		if($_POST['joker-quotes-submit']):
			$newoptions['title'] = strip_tags(stripslashes($_POST['joker-quotes-title']));
			if($options != $newoptions):
				$options = $newoptions;
				update_option('widget_joker_quotes', $options);
			endif;
		endif;
		
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		
		//begin widget form
		?>
			<p><label>Title: <input type="text" class="widefat" id="joker-quotes-title" name="joker-quotes-title" value="<?php echo $title; ?>" /></label></p>
			<input type="hidden" name="joker-quotes-submit" id="joker-quotes-submit" value="1" />
		<?
		//end widget form
	}
	
	$widget_ops = array('description' => __("Displays randomly selected Joker quotes from The Dark Knight"));
	wp_register_sidebar_widget('joker-quotes','Joker Quote','widget_joker_quotes',$widget_ops);
	wp_register_widget_control('joker-quotes','Joker Quote', 'widget_joker_quotes_control',$widget_ops);
}

add_action('widgets_init', 'widget_init_joker_quotes');
?>