({
    extendsFrom: 'EditView',

    initialize: function (options) {
        this._super('initialize', [options]);
        this.model.on('change:country_c', this.filterStates, this);
        this.model.on('change:state_c', this.filterCities, this);
    },

    filterStates: function () {
        var country = this.model.get('country_c');
        var states = app.lang.getAppListStrings('states_list');
        var filteredStates = {};

        _.each(states, function (value, key) {
            if (key.startsWith(country + '_')) {
                filteredStates[key] = value;
            }
        });

        this.fields['state_c'].items = filteredStates;
        this.model.set('state_c', '');
        this.render();
    },

    filterCities: function () {
        var state = this.model.get('state_c');
        var cities = app.lang.getAppListStrings('cities_list');
        var filteredCities = {};

        _.each(cities, function (value, key) {
            if (key.startsWith(state + '_')) {
                filteredCities[key] = value;
            }
        });

        this.fields['city_c'].items = filteredCities;
        this.model.set('city_c', '');
        this.render();
    }
});
