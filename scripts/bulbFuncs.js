//bulb functions
		'use strict';
		
		
		/*
		Our bridge IP address registered to Aderhold 203 is 131.96.207.221
		Our username is 16os-r7I0Rof48hnnt7vrDgNJd6XT5NE6ENREmkN
		
		
		*/
		
		let client = require('./init-client');
		
		
		let AbstractAction = require('./AbstractAction');
		let LightUtils     = require('../Command/Light/Utils');
		
		let huejay = require('huejay');
			//Create Client
		let client = new huejay.Client({
			host:'131.96.207.221',
			username: '16os-r7I0Rof48hnnt7vrDgNJd6XT5NE6ENREmkN'
		});
		//our username is 16os-r7I0Rof48hnnt7vrDgNJd6XT5NE6ENREmkN
		let user = new client.users.User;
		
		
		//define system state
		const LIGHT_STATE_MAP = {
		  on:                  'on',
		  brightness:          'bri',
		  hue:                 'hue',
		  saturation:          'sat',
		  xy:                  'xy',
		  colorTemp:           'ct',
		  alert:               'alert',
		  effect:              'effect',
		  transitionTime:      'transitiontime',
		  incrementBrightness: 'bri_inc',
		  incrementHue:        'hue_inc',
		  incrementSaturation: 'sat_inc',
		  incrementXy:         'xy_inc',
		  incrementColorTemp:  'ct_inc',
		};
		
		
		//Accepts as parameter 'light'- the slider value from 0-254 that the lights are in
		class ChangeLightState extends AbstractAction {
			  /**
			   * Constructor
			   *
			   * @param {Light} light    Light
			   * @param {array} useState State to use
			   */
			  constructor(light, useState) {
				super();

				LightUtils.validateLight(light);

				this.light    = light;
				this.useState = useState;
			  }

			  /**
			   * Export action
			   *
			   * @param {client} client Client
			   *
			   * @return {Object} Action object
			   */
			  exportAction(client, withUsername) {
				let address = `/lights/${this.light.id}/state`;
				let body    = {};

				if (this.useState !== undefined) {
				  for (let key of this.useState) {
					if (key in LIGHT_STATE_MAP) {
					  let stateAttribute = LIGHT_STATE_MAP[key];
					  body[stateAttribute] = this.light.state.get(stateAttribute);
					}
				  }
				} else {
				  body = this.light.state.getChanged();
				}

				if (!!withUsername) {
				  address = `/api/${client.username}${address}`;
				}

				return {
				  method: 'PUT',
				  address,
				  body,
				}
			  }
			}

			module.exports = ChangeLightState;

	
	//actual functions
		function bulbOn(bulbID, onOrOff){
			ChangeLightState(bulbID, onOrOff);
			
		}
		
		function brighten(bulbID, amnt){
			ChangeLightState(bulbID, amnt);
			
		}
		

		
		function testAuth(){
			//test button by getting info on authenticated user
		client.users.get()
		  .then(user => {
			console.log('Username:', user.username);
			console.log('Device type:', user.deviceType);
			console.log('Create date:', user.created);
			console.log('Last use date:', user.lastUsed);
		  });
		}
		
		

	