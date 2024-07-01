{literal}
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('country_id').addEventListener('change', function() {
        var countryId = this.value;
        var stateDropdown = document.getElementById('state_id');
        var cityDropdown = document.getElementById('city_id');
        
        // Clear state and city dropdowns
        stateDropdown.innerHTML = '<option value="">Select State</option>';
        cityDropdown.innerHTML = '<option value="">Select City</option>';
        
        // Fetch states based on countryId
        if (countryId) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'rest/v10/Accounts/getStatesByCountry?country_id=' + countryId, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var states = JSON.parse(xhr.responseText);
                    states.forEach(function(state) {
                        stateDropdown.innerHTML += '<option value="' + state.id + '">' + state.name + '</option>';
                    });
                }
            };
            xhr.send();
        }
    });

    document.getElementById('state_id').addEventListener('change', function() {
        var stateId = this.value;
        var cityDropdown = document.getElementById('city_id');

        // Clear city dropdown
        cityDropdown.innerHTML = '<option value="">Select City</option>';

        // Fetch cities based on stateId
        if (stateId) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'rest/v10/Accounts/getCitiesByState?state_id=' + stateId, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var cities = JSON.parse(xhr.responseText);
                    cities.forEach(function(city) {
                        cityDropdown.innerHTML += '<option value="' + city.id + '">' + city.name + '</option>';
                    });
                }
            };
            xhr.send();
        }
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
