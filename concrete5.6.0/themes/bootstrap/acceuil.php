<?php $this->inc('elements/header.php');?>

<div class="row">
		    <div class="span10">
		        <div class="hero-unit">
				
				<?php
				$a=new Area('contenue');
				$a->display($c);
				?>
				  
				</div>
		      
		      <div class="row">
		      	<div class="span5">
				<div class="well well-small">
					<?php
						$a=new Area('bas gauche');
						$a->display($c);
						?>
		      	</div>	
		      	</div>	      	
		      	<div class="span5">
				<div class="well well-small">
				<?php
				$a=new Area('bas droite');
				$a->display($c);
				?>
		      	</div>	
		      	</div>
		      </div>
		      
		    </div>
		    <div class="span2">
			
			<?php
				$a=new Area('barre lateral');
				$a->display($c);
			?>
		    	<div class="well well-small">
					
				</div>
		    </div>
	    </div>
	    
	    <div class="row">





<?php $this->inc('elements/footer.php');?>
