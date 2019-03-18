<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dom_html extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function index($data = NULL)
	{
		$this->load->helper('simple_html_dom_helper');
		$html = file_get_html('http://www.kalerkantho.com/');

		//============== Bangladesh Protidin ============

		$method = $this->router->fetch_method();
		$data = array();
		$URLArray = array();
//		$html = $this->fetchHTMLData('http://www.bd-pratidin.com/');
//		$html = $this->dom_parser->str_get_html($html);

		foreach ($html->find('div[class="col-xs-4"] a') as $element) {
			$URLArray[] = $element->href;
		}

		$urlFinalArray = array_unique($URLArray);
		$urlFinalArray = array_slice($URLArray, 0, 5);
		$newsDataArray = array();

		foreach ($urlFinalArray as $url) {
			$data = array();

			$url = 'http://www.kalerkantho.com/' . $url;

			$data['link'] = $url;

			$title = $html->find('div[class="col-xs-4"] h2', 0)->plaintext;
			$data['title'] = trim($title);

			$img = $html->find('div[class="social_img"] img', 0);
			$data['img'] = trim($img->src);

			$date = $html->find('div[class="col-xs-4"] h2', 0)->plaintext;
			$data['pubDate'] = date('Y-m-d H:i:s');

			if (is_object($html->find('div[class="col-xs-4"] h2', 0))) {

			}
			if (is_object($html->find('div[class="col-xs-4"] h2', 0))) {

			}

			 else {
				$data['url'] = '';
			}

			if (is_object($html->find('div[class="col-xs-4"] p', 0))) {
				$description = $html->find('div[class="col-xs-4"] p"]', 0)->plaintext;
				$data['description'] = trim($description);
			}

			$newsDataArray[] = $data;
		}
		echo "<pre>";
		print_r($newsDataArray);
		return $newsDataArray;

		exit();

		$dom = new DOMDocument();

		if ($dom->load('http://feeds.bbci.co.uk/bengali/rss.xml')) {
			$items = $dom->getElementsByTagName('item');
			$newsDataArray = array();
			foreach ($items as $item) {
				$news = array();
				if ($item->childNodes->length) {
					foreach ($item->childNodes as $i) {
						if ($i->nodeName == 'description') {
							$news[$i->nodeName] = strip_tags(trim($i->nodeValue));
						} elseif ($i->nodeName == 'image') {
							foreach ($i->childNodes as $cn) {
								if ($cn->nodeName == 'url') {
									$news[$cn->nodeName] = $cn->nodeValue;
								}
							}
						} elseif ($i->nodeName == 'pubDate') {
							$date_string = explode(',', $i->nodeValue);
							$date_string = str_replace('+0600', '', $date_string[1]);
							$news[$i->nodeName] = date('Y-m-d H:i:s', strtotime($date_string));
						} else {
							$news[$i->nodeName] = $i->nodeValue;
						}

					}
				}
				$newsDataArray[] = $news;
			}

			echo "<pre>";
			print_r($newsDataArray);
		}

		exit();

		$ima = $html->find(" .listing .each img");
		$url = $html->find(".listing .each a");
		$header = $html->find(".listing .each h2");

		$images = array();
		foreach($ima as $img) {
			$images[] = $img->src;
		}

		$href = array();
		foreach($url as $url) {
			$href[] = $url->href;
		}

		$title = array();
		foreach($header as $header) {
			$title[] = $header->plaintext;
		}

		foreach ($images as $key => $image){
			echo "<img src='$image'>". '<br>';
			echo "<a href='$href[$key]'>". $title[$key]. "<br>";

		};


//		foreach($html->find('.listing') as $item)
//		{
//			foreach($item->find('.each') as $res)
//			{
//				$ret = $res->find('a, img');
//				echo "<pre>";
//				print_r($ret);
//
//			}
//		}




		exit();



		$e = $html->find("div");
		foreach ($e as $value){
			echo "<pre>";
//			echo $value->tag; // Returns: " div"
//			echo $value->outertext; // Returns: " <div>foo <b>bar</b></div>"
			echo $value->innertext; // Returns: " foo <b>bar</b>"

//			var_dump($value->plaintext); // Returns: " foo bar"
		}

		exit();
		$links = array();
		foreach($html->find('a.postlink',2) as $a) {
			$links[] = $a->href;
		}
		echo "<pre>";
		print_r($links);



//
//// Find all images
//		foreach($html->find('img') as $element)
//			echo "<img src='$element->src'>". '<br>';
//
//// Find all links
//		foreach($html->find('a') as $element)
//			echo "<a href='$element->href'>". $element->href. "<br>";
	}

	public function details(){
		$this->load->helper('simple_html_dom_helper');
		$html = file_get_html('https://www.prothomalo.com/bangladesh/article/1579028/%E0%A6%86%E0%A6%B0-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A7%E0%A6%BE%E0%A6%A8%E0%A6%AE%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%80-%E0%A6%B9%E0%A6%A4%E0%A7%87-%E0%A6%9A%E0%A6%BE%E0%A6%A8-%E0%A6%A8%E0%A6%BE-%E0%A6%B6%E0%A7%87%E0%A6%96-%E0%A6%B9%E0%A6%BE%E0%A6%B8%E0%A6%BF%E0%A6%A8%E0%A6%BE');

		$sub_tiles = $html->find(".right_title h2");
		$titles = $html->find(".right_title h1");
		$imas = $html->find("article img");

		$sub_title = array();
		foreach($sub_tiles as $sub_til) {
			$sub_title[] = $sub_til->plaintext;
		}

		$title = array();
		foreach($titles as $tit) {
			$title[] = $tit->plaintext;
		}

		$img = array();
		foreach($imas as $im) {
			$img[] = $im->src;
		}

		foreach ($sub_tiles as $key => $sub_til){
			echo "<h2>".$sub_til."</h2>";
			echo "<h1>".$title[$key] ."</h1>";
			echo "<img src='$img[$key]'>". '<br>';
		};

	}

	function numberGen() {
		$length = rand(6, 6);
		$value = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randResult = '';
		for ($i = 0; $i < $length; $i++) {
			$randResult .= $value[rand(0, strlen($value) -1)];
		}

		echo '<h1>'.$randResult.'</h1>';
	}



}
