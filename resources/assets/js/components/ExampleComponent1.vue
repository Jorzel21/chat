<template>
  <div>
  	<q-btn no-caps class="full-width">
	    {{ texto }}
	    <slot></slot>
    </q-btn>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        texto: "Hello"
      }
    },

    mounted() {
      console.log('Component One mounted.')
    }
  }
</script>
