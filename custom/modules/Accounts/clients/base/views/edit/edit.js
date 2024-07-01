({
    extendsFrom: 'RecordEditView',

    initialize: function(options) {
        this._super('initialize', [options]);
        this.model.on('change:country', this.fetchStates, this);
        this.model.on('change:state', this.fetchCities, this);
    },

    fetchStates: function() {
        var self = this;
        var countryId = this.model.get('country_id');

        app.api.call('GET', app.api.buildURL('Accounts/getStatesByCountry/' + countryId), null, {
            success: function(data) {
                self.renderStates(data);
            },
            error: function(err) {
                app.alert.show('fetch-states-error', {
                    level: 'error',
                    messages: 'Error fetching states: ' + err.message,
                });
            },
        });
    },

    fetchCities: function() {
        var self = this;
        var stateId = this.model.get('state_id');

        app.api.call('GET', app.api.buildURL('Accounts/getCitiesByState/' + stateId), null, {
            success: function(data) {
                self.renderCities(data);
            },
            error: function(err) {
                app.alert.show('fetch-cities-error', {
                    level: 'error',
                    messages: 'Error fetching cities: ' + err.message,
                });
            },
        });
    },

    renderStates: function(states) {
        var self = this;
        var stateDropdown = this.getField('state'); // Assuming 'state' is the field name
    
        // Clear existing options
        stateDropdown.$el.empty();
    
        // Add default option
        stateDropdown.$el.append($('<option>', {
            value: '',
            text: app.lang.get('LBL_SELECT_STATE', 'ModuleName'), // Replace 'ModuleName' with your actual module name
            selected: true,
        }));
    
        // Populate dropdown with fetched states
        _.each(states, function(state) {
            stateDropdown.$el.append($('<option>', {
                value: state.id,
                text: state.name,
            }));
        });
    
        // Trigger change event to refresh UI (if needed)
        stateDropdown.trigger('change');
    },
    
    renderCities: function(cities) {
        var self = this;
        var cityDropdown = this.getField('city'); // Assuming 'city' is the field name
    
        // Clear existing options
        cityDropdown.$el.empty();
    
        // Add default option
        cityDropdown.$el.append($('<option>', {
            value: '',
            text: app.lang.get('LBL_SELECT_CITY', 'ModuleName'), // Replace 'ModuleName' with your actual module name
            selected: true,
        }));
    
        // Populate dropdown with fetched cities
        _.each(cities, function(city) {
            cityDropdown.$el.append($('<option>', {
                value: city.id,
                text: city.name,
            }));
        });
    
        // Trigger change event to refresh UI (if needed)
        cityDropdown.trigger('change');
    },
    
})
