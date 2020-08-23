@extends('layouts.app')

@section('content')
<q-page>
    <div class="flex justify-center text-center" style="padding-top: 10vh">
        <q-card class="my-card">
            <q-card-section>
                <img src="{{ asset('img/LOGO.png') }}" style="height: 3vw; width: auto"/>
                <div class="q-pa-md" style="min-width: 320px">
                    <q-form
                        action="{{ route('login') }}"
                        method="POST"
                        class="q-gutter-md"
                    >
                        <q-input
                            filled
                            label="E-mail"
                            v-model="email"
                            name="email"
                            lazy-rules
                            :rules="[
                                val => val && val.length > 0 || 'Preencha o campo',
                            ]"
                        ></q-input>

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
                        >
                        </q-input>
                        <div>
                            <q-btn label="Entrar" class="full-width" type="submit" color="primary"/>
                        </div>
                    </q-form>
                </div>
            </q-card-section>
        </q-card>
    </div>
</q-page>
@endsection


@section('script')
  <script>
    new Vue(
      {
        el: '#app',
        data: function() {
          return {
            pass: '',
            email: ''
          }
        }

    })
  </script>
@endsection
