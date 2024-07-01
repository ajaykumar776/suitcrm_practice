$(document).ready(function() {
    // Function to update the state dropdown based on selected country
    function updateStateDropdown() {
        var country = $('#country_c').val();
        var states = app_list_strings['state_list'];

        var options = '<option value="">Select State</option>';
        for (var key in states) {
            if (states.hasOwnProperty(key)) {
                if (key.startsWith(country + '_')) {
                    options += '<option value="' + key + '">' + states[key] + '</option>';
                }
            }
        }
        $('#state_c').html(options);
    }

    // Function to update the city dropdown based on selected state
    function updateCityDropdown() {
        var state = $('#state_c').val();
        var cities = app_list_strings['city_list'];

        var options = '<option value="">Select City</option>';
        for (var key in cities) {
            if (cities.hasOwnProperty(key)) {
                if (key.startsWith(state + '_')) {
                    options += '<option value="' + key + '">' + cities[key] + '</option>';
                }
            }
        }
        $('#city_c').html(options);
    }

    // Initial population
    updateStateDropdown();
    updateCityDropdown();

    // Event listeners
    $('#country_c').change(function() {
        updateStateDropdown();
        updateCityDropdown();
    });

    $('#state_c').change(function() {
        updateCityDropdown();
    });

    // Pre-select values if they exist
    if ($('#country_c').data('selected')) {
        $('#country_c').val($('#country_c').data('selected'));
        updateStateDropdown();
        if ($('#state_c').data('selected')) {
            $('#state_c').val($('#state_c').data('selected'));
            updateCityDropdown();
            if ($('#city_c').data('selected')) {
                $('#city_c').val($('#city_c').data('selected'));
            }
        }
    }
});
