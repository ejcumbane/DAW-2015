
<div class="navbar-collapse collapse" id="navbar-collapsible">
	<ul class="nav navbar-nav navbar-left">
<li>
<!-- Menu de topo -->
	<?php 
/*
Chamar no layout, abaixo da div <div id="header">
		<?php echo $this->element('menutopo');//Aqui?>
*/
	$grupo = $current_user['group_id'];
	$user=$current_user['username'];
	if(!$user) $user='Desconhecido!';

	if($user=='Desconhecido!'){
		echo $this->Html->link(__('Entrar / Cadastra-se'), '/login'); 
	}else{
		if($grupo ==1){
			echo '&nbsp;'.$this->Html->link(__('Ínicio'), array('plugin'=>null,'controller'=>'posts','action'=>'index')); 
			echo $this->Html->link(__('Membros'), '/users'); 
			echo $this->Html->link(__('Cargos'), '/groups'); 
			//echo $this->Html->link(__('Privilégios'), '/privileges'); 
			echo $this->Html->link(__('Tarefas'), array('plugin'=>null,'controller'=>'Ocupations','action'=>'index'));
			echo $this->Html->link(__('Alocações'), array('plugin'=>null,'controller'=>'Alocations','action'=>'index'));
		/*	echo $this->Html->link(__('Pedidos'), array('controller'=>'pedidos','action'=>'index'));*/
			echo '&nbsp;'.$this->Html->link(__('Sair'), array('plugin'=>'admin','controller'=>'users','action'=>'logout'));
		}else if($grupo ==2){
			echo $this->Html->link(__('Posts'), array('plugin'=>null,'controller'=>'posts','action'=>'index')); 
/*			echo $this->Html->link(__('Funcionários'), array('controller'=>'funcionarios','action'=>'index'));
			echo $this->Html->link(__('Produtos'), array('controller'=>'produtos','action'=>'index'));
			echo $this->Html->link(__('Pedidos'), array('controller'=>'pedidos','action'=>'index'));*/
			echo '&nbsp;'.$this->Html->link(__('Sair'), array('plugin'=>'admin','controller'=>'users','action'=>'logout'));
		}else{
			echo $this->Html->link(__('Funcionários'), array('controller'=>'funcionarios','action'=>'index'));
			echo '&nbsp;'.$this->Html->link(__('Sair'), array('plugin'=>'admin','controller'=>'users','action'=>'logout'));
			
		}
	}
	
		echo '&nbsp;&nbsp;&nbsp;Logado como: '. $user; 
	?></li>
</ul>
</div></div>