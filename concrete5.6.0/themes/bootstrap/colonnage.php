<?php $this->inc('elements/header.php');?>

<div class="row">
		    <div class="span4">
		       
				
				
				 <h3>COLONNE 1</h3>
				 <div class="hero-unit">
				<?php
				$a=new Area('contenue');
				$a->display($c);
				?>
				  
			
				</div>  
				</div>
				<div class="span4">
		        
				
				
				<h3>COLONNE 2</h3>
				<div class="hero-unit">
				<?php
				$a=new Area('contenue1');
				$a->display($c);
				?>
				  
		         </div>
				  
				</div>
				<div class="span4">
		        
				
				<h3>COLONNE 3</h3>
				<div class="hero-unit">
				<?php
				$a=new Area('contenue2');
				$a->display($c);
				?>
				  
			</div>
				  
				</div>
				</div>
		 

<div class="row">

		      	<div class="span12">
				
					
				<h4>BARRE BASSE AVEC UNE TAILLE DE 12</h4>
				<div class="well well-small">
				<?php
				$a=new Area('contenue3');
				$a->display($c);
				?>
				</div>  
				
		      		
		      	</div>	  
</div>


<?php $this->inc('elements/footer.php');?>
