<?php
/*
 * Plugin Name: Kata Motivasi Dan Mutiara
 * Version: 1.0
 * Plugin URI: http://plugins.svn.wordpress.org/kata-motivasi-dan-mutiara/
 * Description: Will display daily motivational words from our daily twit to Twitter in Indonesian in various generated colorful background and patterns which you can select from.
(Menampilkan kumpulan kata-kata motivasi dan mutiara setiap hari untuk mewarnai blog anda)
 * Author: TwitAku Dev Team
 * Author URI: http://www.twitaku.com
 * License: GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
class KataMotivasiWidget extends WP_Widget
{
	/**
	* Declares the KataMotivasiWidget class.
	*
	*/
	function KataMotivasiWidget(){
		$widget_ops = array('classname' => 'widget_KataMotivasi', 'description' => __( "Will display daily motivational words from our daily twit to Twitter in Indonesian in various generated colorful background and patterns which you can select from.") );
		$control_ops = array('width' => 250, 'height' => 250);
		$this->WP_Widget('KataMotivasi', __('KataMotivasi Widget'), $widget_ops, $control_ops);
	}
	
	/**
	* Displays the Widget
	*
	*/
	function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? 'Kata Motivasi & Mutiara' : $instance['title']);
		$motivationalStyle = empty($instance['motivationalStyle']) ? '56' : $instance['motivationalStyle'];
				
		# Before the widget
		echo $before_widget;
		
		# The title
		if ( $title )
			echo $before_title . $title . $after_title;
		
		# Render the Widget
		echo '<br/>
<a title="Follow termotivasi - Powered By TwitAku.com" href="http://www.twitaku.com/motivasi"><img src="http://www.twitaku.com/twitsigs/' . $motivationalStyle . '/termotivasi.png" border=0></a>
<br/>';

		# After the widget
		echo $after_widget;
	}
	
	/**
	* Saves the widgets settings.
	*
	*/
	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = strip_tags(stripslashes($new_instance['title']));
		$instance['motivationalStyle'] = strip_tags(stripslashes($new_instance['motivationalStyle']));
				
		return $instance;
	}
	
	/**
	* Creates the edit form for the widget.
	*
	*/
	function form($instance){
		//Defaults
		$instance = wp_parse_args( (array) $instance, array('title'=>'', 'motivationalStyle'=>'56') );
		
		$title = htmlspecialchars($instance['title']);
		$motivationalStyle = htmlspecialchars($instance['motivationalStyle']);
		
		#Some intro for this widget
		echo '<p style="text-align:left;">Will display daily motivational words from our daily twit to Twitter in Indonesian in various generated colorful background and patterns which you can select from.
(Menampilkan kumpulan kata-kata motivasi dan mutiara setiap hari untuk mewarnai blog anda)</p><hr/>';
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('title') . '">' . __('Judul:') . ' <input style="width: 250px;" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></label></p>';
		echo '<p style="text-align:right;"><label for="' . $this->get_field_name('motivationalStyle') . '">' . __('Model Tampilan:') . ' <select name="' . $this->get_field_name('motivationalStyle')  . '" id="' . $this->get_field_id('motivationalStyle')  . '">"';
?>
		
		<option value="40" <?php if ($motivationalStyle == '40') echo 'selected="yes"'; ?> >Special 1 (160x200)</option>
		<option value="42" <?php if ($motivationalStyle == '42') echo 'selected="yes"'; ?> >Special 2 (160x200)</option>
		 <option value="43" <?php if ($motivationalStyle == '43') echo 'selected="yes"'; ?> >Special 3 (160x200)</option>
		 <option value="44" <?php if ($motivationalStyle == '44') echo 'selected="yes"'; ?> >Special 4 (160x200)</option>
		 <option value="45" <?php if ($motivationalStyle == '45') echo 'selected="yes"'; ?> >Special 5 (160x200)</option>
		 <option value="46" <?php if ($motivationalStyle == '46') echo 'selected="yes"'; ?> >Special 6 (160x200)</option>
		 <option value="47" <?php if ($motivationalStyle == '47') echo 'selected="yes"'; ?> >Special 7 (160x200)</option>
		 <option value="48" <?php if ($motivationalStyle == '48') echo 'selected="yes"'; ?> >Special 8 (160x200)</option>
		 <option value="49" <?php if ($motivationalStyle == '49') echo 'selected="yes"'; ?> >Special 9 (160x200)</option>
		 <option value="50" <?php if ($motivationalStyle == '50') echo 'selected="yes"'; ?> >Special 10 (160x200)</option>
		 <option value="51" <?php if ($motivationalStyle == '51') echo 'selected="yes"'; ?> >Special 11 (160x200)</option>
		 <option value="52" <?php if ($motivationalStyle == '52') echo 'selected="yes"'; ?> >Special 12 (160x200)</option>
		 <option value="53" <?php if ($motivationalStyle == '53') echo 'selected="yes"'; ?> >Special 13 (160x200)</option>
		 <option value="54" <?php if ($motivationalStyle == '54') echo 'selected="yes"'; ?> >Special 14 (160x200)</option>
		 <option value="55" <?php if ($motivationalStyle == '55') echo 'selected="yes"'; ?> >Special 15 (160x200)</option>
		 <option value="56" <?php if ($motivationalStyle == '56') echo 'selected="yes"'; ?> >Special 16 (160x200)</option>
		 <option value="57" <?php if ($motivationalStyle == '57') echo 'selected="yes"'; ?> >Special 17 (160x200)</option>
		 <option value="58" <?php if ($motivationalStyle == '58') echo 'selected="yes"'; ?> >Special 18 (160x200)</option>
		 <option value="59" <?php if ($motivationalStyle == '59') echo 'selected="yes"'; ?> >Special 19 (160x200)</option>
		 <option value="60" <?php if ($motivationalStyle == '60') echo 'selected="yes"'; ?> >Special 20 (160x200)</option>
		 <option value="61" <?php if ($motivationalStyle == '61') echo 'selected="yes"'; ?> >Special 21 (160x200)</option>
		 <option value="62" <?php if ($motivationalStyle == '62') echo 'selected="yes"'; ?> >Special 22 (160x200)</option>
		 <option value="63" <?php if ($motivationalStyle == '63') echo 'selected="yes"'; ?> >Special 23 (160x200)</option>
		 <option value="64" <?php if ($motivationalStyle == '64') echo 'selected="yes"'; ?> >Special 24 (160x200)</option>
		 <option value="65" <?php if ($motivationalStyle == '65') echo 'selected="yes"'; ?> >Special 25 (160x200)</option>
		 <option value="66" <?php if ($motivationalStyle == '66') echo 'selected="yes"'; ?> >Special 26 (160x200)</option>
		 <option value="67" <?php if ($motivationalStyle == '67') echo 'selected="yes"'; ?> >Special 27 (160x200)</option>
		 <option value="68" <?php if ($motivationalStyle == '68') echo 'selected="yes"'; ?> >Special 28 (160x200)</option>
		 <option value="69" <?php if ($motivationalStyle == '69') echo 'selected="yes"'; ?> >Special 29 (160x200)</option>
		 <option value="70" <?php if ($motivationalStyle == '70') echo 'selected="yes"'; ?> >Special 30 (160x200)</option>
		 <option value="71" <?php if ($motivationalStyle == '71') echo 'selected="yes"'; ?> >Special 31 (160x200)</option>
		 <option value="72" <?php if ($motivationalStyle == '72') echo 'selected="yes"'; ?> >Special 32 (160x200)</option>
		 <option value="73" <?php if ($motivationalStyle == '73') echo 'selected="yes"'; ?> >Special 33 (160x200)</option>
		 <option value="74" <?php if ($motivationalStyle == '74') echo 'selected="yes"'; ?> >Special 34 (160x200)</option>
		 <option value="75" <?php if ($motivationalStyle == '75') echo 'selected="yes"'; ?> >Special 35 (160x200)</option>
		 <option value="76" <?php if ($motivationalStyle == '76') echo 'selected="yes"'; ?> >Special 36 (160x200)</option>
		 <option value="77" <?php if ($motivationalStyle == '77') echo 'selected="yes"'; ?> >Special 37 (160x200)</option>
		 <option value="78" <?php if ($motivationalStyle == '78') echo 'selected="yes"'; ?> >Special 38 (160x200)</option>
		 <option value="79" <?php if ($motivationalStyle == '79') echo 'selected="yes"'; ?> >Special 39 (160x200)</option>
		 <option value="80" <?php if ($motivationalStyle == '80') echo 'selected="yes"'; ?> >Special 40 (160x200)</option>
		 <option value="81" <?php if ($motivationalStyle == '81') echo 'selected="yes"'; ?> >Special 41 (160x200)</option>
		 <option value="82" <?php if ($motivationalStyle == '82') echo 'selected="yes"'; ?> >Special 42 (160x200)</option>
		 <option value="83" <?php if ($motivationalStyle == '83') echo 'selected="yes"'; ?> >Special 43 (160x200)</option>
		 <option value="84" <?php if ($motivationalStyle == '84') echo 'selected="yes"'; ?> >Special 44 (160x200)</option>
		 <option value="85" <?php if ($motivationalStyle == '85') echo 'selected="yes"'; ?> >Special 45 (160x200)</option>
		 <option value="86" <?php if ($motivationalStyle == '86') echo 'selected="yes"'; ?> >Special 46 (160x200)</option>
		 <option value="87" <?php if ($motivationalStyle == '87') echo 'selected="yes"'; ?> >Special 47 (160x200)</option>
		 <option value="88" <?php if ($motivationalStyle == '88') echo 'selected="yes"'; ?> >Special 48 (160x200)</option>
		 <option value="89" <?php if ($motivationalStyle == '89') echo 'selected="yes"'; ?> >Special 49 (160x200)</option>
		 <option value="90" <?php if ($motivationalStyle == '90') echo 'selected="yes"'; ?> >Special 50 (160x200)</option>
		 <option value="93" <?php if ($motivationalStyle == '93') echo 'selected="yes"'; ?> >Modern 1 (400x150)</option>
		 <option value="94" <?php if ($motivationalStyle == '94') echo 'selected="yes"'; ?> >Modern 2 (400x150)</option>
		 <option value="95" <?php if ($motivationalStyle == '95') echo 'selected="yes"'; ?> >Modern 3 (400x150)</option>
		 <option value="96" <?php if ($motivationalStyle == '96') echo 'selected="yes"'; ?> >Modern 4 (400x150)</option>
		 <option value="97" <?php if ($motivationalStyle == '97') echo 'selected="yes"'; ?> >Modern 5 (400x150)</option>
		 <option value="98" <?php if ($motivationalStyle == '98') echo 'selected="yes"'; ?> >Modern 6 (400x150)</option>
		 <option value="99" <?php if ($motivationalStyle == '99') echo 'selected="yes"'; ?> >Modern 7 (400x150)</option>
		 <option value="100" <?php if ($motivationalStyle == '100') echo 'selected="yes"'; ?> >Modern 8 (400x150)</option>
		 <option value="101" <?php if ($motivationalStyle == '101') echo 'selected="yes"'; ?> >Modern 9 (400x150)</option>
		 <option value="102" <?php if ($motivationalStyle == '102') echo 'selected="yes"'; ?> >Modern 10 (400x150)</option>
		 <option value="103" <?php if ($motivationalStyle == '103') echo 'selected="yes"'; ?> >Modern 11 (400x150)</option>
		 <option value="104" <?php if ($motivationalStyle == '104') echo 'selected="yes"'; ?> >Modern 12 (400x150)</option>
		 <option value="105" <?php if ($motivationalStyle == '105') echo 'selected="yes"'; ?> >Modern 13 (400x150)</option>
		 <option value="106" <?php if ($motivationalStyle == '106') echo 'selected="yes"'; ?> >Modern 14 (400x150)</option>
		 <option value="107" <?php if ($motivationalStyle == '107') echo 'selected="yes"'; ?> >Modern 15 (400x150)</option>
		 <option value="108" <?php if ($motivationalStyle == '108') echo 'selected="yes"'; ?> >Modern 16 (400x150)</option>
		 <option value="109" <?php if ($motivationalStyle == '109') echo 'selected="yes"'; ?> >Modern 17 (400x150)</option>
		 <option value="110" <?php if ($motivationalStyle == '110') echo 'selected="yes"'; ?> >Modern 18 (400x150)</option>
		 <option value="111" <?php if ($motivationalStyle == '111') echo 'selected="yes"'; ?> >Modern 19 (400x150)</option>
		 <option value="112" <?php if ($motivationalStyle == '112') echo 'selected="yes"'; ?> >Modern 20 (400x150)</option>
		 <option value="113" <?php if ($motivationalStyle == '113') echo 'selected="yes"'; ?> >Modern 21 (400x150)</option>
		 <option value="115" <?php if ($motivationalStyle == '114') echo 'selected="yes"'; ?> >Modern 22 (400x150)</option>
		 <option value="116" <?php if ($motivationalStyle == '116') echo 'selected="yes"'; ?> >Modern 23 (400x150)</option>
		 <option value="117" <?php if ($motivationalStyle == '117') echo 'selected="yes"'; ?> >Modern 24 (400x150)</option>
		 <option value="118" <?php if ($motivationalStyle == '118') echo 'selected="yes"'; ?> >Modern 25 (400x150)</option>
		 <option value="119" <?php if ($motivationalStyle == '119') echo 'selected="yes"'; ?> >Modern 26 (400x150)</option>
		 <option value="120" <?php if ($motivationalStyle == '120') echo 'selected="yes"'; ?> >Modern 27 (400x150)</option>
		 <option value="1" <?php if ($motivationalStyle == '1') echo 'selected="yes"'; ?> >Medium 1 (312x92)</option>
		 <option value="2" <?php if ($motivationalStyle == '2') echo 'selected="yes"'; ?> >Medium 2 (312x92)</option>
		 <option value="3" <?php if ($motivationalStyle == '3') echo 'selected="yes"'; ?> >Medium 3 (312x92)</option>
		 <option value="4" <?php if ($motivationalStyle == '4') echo 'selected="yes"'; ?> >Medium 4 (312x92)</option>
		 <option value="5" <?php if ($motivationalStyle == '5') echo 'selected="yes"'; ?> >Medium 5 (312x92)</option>
		 <option value="6" <?php if ($motivationalStyle == '6') echo 'selected="yes"'; ?> >Medium 6 (312x92)</option>
		 <option value="7" <?php if ($motivationalStyle == '7') echo 'selected="yes"'; ?> >Medium 7 (312x92)</option>
		 <option value="8" <?php if ($motivationalStyle == '8') echo 'selected="yes"'; ?> >Medium 8 (312x92)</option>
		 <option value="9" <?php if ($motivationalStyle == '9') echo 'selected="yes"'; ?> >Medium 9 (312x92)</option>
		 <option value="10" <?php if ($motivationalStyle == '10') echo 'selected="yes"'; ?> >Medium 10 (312x92)</option>
		 <option value="11" <?php if ($motivationalStyle == '11') echo 'selected="yes"'; ?> >Medium 11 (312x92)</option>
		 <option value="12" <?php if ($motivationalStyle == '12') echo 'selected="yes"'; ?> >Medium 12 (312x92)</option>
		 <option value="13" <?php if ($motivationalStyle == '13') echo 'selected="yes"'; ?> >Medium 13 (312x92)</option>
		 <option value="14" <?php if ($motivationalStyle == '14') echo 'selected="yes"'; ?> >Medium 14 (312x92)</option>
		 <option value="15" <?php if ($motivationalStyle == '15') echo 'selected="yes"'; ?> >Medium 15 (312x92)</option>
		 <option value="16" <?php if ($motivationalStyle == '16') echo 'selected="yes"'; ?> >Medium 16 (312x92)</option>
		 <option value="17" <?php if ($motivationalStyle == '17') echo 'selected="yes"'; ?> >Medium 17 (312x92)</option>
		 <option value="18" <?php if ($motivationalStyle == '18') echo 'selected="yes"'; ?> >Medium 18 (312x92)</option>
		 <option value="19" <?php if ($motivationalStyle == '19') echo 'selected="yes"'; ?> >Medium 19 (312x92)</option>
		 <option value="20" <?php if ($motivationalStyle == '20') echo 'selected="yes"'; ?> >Medium 20 (312x92)</option>
		 <option value="21" <?php if ($motivationalStyle == '21') echo 'selected="yes"'; ?> >Medium 21 (312x92)</option>
		 <option value="22" <?php if ($motivationalStyle == '22') echo 'selected="yes"'; ?> >Medium 22 (312x92)</option>
		 <option value="23" <?php if ($motivationalStyle == '23') echo 'selected="yes"'; ?> >Medium 23 (312x92)</option>
		 <option value="24" <?php if ($motivationalStyle == '24') echo 'selected="yes"'; ?> >Medium 24 (312x92)</option>
		 <option value="25" <?php if ($motivationalStyle == '25') echo 'selected="yes"'; ?> >Medium 25 (312x92)</option>
		<option value="26" <?php if ($motivationalStyle == '26') echo 'selected="yes"'; ?> >Medium 26 (312x92)</option>
		 <option value="27" <?php if ($motivationalStyle == '27') echo 'selected="yes"'; ?> >Medium 27 (312x92)</option>
		 <option value="28" <?php if ($motivationalStyle == '28') echo 'selected="yes"'; ?> >Medium 28 (312x92)</option>
		 <option value="29" <?php if ($motivationalStyle == '29') echo 'selected="yes"'; ?> >Medium 29 (312x92)</option>
		 <option value="30" <?php if ($motivationalStyle == '30') echo 'selected="yes"'; ?> >Medium 30 (312x92)</option>		 
<?php
		echo '</select></label>';
			
	}

}// END class
	
	/**
	* Register  widget.
	*
	* Calls 'widgets_init' action after widget has been registered.
	*/
	function KataMotivasiInit() {
	register_widget('KataMotivasiWidget');
	}	
	add_action('widgets_init', 'KataMotivasiInit');
?>