
<?php foreach ($cursos as $curso) { ?>
	<p><h1> <?php echo $curso['cursos']['NOME']; ?></h1></p>
	<br>
	<p> <?php echo $curso['cursos']['DESCRICAO']; ?> </p>
	<br>
	<?php if($curso['cursos']['SITE'] =="") { ?>
		<p>Site: N�o encontrado/informado </p>
	<?php
	} else { ?>
		<p> Site: <?php echo $curso['cursos']['SITE']; ?></p>
	
	<?php
	}
	?>	
	<br>
	<?php if($curso['cursos']['TURNO'] =="") { ?>
		<p>Turno: N�o encontrado </p>
	<?php
	} else { ?>
		<p> Turno: <?php echo $curso['cursos']['TURNO']; ?></p>
	
	<?php
	}
	?>
	<br>
	<?php if($curso['cursos']['EMAIL_CONTATO'] =="") { ?>
		<p>Email: Email n�o informado </p>
	<?php
	} else { ?>
		<p> EMAIL: <?php echo $curso['cursos']['EMAIL_CONTATO']; ?></p>
	
	<?php
	}
	?>	
	<br>
	<?php if($curso['cursos']['TELEFONE'] =="") { ?>
		<p>Telefone: N�o informado </p>
	<?php
	} else { ?>
		<p> Telefone: <?php echo $curso['cursos']['TELEFONE']; ?></p>
	
	<?php
	}
	?>		
	<br>
	<?php if($curso['cursos']['DURACAO'] =="") { ?>
		<p>Dura��o: N�o informado </p>
	<?php
	} else { ?>
		<p> Dura��o: <?php echo $curso['cursos']['DURACAO']; ?></p>
	
	<?php
	}
	?>	
<?php
}
?>