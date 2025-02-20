// Populate dropdown (generic function)
function populateDropdown(url, data, targetSelectId, defaultText, selectedId = null) {
    return new Promise(function(resolve, reject) {
        fetchDropdownData(url, data, function(items) {
            var targetSelect = $(`#${targetSelectId}`);
            targetSelect.empty().append(`<option value="0" selected>${defaultText}</option>`);
            
            $.each(items, function(index, item) {
                targetSelect.append(
                    $('<option>', {
                        value: item.id,
                        text: item.name
                    })
                );
            });

            if (selectedId) {
                targetSelect.val(selectedId).trigger('change');
            }

            targetSelect.select2();
            ReapplyStyles();

            resolve(); // Resolve the promise when done
        });
    });
}

// Fetch dropdown data
function fetchDropdownData(url, data, successCallback) {
    return $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function(response) {
            try {
                var parsedData = JSON.parse(response);
                if (parsedData.success) {
                    successCallback(parsedData.list);
                } else {
                    console.error(parsedData.message);
                }
            } catch (e) {
                console.error('Failed to parse JSON response', e);
            }
        },
        error: function() {
            console.error('Failed to fetch data');
        }
    });
}

// Generic function for dropdowns based on action
function populateAddressDropdown(action, idKey, idValue, defaultText, targetSelectId, selectedId = null) {
    return populateDropdown(
        'action',
        { action: action, [idKey]: idValue }, // Dynamically set the ID field
        targetSelectId,
        defaultText,
        selectedId
    );
}

// Populate regions
function populateRegions(selectedRegionId) {
    return populateAddressDropdown('dropdown-Regions', 'countryId', null, 'Select Region', 'regionId', selectedRegionId);
}

// Populate provinces
function populateProvinces(regionId, selectedProvinceId) {
    return populateAddressDropdown('dropdown-Provinces', 'regionId', regionId, 'Select Province', 'provinceId', selectedProvinceId);
}

// Populate cities
function populateCities(provinceId, selectedCityId) {
    return populateAddressDropdown('dropdown-Cities', 'provinceId', provinceId, 'Select City', 'cityId', selectedCityId);
}

// Populate barangays
function populateBarangays(cityId, selectedBarangayId) {
    return populateAddressDropdown('dropdown-Barangays', 'cityId', cityId, 'Select Barangay', 'barangayId', selectedBarangayId);
}
  
// Setup handlers for dropdown changes (region, province, city, barangay)
function setupAddressDropdownHandlers(regionSelectId, provinceSelectId, citySelectId, barangaySelectId) {
    // Handle region change
    $(`#${regionSelectId}`).on('change', function () {
        var regionId = $(this).val();
        if (regionId) {
            populateProvinces(regionId, null); // Load provinces but don't pre-select any
            // $(`#${citySelectId}`).empty().append('<option value="0" selected>Select City</option>').select2(); // Reset cities
        }
    });

    // Handle province change
    $(`#${provinceSelectId}`).on('change', function () {
        var provinceId = $(this).val();
        if (provinceId) {
            populateCities(provinceId, null); // Load cities but don't pre-select any
            // $(`#${barangaySelectId}`).empty().append('<option value="0" selected>Select Barangay</option>').select2(); // Reset barangays
        }
    });

    // Handle city change
    $(`#${citySelectId}`).on('change', function () {
        var cityId = $(this).val();
        if (cityId) {
            populateBarangays(cityId, null); // Load barangays but don't pre-select any
        }
    });
}
