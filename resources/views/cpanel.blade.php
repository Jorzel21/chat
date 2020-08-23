@extends('layouts.app')

@section('content')
	<q-page>
        <div>
            <q-toolbar class="rounded-borders">
                <q-toolbar-title>Painel de Controle</q-toolbar-title>
                <q-space></q-space>
                <q-btn color="primary" label="Novo"></q-btn>
            </q-toolbar>
            <q-toolbar inset>
                <q-tabs v-model="tab">
                    <q-tab name="users" label="Usuários"></q-tab>
                    <q-tab name="channels" label="Canais"></q-tab>
                </q-tabs>
                <q-space></q-space>
                <q-input
                    v-model="filter"
                    @keyup.esc="filter=''"
                    hide-bottom-space
                    dense
                    debounce="300"
                    placeholder="Pesquisar"
                >
                </q-input>
            </q-toolbar>
        </div>
        <list @edit="event('edit', $event)" @remove="event('remove', $event)" :columns="columns" :list="list" title="Lista" :filter="filter" ></list>
        <!-- Abaixo pode ficar as definições dos modais -->
	</q-page>
@endsection

@section('script')
  <script>
    new Vue({
      el: '#app',
      data: function() {
        return {
          filter: '',
          tab: 'users'
        }
      },
      computed: {
        list: function() {
            return [
                {
                    fullName: 'Franqueada 1',
                    role: 'Administrador',
                    channels: []
                },
                {
                    fullName: 'Franqueada 2',
                    role: 'Administrador',
                    channels: []
                },
                {
                    fullName: 'Gary Hamilton',
                    role: 'Gerente',
                    channels: ['Suporte de TI']
                },
                {
                    fullName: 'Nora Poole',
                    role: 'Gerente',
                    channels: ['Operações Próprias', 'Empresas', 'Entregadores']
                },
                {
                    fullName: 'Lee Perry',
                    role: 'Agente',
                    channels: ['Operações Próprias', 'Empresas', 'Entregadores']
                },
                {
                    fullName: 'Lee Perry',
                    role: 'Agente',
                    channels: ['Operações Próprias', 'Empresas', 'Entregadores']
                },
                {
                    fullName: 'Lee Perry',
                    role: 'Agente',
                    channels: ['Operações Próprias', 'Empresas', 'Entregadores']
                },
                {
                    fullName: 'Lee Perry',
                    role: 'Agente',
                    channels: ['Operações Próprias', 'Empresas', 'Entregadores']
                },
                {
                    fullName: 'Lee Perry',
                    role: 'Agente',
                    channels: ['Operações Próprias', 'Empresas', 'Entregadores']
                },
                {
                    fullName: 'Lee Perry',
                    role: 'Agente',
                    channels: ['Operações Próprias', 'Empresas', 'Entregadores']
                },
                {
                    fullName: 'Lee Perry',
                    role: 'Agente',
                    channels: ['Operações Próprias', 'Empresas', 'Entregadores']
                },
                {
                    fullName: 'Lee Perry',
                    role: 'Agente',
                    channels: ['Operações Próprias', 'Empresas', 'Entregadores']
                }
            ]
        },
        columns: function() {
            return [
                { name: 'fullName', required: true, label: 'Nome', align: 'left', field: 'fullName', sortable: true },
                { name: 'role', required: true, label: 'Função', align: 'left', field: 'role', sortable: true },
                { name: 'channels', label: 'Canais', align: 'left', field: 'channels', format: function(val) { return val.join(', ')} }
            ]
        }
      },
      methods: {
        event: function (ev, payload) {
          // Quasar.utils.openURL(url)
          console.log(ev, payload)
        }
      }
    })
  </script>
@endsection