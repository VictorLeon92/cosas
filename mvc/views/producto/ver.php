<?php if (isset($pro)) : ?>
	<h1><?=$pro->nombre?></h1>
	<?php if ($product->imagen != null): ?>
		<img src="<?=base_url?>uploads/images/<?=$product->imagen?>">
	<?php else: ?>
		<img src="<?=base_url?>assets/img/camiseta.png">
	<?php endif; ?>			
	<p><?= $product->descipcion ?></p>	
	<p><?= $product->precio ?></p>
	<a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a>

<?php else: ?>
	<h1>El producto no existe</h1>
<?php endif; ?>