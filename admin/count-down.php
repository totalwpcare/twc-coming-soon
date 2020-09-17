<div class="tab">
<input type="checkbox" class="accordion-check" id="chck2">
<label class="tab-label" for="chck2">Count Down Setting</label>
<div class="tab-content">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><label>Enable CountDown</label></th>
                    <td>
                        <input type="radio" value="1" name="totalwpcare_maintenance_countdown" class="regular-text" <?php echo ($totalwpcare_maintenance_countdown == 1) ? "checked" : "" ?>> Enable &nbsp; &nbsp;
                        <input type="radio" value="0" name="totalwpcare_maintenance_countdown" class="regular-text" <?php echo ($totalwpcare_maintenance_countdown == 0) ? "checked" : "" ?>> Disable
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="siteurl">End Date</label></th>
                    <td><input type="date" id="totalwpcare_maintenance_countdown_end_date" name="totalwpcare_maintenance_countdown_end_date" class="regular-text" value="<?php echo $totalwpcare_maintenance_countdown_end_date ?>"></td>
                </tr>
            </tbody>
        </table>
</div>
</div>