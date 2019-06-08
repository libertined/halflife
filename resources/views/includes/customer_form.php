							<h2><?php if ($customer_data['id']) {echo($words['h1_customer_change']);} else {echo($words['h1_customer_add']);} ?></h2>
							<input type="hidden" name="customer[id]" value="<?=$customer_data['id'] ?>">
							<label><span><?=$words['nic_plh'] ?></span><input type="text" name="customer[nic]" value="<?=phone_enhance($customer_data['nic'],'back') ?>"></label>
							<label><span><?=$words['passw2_plh'] ?></span><input type="text" name="customer[passw]" value=""></label>
							<label>
								<span><?=$words['customer_role_info'] ?></span>
								<select name="customer[role]">
									<?php foreach ($userrole as $role_id=>$role_name) { ?><option value="<?=$role_id ?>"<?php if ($role_id==$customer_data['role']) { ?> selected<?php } ?>><?=$role_name ?></option><?php } ?>
								</select>
							</label>							
							<label class="go-on"><a href="#" class="art-button btn-large"><?php if ($customer_data['id']) {echo($words['change']);} else {echo($words['add']);} ?></a></label>
