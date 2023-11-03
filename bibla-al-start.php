<?php
/**
 * Bibla.al start
 *
 * @package       BIBLAALST
 * @author        Marsel Preci
 * @license       gplv2
 * @version       1.0.1
 *
 * @wordpress-plugin
 * Plugin Name:   Bibla.al start
 * Plugin URI:    https://bibla.al
 * Description:   Perdor shortcode [start] per te paraqitur permbajtjen.Nje oreks ndjelles per te filluar leximin e bibles.
 * Version:       2.0.0
 * Author:        Marsel Preci
 * Author URI:    https://gremza.com
 * Text Domain:   bibla-al-start
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with Bibla.al start. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
function start() {  
    $string =  file_get_contents('https://devocion.bibla.al'); 
    $json_a = json_decode($string, true);
    $acf= $json_a['todayverse'];   
	$stories=$json_a['stories']; 
//	echo $acf['content']; echo "</br>";
//	echo $acf['bg_image']; echo "</br>";
//	echo $acf['txt_color']; echo "</br>";
//	echo $acf['book_name']; echo "</br>";
//	echo $acf['chapter_name']; echo "</br>";
//	echo $acf['verse_number']; echo "</br>";
	?>
<style>
	.vargucontent a{
		color:#f00!important;
	}
	.vargucontent{
		background-image:url('<?php echo $acf['bg_image'];?>');
		background-size:cover;
		text-align:center;
		padding:20px; 
		margin:auto;
		color:<?php echo $acf['txt_color'];?>;
		border-radius:20px;
		box-shadow:0px 0px 11px #ccc; 
			
	}
	.vargucontent {
 
 
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
}
	.lexoneapp{
		font-size:14px;
		float:right;
		padding-top:10px;
	}
	.lexoneapp span{ padding:10px 5px ;  }
	.referenca{
		font-size: 14px;
		float: left;
		padding-top: 10px;
	}
	.vargu{
		font-size:18px; 
	}
</style>

<div class="vargucontent"> 
	<h2><?php echo $acf['title'];?></h2>
	<div class="vargu"><?php echo $acf['content'];?></div>
	<div class="referenca"><?php echo $acf['book_name'].' '.$acf['chapter_name'].':'.$acf['verse_number'];?></div>	
	<div class="lexoneapp">Lexo në app <span><a href="https://apps.apple.com/us/app/bibla-shqip-bibla-al/id6463127209"> iOS</a></span> <span><a href="https://play.google.com/store/apps/details?id=com.gremza.bibla&hl=en&gl=US"> Android</a></span></div>
</div>
<?php		
//	foreach ($stories as $k=>$v){
		
//     if( isset($v['type'])) {echo $v['type']; echo "</br>";};
//	 if( isset($v['link'])) {echo $v['link']; echo "</br>";};  
//	 if( isset($v['content'])) {echo $v['content']; echo "</br>";};  
//	 if( isset($v['bg_color'])) {echo $v['bg_color']; echo "</br>";};  
//	 if( isset($v['txt_color'])) {echo $v['txt_color']; echo "</br>";};  
//	 if( isset($v['slug'])) {echo $v['slug']; echo "</br>";};  
//	 if( isset($v['story_description']) ){echo $v['story_description']; echo "</br>";};  
//     if( isset($v['book_name'])) { echo $v['book_name']; echo "</br>";};  
//	 if( isset($v['chapter_name'])) {echo $v['chapter_name']; echo "</br>";};  
//	 if( isset($v['verse_number']) ){echo $v['verse_number']; echo "</br>";};  
//	 if( isset($v['image'])) {echo $v['image']; echo "</br>";};   	
//}
	  
	
    echo "</br>";
//    echo    "<a href=".home_url()."/". $acf['title'].">". $acf['title'] . "</a>"; 
  //        echo "</br>";
   // echo $acf['devocioni']; 

}    
//function readmore() {
 //   wp_enqueue_script( 'readmore-js', plugins_url( '/readmore.js', __FILE__ ));
  //    wp_enqueue_style( 'readmore-css',   plugins_url( '/readmore1.css', __FILE__ ));
//}
 
//add_action( 'wp_footer', 'readmore' );   

  
	// register shortcode
add_shortcode('start', 'start'); 

