<div class="row text-center">
						<?php
						if(!isset($_POST[$nom])) {
							if (!isset($_COOKIE[$nom])) {
								?>
									<form method ="POST"  name="like" action="#" >
										<button type="submit" class="border border-0 " name="<?= $nom ?>">
											<i class="bi bi-emoji-heart-eyes"></i>
										</button>
									</form>
								<?php

							} else {
								?>
									<button  type="submit" class="border border-0 text-danger">
										<i class="bi bi-emoji-heart-eyes-fill"></i>
									</button>
								<?php
							}
						}
						
						if (isset($_POST[$nom])) {
							if (!isset($_COOKIE[$nom])) {
								setcookie($nom,true,time()+3600*24);
								?>
									<button  type="submit" class="border border-0 text-danger">
										<i class="bi bi-emoji-heart-eyes-fill"></i>
									</button>
								<?php
							} else {
								setcookie($nom,false,time()-3600*24);
								?>
									<form method ="POST"  name="like" action="#" >
										<button type="submit" class="border border-0" name="<?= $nom ?>">
											<i class="bi bi-emoji-heart-eyes"></i>
										</button>
									</form>
								<?php
							}
						}
						?>
					</div>