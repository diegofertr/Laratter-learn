<template>
  <div class="row">
    <form>
      <div class="input-field col s6">
        <input :value="content" id="first_name" type="text" class="validate" required autofocus>      
        <label for="first_name">First Name</label>
      </div>
    </form>
    <br>
  </div>
</template>

<script>
export default {
  props: ['content']
};
</script>
