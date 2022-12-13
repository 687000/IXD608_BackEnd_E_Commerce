<? 
include_once "lib/php/functions.php";
//print_p($_SESSION,$_GET,$_POST);
session_start();
switch ($_GET['action']) {
	case 'add-to-cart':
		$product=makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` =".$_POST['product-id'])[0];
		addToCart($_POST['product-id'],$_POST['product-amount'],$_POST['product-color']);
		header("Location:product_added_to_cart.php?id={$_POST['product-id']}");
		break;
	case 'update-cart-item':
		$p=cartItemById($_POST['id']);
		$p->amount=$_POST['amount'];
		$p->color=$_POST['color'];
		header("location:product_cart.php");
		break;
	case 'delete-cart-item':
		$_SESSION['cart']=array_filter($_SESSION['cart'],function($o){return $o->id != $_POST['id'];});
		header("location:product_cart.php");
		break;
	case 'reset-cart':
		restCart();
		break;
	default:
		die("Incorrect Action");
}
//print_p($_GET,$_POST);
?>