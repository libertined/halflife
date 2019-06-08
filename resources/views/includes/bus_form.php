							<h2><?php if ($bus_data['hash']) {echo($words['h1_bus_change']);} else {echo($words['h1_bus_add']);} ?></h2>
							<input type="hidden" name="bus[hash]" value="<?=$bus_data['hash'] ?>">
							<label>
								<span><?=$words['bus_type_info'] ?></span>
								<select name="bus[type]">
									<?php foreach ($bustype as $bus_id=>$bus_name) { ?><option value="<?=$bus_id ?>"<?php if ($bus_id==$bus_data['type']) { ?> selected<?php } ?>><?=$bus_name ?></option><?php } ?>
								</select>
							</label>							
							<label><span><?=$words['bus_number_info'] ?></span><input type="text" name="bus[number]" value="<?=$bus_data['number'] ?>"></label>
							<label><span><?=$words['bus_tariff_info'] ?></span><input type="text" name="bus[tariff]" value="<?=$bus_data['tariff'] ?>"></label>
							<label class="go-on"><a href="#" class="art-button btn-large"><?php if ($bus_data['id']) {echo($words['change']);} else {echo($words['add']);} ?></a></label>
