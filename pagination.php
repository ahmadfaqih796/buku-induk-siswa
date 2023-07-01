				<?php function pagination($jumhal,$nohal,$link) { ?>
				  <nav aria-label="Page navigation example">
				  <ul class="pagination">
					<?php if ($nohal > 1){ ?>
					<li class="page-item">
					  <a class="page-link" href="index.php?hal=<?=$link;?>&nohal=<?=($nohal-1)?>" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					  </a>
					</li>
					<?php } ?>
					<?php for ($i=1;$i<=$jumhal;$i++){ ?>
					<?php if ($i == $nohal){ ?>
						<li class="page-item active"><a class="page-link" href="index.php?hal=<?=$link;?>&nohal=<?=$i?>"><?=$i;?></a></li>
						<?php } else { ?>
						<li class="page-item"><a class="page-link" href="index.php?hal=<?=$link;?>&nohal=<?=$i?>"><?=$i;?></a></li>
						<?php } ?>
					<?php } ?>
					<?php if ($nohal < $jumhal){ ?>
					<li class="page-item">
					  <a class="page-link" href="index.php?hal=<?=$link;?>&nohal=<?=($nohal+1)?>" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					  </a>
					</li>
					<?php } ?>
				  </ul>
				 </nav>
				<?php } ?>