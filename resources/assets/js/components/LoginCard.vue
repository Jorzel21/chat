<template>
  <div class="q-pa-md" style="min-width: 320px">

    <q-form
      @submit="onSubmit"
      @reset="onReset"
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
        <a>Cadastre-se</a>
      </div>
    </q-form>

  </div>
</template>

<script>
  export default {
    data () {
      return {
        name: null,
        age: null,

        accept: false
      }
    },

    methods: {
      onSubmit () {
        if (this.accept !== true) {
          this.$q.notify({
            color: 'red-5',
            textColor: 'white',
            icon: 'warning',
            message: 'You need to accept the license and terms first'
          })
        }
        else {
          this.$q.notify({
            color: 'green-4',
            textColor: 'white',
            icon: 'cloud_done',
            message: 'Submitted'
          })
        }
      },

      onReset () {
        this.name = null
        this.age = null
        this.accept = false
      }
    }
  }
</script>
