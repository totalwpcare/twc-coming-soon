<div class="tab active">
    <input type="checkbox" class="accordion-check" id="chck1" checked>
    <label class="tab-label" for="chck1">General Setting</label>
    <div class="tab-content">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><label>Enable Maintenance Mode</label></th>
                    <td>
                        <input type="radio" value="1" name="totalwpcare_maintenance_mode" class="regular-text" <?php echo ($twc_maintenance_mode_active == 1) ? "checked" : "" ?>> Enable &nbsp; &nbsp;
                        <input type="radio" value="0" name="totalwpcare_maintenance_mode" class="regular-text" <?php echo ($twc_maintenance_mode_active == 0) ? "checked" : "" ?>> Disable
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="siteurl">Site Logo (URL)</label></th>
                    <td><input type="text" id="totalwpcare_maintenance_website_logo" name="totalwpcare_maintenance_website_logo" class="regular-text" value="<?php echo $totalwpcare_maintenance_website_logo ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label>Display Logo</label></th>
                    <td>
                        <input type="radio" value="1" name="totalwpcare_maintenance_display_website_logo" class="regular-text" <?php echo ($totalwpcare_maintenance_display_website_logo == 1) ? "checked" : "" ?>> Yes &nbsp; &nbsp;
                        <input type="radio" value="0" name="totalwpcare_maintenance_display_website_logo" class="regular-text" <?php echo ($totalwpcare_maintenance_display_website_logo == 0) ? "checked" : "" ?>> No
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="home">Site Headline</label></th>
                    <td><input type="text" id="totalwpcare_maintenance_headline" name="totalwpcare_maintenance_headline" class="regular-text" value="<?php echo $totalwpcare_maintenance_headline; ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="home">Site Description</label></th>
                    <td><textarea id="totalwpcare_maintenance_description" name="totalwpcare_maintenance_description" rows="10" class="regular-text"><?php echo $totalwpcare_maintenance_description ?></textarea></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>