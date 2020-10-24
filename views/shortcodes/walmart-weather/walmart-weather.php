<?php

namespace WalmartWeather;

?>
<div id = "header">
    <?php date_default_timezone_set("America/New_York"); ?>
    <p><?php echo date("Y/m/d H:i"); ?></p>
</div>
<div id="tool">
	<table>
		<tbody>
			<tr>
				<th>Select City: </th>
				<td>
					<select name="select_city">
						<option value = "">--Select City--</option>
						<?php
						$arr = ['Toronto', 'Montreal', 'Vancouver', 'New York', 'Manitoba', 'Orlando'];
						foreach ( $arr as $option ) {
							?>
							<option value="<?= $option; ?>"><?= $option; ?></option>
							<?php
						}
						?>
					</select>
				</td>
			</tr>

		</tbody>
	</table>
</div>
<div id = "result">
    <table>
        <tbody>
        <?php
        $arr = ['City', 'Humidity', 'Temp', 'TempMax', 'TempMin', 'FeelsLike'];
        foreach ( $arr as $value ) {
            ?>
            <tr>
                <th><?= $value; ?> : </th>
                <td id = "<?= $value; ?>"></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<?php


