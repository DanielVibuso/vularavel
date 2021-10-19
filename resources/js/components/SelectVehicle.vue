<template>
       <div class="container">
                <div id="box-select-veicle" class="col-10">
                  <select class="form-control">
                    <option value="" disabled selected hidden>Selecione um veículo</option>
                    <option v-for="(vehicle, index) in vehicles" v-on:click="getSelectedVehicle(index)">{{ vehicle.description }}</option>
                  </select>
                </div>
    </div>
</template>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    export default {
       data() {
           return {
            vehicles: null,
        }
       },
        mounted(){
            this.getVehiclesFromApi();
        },
        methods: {
            getVehiclesFromApi: function(){
            axios
                .get('http://0.0.0.0:3000/api/vehicle')
                .then( response => (this.vehicles = response.data))
            },
            getSelectedVehicle: function (index) {
                    this.$emit('is-selected', this.vehicles[index])
            },
        }, 
}
</script>
