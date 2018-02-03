<template>
  <div class="row">
    <div class="input-field col s6">
      <input :value="content" id="first_name" type="text" class="validate">
      <label for="first_name">First Name</label>
    </div>
    <br>
  </div>
</template>

<script>
export default {
  props: ['content']
};
</script>
