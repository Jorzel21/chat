<template>
  <div class="q-pa-md" style="min-width: 320px">

    <q-form
      @submit="onSubmit"
      class="q-gutter-md"
    >
      <q-input
        filled
        v-model="name"
        label="E-mail"
        lazy-rules
        :rules="[ val => val && val.length > 0 || 'Please type something']"
      />

      <q-input
        filled
        type="password"
        v-model="age"
        label="Senha"
        lazy-rules
        :rules="[
          val => val && val.length > 8 || 'Senha deve ter ao menos 8 caracteres',
        ]"
      />

      <div>
        <q-btn label="Entrar" class="full-width" type="submit" color="primary"/>

      </div>

      <a href="#">Cadastre-se</a>
    </q-form>

  </div>
</template>

<script>
  export default {
    data () {
      return {
        name: null,
        age: null,
      }
    },
  }
</script>
