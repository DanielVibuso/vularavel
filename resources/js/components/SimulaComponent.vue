<template>
       <div class="container">
            <div class="box-titulo">
              <p>
                Meus veículos
              </p>
            </div>
            <div class="box-form">
              <form>
                <selectVehicle v-on:is-selected="getVehicleData"/>
                <div id="box-description-price" class="col-10">
                  <p> >{{ selectedVehicle.description }}</p>
                  <p> <strong> >{{ selectedVehicle.price | toReal }} </strong></p>
                </div>
                <div id="box-simulation" class="col-10" v-if="selectedVehicle.price != ''">
                  <p> Simulação de financiamento</p>
                  <input type="text" pattern= "[0-9]" placeholder="Valor da entrada" v-model:value="valorEntradaComputada"/>
                  <input type="button" value="Simular" v-on:click="simular()"/> 
                </div>
              </form>
              <div id="box-resultado-simulacao" v-if="simulacaoRealizada">
                <strong>Valores simulados para você</strong>
                <ul>
                    <li v-for="parcelamento in parcelamentos">{{ parcelamento.numeroParcelas }}x de {{ parcelamento.valorParcela | toReal }} </li>
                </ul>
            </div>
            </div>
         </div>
        </div>
    </div>
</template>
<script>
    export default {
       data() {
           return {
            selectedVehicle: {id: '', description: 'Nenhum veículo selecionado', price: ''},
            valorEntrada: 0,
            simulacaoRealizada: false,
            parcelamentos:[]
        }
       },
        methods: {
            getVehicleData: function (vehicle) {
                    this.selectedVehicle = vehicle
                    this.simulacaoRealizada = false
                    this.valorEntrada = 0
            },
            simular () {
                if (this.valorEntrada > this.selectedVehicle.price){
                    alert('Valor da entrada deve ser inferior ao do veículo selecionado')
                    return;
                }

                if (isNaN(this.valorEntrada)) {
                    alert("valor da entrada deve ser numérico");
                    return;
                }
                this.parcelamentos = [];
                this.parcelamentos.push({numeroParcelas: 6, valorParcela: this.gerarParcelamento(this.valorPosEntrada(), 6)});
                this.parcelamentos.push({numeroParcelas: 12, valorParcela: this.gerarParcelamento(this.valorPosEntrada(), 12)});
                this.parcelamentos.push({numeroParcelas: 48, valorParcela: this.gerarParcelamento(this.valorPosEntrada(), 48)});
                this.simulacaoRealizada = true;
            },
            gerarParcelamento(valor, numeroParcelas){
                return valor / numeroParcelas;
            },
            valorPosEntrada(){
                return this.selectedVehicle.price - this.valorEntrada;
            }
        },
        filters: {
            toReal: function(value) {
            if (!value) return ''
            return new Intl.NumberFormat([], {
                style: 'currency',
                currency: 'BRL',
                minimumFractionDigits: 2
            }).format(value);
            }
        },
        computed:{
                    valorEntradaComputada: {
                        get() {
                            return new Intl.NumberFormat([], {
                            style: 'currency',
                            currency: 'BRL',
                            minimumFractionDigits: 0
                        }).format(this.valorEntrada);
                        },
                        set(newValue) {
                            let val =  parseInt(newValue.replace(/\D/g,''));
                            console.log(val)
                            this.valorEntrada = isNaN(val) ? 0 : val
                        }
                    }
        } 
}
</script>
<style>
/*Estilo form veículos*/
.box-titulo{
  height: 90px;
  background-color: #9FC5E8;
  border-bottom: 1px solid;
}

.box-titulo p{
  padding: 30px 0;
}

.box-form{
  background-color: #CFE2F3;
  padding-top: 34px;
  height: 500px;
}

#box-description-price, #box-simulation, #box-resultado-simulacao{
    margin-top: 40px;
    margin-left: 60px;
}

</style>