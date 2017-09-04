<nav class="navbar navbar-inverse nav-users">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?= $this->Html->link('Cake3',['controller'=>'Users','action'=>'index'], ['class'=> 'navbar-brand']) ?>
		</div>

		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<?= $this->Html->link('Listar Usuarios',['controller'=>'Users','action'=>'index']) ?>
						</li>
						<li>
							<?= $this->Html->link('Agregar Usuario',['controller'=>'Users','action'=>'add']) ?>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>