<template>
  <div class="q-pa-md" style="min-width: 320px">

    <q-form
      :action="route"
      method="POST"
      class="q-gutter-md"
    >
      <q-input
        filled
        v-model="email"
        label="E-mail"
        name="email"
        lazy-rules
        :rules="[
            val => val && val.length > 0 || 'Preencha o campo',
        ]"
      />

      <q-input
        filled
        type="password"
        v-model="pass"
        label="Senha"
        name="password"
        lazy-rules
        :rules="[
            val => val && val.length > 0 || 'Preencha o campo',
            val => val && val.length >= 8 || 'Senha deve ter ao menos 8 caracteres',
        ]"
      />

      <div>
        <q-btn label="Entrar" class="full-width" type="submit" color="primary"/>
      </div>
    </q-form>

  </div>
</template>

<script>
  export default {
    props: {
        route: ""
    },

    data () {
      return {
        email: null,
        pass: null,
      }
    },
  }
</script>
