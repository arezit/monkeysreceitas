<?php
	header("Content-type: text/html; charset=utf-8");
	function writeShoppingCart() {
		if (isset($_SESSION['cart'])){
			$cart = $_SESSION['cart'];
		}else{
			$cart = "";
		}
		if (!$cart) {
			return '<p>Ainda não há itens no seu carrinho</p>';
		} else {
			// Parse the cart session variable
			$items = explode(',',$cart);
			$s = (count($items) > 1) ? 's':'';
			return '<p>Você tem <a href="carrinho.php">'.count($items).' item'.$s.' no seu carrinho</a></p>';
		}
	}
	function showCart() {
		global $db;
		$cart = $_SESSION['cart'];
		$total=0;
		if ($cart) {
			$items = explode(',',$cart);
			$contents = array();
			foreach ($items as $item) {
				$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
			}
			$output[] = '<form action="carrinho.php?action=update" method="post" id="cart">';
			$output[] = '<table>';
			foreach ($contents as $id=>$qty) {
				include("includes/conn.php");
				$sql = 'SELECT * FROM produtos WHERE id = '.$id;
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result);
				extract($row);
				$output[] = '<tr>';
				$output[] = '<td><a href="carrinho.php?action=delete&id='.$id.'" class="r">Remover</a></td>';
				$output[] = '<td>'.$descricao.'</td>';
				$output[] = '<td>R$'.$preco.'</td>';
				$output[] = '<td><input type="text" name="qty'.$id.'" value="'.$qty.'" size="3" maxlength="3" /></td>';
				$output[] = '<td>R$'.($preco * $qty).'</td>';
				$total += $preco * $qty;
				$output[] = '</tr>';
			}
			$output[] = '</table>';
			$output[] = '<p>Total: <strong>R$'.$total.'</strong></p>';
			$output[] = '<div><button type="submit">Atualizar carrinho</button></div>';
			$output[] = '</form>';
		} else {
			$output[] = '<p>Seu carrinho está vazio.</p>';
		}
		return join('',$output);
	}
	/*
	function finalizarCart() {
		global $db;
		$cart = $_SESSION['cart'];
		$total=0;
		if ($cart) {
			$items = explode(',',$cart);
			$contents = array();
			foreach ($items as $item) {
				$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
			}
			$output[] = '<form action="carrinho.php?action=update" method="post" id="cart">';
			$output[] = '<table>';
			foreach ($contents as $id=>$qty) {
				$sql = 'SELECT * FROM produtos WHERE id = '.$id;
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($conn, $result);
				extract($row);
				$output[] = '<tr>';
				$output[] = '<td><a href="carrinho.php?action=delete&id='.$id.'" class="r">Remover</a></td>';
				$output[] = '<td>'.$descricao.'</td>';
				$output[] = '<td>R$'.$preco.'</td>';
				$output[] = '<td><input type="text" name="qty'.$id.'" value="'.$qty.'" size="3" maxlength="3" /></td>';
				$output[] = '<td>R$'.($preco * $qty).'</td>';
				$total += $preco * $qty;
				$output[] = '</tr>';
			}
			$output[] = '</table>';
			$output[] = '<p>Total: <strong>R$'.$total.'</strong></p>';
			$output[] = '<div><button type="submit">Atualizar carrinho</button></div>';
			$output[] = '</form>';
		} else {
			$output[] = '<p>Seu carrinho está vazio.</p>';
		}
		return join('',$output);
	}
	*/
?>
