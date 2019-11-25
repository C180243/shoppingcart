<?php
/**
 * 商品クラス
 */
class Item {
	/**
	 * 属性
	 * @var string $name  商品名
	 * @var int    $price 価格
	 */
	private $name;
	private $price;
	private $category_author;
	private $category_code;

	/**
	 * コンストラクタ
	 * @param string $name  商品名
	 * @param int    $price 価格
	 */
	function __construct(string $name, int $price, string $category_author, string $category_code) {
		$this->name = $name;
		$this->price = $price;
		$this->author = $category_author;
		$this->code = $category_code;
	}

	/** アクセサメソッド群 */

	function setName(string $name):void {
		$this->name = $name;
	}
	function getName():string {
		return $this->name;
	}

	function setPrice(int $price):void {
		$this->price = $price;
	}
	function getPrice():string {
		return number_format($this->price);
	}
	function setAuthor(string $category_author):void {
		$this->author = $category_author;
	}
	function getAuthor():string {
		return $this->author;
	}
	function setCode(int $category_code):void {
		$this->code = $category_code;
	}
	function getCode():string {
		return number_format($this->code);
	}
}
?>