<template>
  <div>
    <div class="input-field col s6">
      <i class="material-icons prefix">mode_edit</i>
      <input id="last_name" type="text" class="validate" v-model="contentMessage" autofocus>
      <label for="last_name">Mensaje de {{name}} {{lastName}} </label>
    </div>
    <div class="col s3">
      <a v-on:click="onPress" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
    </div>
    <br>
    <div class="col s12">
      <input-component 
        v-for="message in messages" 
        :key="message.content"
        :content="message.content">
      </input-component>
      <!-- <example-component v-if="create" data="prueba"></example-component> -->
    </div>
    <!-- <example-component :v-for="message in messages" :name="message.name"></example-component> -->
  </div>
</template>

<script>
export default {
  props: ['name', 'lastName'],
  mounted() {
    console.log('componente Input cargado correctamente');
  },
  data ()  {
    return {
      contentMessage: '',
      messages: [
      ]
    }
  },
  methods: {
    onPress () {
      //this.create = !this.create
      const message = {
        'content': this.contentMessage
      }
      this.messages.push(message)
      this.contentMessage=""
    }
  }
};
</script>
