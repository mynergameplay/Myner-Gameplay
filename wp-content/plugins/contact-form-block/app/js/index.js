// React & Vendor Libs
import React from 'react';
import ReactDOM from 'react-dom';

// Components
import Settings from '@app/components/Settings';

document.addEventListener('DOMContentLoaded', function(event) {

	// Settings
	const settings = document.getElementById('mcfb-admin-settings');
	if (settings) {
		ReactDOM.render((<Settings />), settings);
	}

});
