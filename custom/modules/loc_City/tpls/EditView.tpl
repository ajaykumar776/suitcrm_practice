{literal}
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('country_id').addEventListener('change', function() {
        var countryId = this.value;
        // Use AJAX to fetch states based on countryId
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'index.php?module=States&action=getStatesByCountry&country_id=' + countryId, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var stateDropdown = document.getElementById('state_id');
                stateDropdown.innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    });

    document.getElementById('state_id').addEventListener('change', function() {
        var stateId = this.value;
        // Use AJAX to fetch cities based on stateId
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'index.php?module=Cities&action=getCitiesByState&state_id=' + stateId, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var cityDropdown = document.getElementById('city_id');
                cityDropdown.innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    });
});
</script>
{/literal}

<!-- Other fields -->
<tr>
    <td width="12.5%" scope="col">
        <label for="country_id">Country</label>
    </td>
    <td width="37.5%" scope="col">
        <select id="country_id" name="country_id">
            <option value="">Select Country</option>
            {html_options options=$fields.country_id.options selected=$fields.country_id.value}
        </select>
    </td>
</tr>
<tr>
    <td width="12.5%" scope="col">
        <label for="state_id">State</label>
    </td>
    <td width="37.5%" scope="col">
        <select id="state_id" name="state_id">
            <option value="">Select State</option>
            {html_options options=$fields.state_id.options selected=$fields.state_id.value}
        </select>
    </td>
</tr>
<tr>
    <td width="12.5%" scope="col">
        <label for="city_id">City</label>
    </td>
    <td width="37.5%" scope="col">
        <select id="city_id" name="city_id">
            <option value="">Select City</option>
            {html_options options=$fields.city_id.options selected=$fields.city_id.value}
        </select>
    </td>
</tr>
