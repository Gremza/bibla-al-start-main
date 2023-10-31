<?php
/**
 * Bibla.al start
 *
 * @package       BIBLAALST
 * @author        Marsel Preci
 * @license       gplv2
 * @version       1.0.0
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
	.vargucontent{
		background-image:url('<?php echo $acf['bg_image'];?>');
		background-size:cover;
		text-align:center;
		padding:20px;
		 
		max-width:600px;
		margin:auto 10px;
		color:<?php echo $acf['txt_color'];?>;
		padding-bottom:50px;
		border-radius:20px;
		box-shadow:0px 0px 11px #ccc;
		
			
	}
	.lexoneapp{
		font-size:14px;
		float:right;
		padding-top:20px;
	}
	.lexoneapp span{ padding:10px 5px ;  }
	.referenca{
		float:left; 
	}
	.vargu{
		font-size:18px; 
	}
</style>

<div class="vargucontent"> 
	<h2><?php echo $acf['title'];?></h2>
	<div class="vargu"><?php echo $acf['content'];?></div>
	<div class="referenca"></div>	
	<div class="lexoneapp">devocioni ne app <span><a href="#"> iOS</a></span> <span><a href="#"> Android</a></span></div>
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

