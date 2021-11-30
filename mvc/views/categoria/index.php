					<h1>Gestionar categorías</h1>

					<a href="<?=base_url?>categoria/crear" class="button boton-small">Crear categoría</a>

					<table>
						<tr>
							<th>ID</th>
							<th>NOMBRE</th>
						</tr>
						<?php while ($cat = $categorias->fetch_object()): ?>
						<tr>
							<td>
							<?= $cat->jd; ?>
							</td>
							<td>
							<?= $cat->nombre; ?>
							</td>
						</tr>
						<?php endwhile; ?>
					</table>