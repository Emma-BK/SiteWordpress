( function( api ) {

	// Extends our custom "decorme" section.
	api.sectionConstructor['decorme'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );