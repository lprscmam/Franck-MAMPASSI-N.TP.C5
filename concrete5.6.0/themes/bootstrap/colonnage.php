<?php $this->inc('elements/header.php');?>

<div class="row">
		    <div class="span4">
		       
				
				
				 colonne 1
				<?php
				$a=new Area('contenue');
				$a->display($c);
				?>
				  
			
				  
				</div>
				<div class="span4">
		        
				
				
				colonne 2
				<?php
				$a=new Area('contenue1');
				$a->display($c);
				?>
				  
		
				  
				</div>
				<div class="span4">
		        
				
				colone 3
				<?php
				$a=new Area('contenue2');
				$a->display($c);
				?>
				  
			
				  
				</div>
				</div>
		 




<?php $this->inc('elements/footer.php');?>
