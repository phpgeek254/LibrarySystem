<template>
	<div>
		<div class="input-field col s12">
         <gmap-autocomplete
         @place_changed="set_location">
         </gmap-autocomplete>
     </div>
        <div class="col s12">
            <gmap-map :center="location" :zoom="6"
                style="max-width:100%; height: 400px;">
                <gmap-marker
                        :position="location"
                        :clickable="false"
                        :draggable="false"
                        @click="center=location"
                        @place_changed="set_location"
                ></gmap-marker>
            </gmap-map>
            <input type="hidden" name="lat" v-model="location.lat">
            <input type="hidden" name="long" v-model="location.lng">
            <input type="hidden" name="county" v-model="location.county">
            <input type="hidden" name="location_name" v-model="location.location_name">
            <input type="hidden" name="address" v-model="location.address">
        </div>
	</div>
	
</template>

<script>
	export default {
		data() {
			return {
				location: {
                    lat: 0.5143,
                    lng: 35.2698,
                    address: '',
                    location_name: '',
                    county: '',
                },

                markers: [{
                    position: location
                }],
			}
		},

		methods: {
            set_location(location) {
                console.log('place changed')
                console.log(location)
                this.location = {
                    lat: location.geometry.location.lat(),
                    lng: location.geometry.location.lng(),
                }
                this.location.lat = this.location.lat
                this.location.long = this.location.lng
                this.location.location_name = location.name
                this.location.address = location.formatted_address
                this.location.county = location.address_components[1].long_name
            },
        }
	}

</script>