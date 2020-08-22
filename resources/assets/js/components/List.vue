<template>
  <q-pull-to-refresh @refresh="$emit('reload')">
    <q-table
      :columns="columns"
      :data="list"
      :filter="filter"
      :dense="$q.screen.lt.md"
      :grid="$q.screen.lt.md"
      grid-header
      row-key="name"
      no-data-label="Nenhuma informação disponível"
      :class="['bg-white text-primary my-table', $q.screen.lt.md ? 'my-grid-on' : 'my-grid-off']"
      card-container-class="q-pt-xs overflow-auto"
      card-container-style="height: 100%;"
    >
      <template v-slot:top>
        <div class="full-width row">
          <q-btn class="on-left" flat round dense icon="fas fa-arrow-left">
            <q-tooltip>Voltar</q-tooltip>
          </q-btn>
          <div v-if="!search" class="text-h6 col-grow">Usuários</div>
          <q-input
            v-else
            v-model="filter"
            @keyup.esc=";search=false;filter=''"
            class="col-grow"
            hide-bottom-space
            autofocus
            borderless
            dense
            debounce="300"
            placeholder="Pesquisar por nome ou email"
          >
            <template v-slot:prepend>
              <q-icon color="primary" name="fas fa-search"></q-icon>
            </template>
            <template v-slot:append>
              <q-btn @click=";search=false;filter=''" color="primary" flat round dense icon="fas fa-times">
                <q-tooltip>Cancelar</q-tooltip>
              </q-btn>
            </template>
          </q-input>
          <div v-show="!search" class="q-ml-auto">
            <q-btn @click="search=true" flat round dense icon="fas fa-search">
              <q-tooltip>Pesquisar</q-tooltip>
            </q-btn>
            <q-btn v-if="!$q.platform.is.mobile" @click="$emit('reload')" flat round dense icon="fas fa-redo-alt" class="on-right">
              <q-tooltip>Recarregar</q-tooltip>
            </q-btn>
            <q-btn @click="exportTable('lista')" flat round dense icon="fas fa-download" class="on-right">
              <q-tooltip>Baixar dados</q-tooltip>
            </q-btn>
            <q-btn @click="$emit('new')" flat round dense icon="fas fa-user-plus" class="on-right">
              <q-tooltip>Novo</q-tooltip>
            </q-btn>
          </div>
        </div>
      </template>
      <template v-slot:header="props">
        <q-tr :props="props">
          <q-th
            v-for="col in props.cols"
            :key="col.name"
            :props="props"
            class="sticky-hd bg-white"
          >
            {{ col.label }}
          </q-th>
          <q-th auto-width />
        </q-tr>
      </template>
      <template v-slot:body="props">
        <q-tr :props="props">
          <q-td
            v-for="col in props.cols"
            :key="col.name"
            :props="props"
          >
            {{ col.value }}
          </q-td>
          <q-td auto-width>
<!--             <q-btn @click="$emit('change-password', { ...props.row })" flat round dense color="warning" icon="fas fa-key">
              <q-tooltip>Alterar Senha</q-tooltip>
            </q-btn> -->
            <q-btn @click="$emit('edit', { ...props.row })" flat round dense color="accent" icon="fas fa-user-edit" class="q-mx-sm">
              <q-tooltip>Editar</q-tooltip>
            </q-btn>
            <q-btn @click="$emit('remove', { ...props.row })" flat round dense color="negative" icon="fas fa-user-minus">
              <q-tooltip>Remover</q-tooltip>
            </q-btn>
          </q-td>
        </q-tr>
      </template>
      <template v-slot:item="{ row, colsMap }">
        <q-card class="col-xs-12" flat bordered square>
          <q-card-section horizontal>
            <q-item>
              <q-item-section class="q-mr-auto">
                <template v-for="(value, key) in colsMap">
                  <q-item-label :key="value.label" caption>{{ value.label }}</q-item-label>
                  <q-item-label :key="key" class="ellipsis">{{ row[key] }}</q-item-label>
                </template>
              </q-item-section>
            </q-item>
            <q-card-actions vertical class="q-ml-auto justify-between">
              <!-- <q-btn @click="$emit('change-password', { ...row })" flat round dense color="warning" icon="fas fa-key">
                <q-tooltip>Alterar Senha</q-tooltip>
              </q-btn> -->
              <q-btn @click="$emit('edit', { ...row })" flat round dense color="accent" icon="fas fa-user-edit">
                <q-tooltip>Editar</q-tooltip>
              </q-btn>
              <q-btn @click="$emit('remove', { ...row })" flat round dense color="negative" icon="fas fa-user-minus">
                <q-tooltip>Remover</q-tooltip>
              </q-btn>
            </q-card-actions>
          </q-card-section>
        </q-card>
      </template>
    </q-table>
  </q-pull-to-refresh>
</template>
<script>

function wrapCsvValue (val, formatFn) {
  let formatted = formatFn !== void 0
    ? formatFn(val)
    : val

  formatted = formatted === void 0 || formatted === null
    ? ''
    : String(formatted)

  formatted = formatted.split('"').join('""')
  /**
   * Excel accepts \n and \r in strings, but some other CSV parsers do not
   * Uncomment the next two lines to escape new lines
   */
  .split('\n').join('\\n')
  .split('\r').join('\\r')

  return `${formatted}`
}

export default {
  name: 'List',

  props: {
    list: {
      type: Array,
      default() {
        return []
      }
    }
  },
  data: () => ({
    filter: '',
    search: false
  }),
  computed: {
    columns() {
      return [
        { name: 'fullName', required: true, label: 'Nome', align: 'left', field: 'fullName', sortable: true },
      ]
    }
  },

  methods: {
    exportTable(fileName) {
      // naive encoding to csv format
      const content = [ this.columns.map(col => wrapCsvValue(col.label)).join(',') ].concat(
        this.list.map(row => this.columns.map(col => wrapCsvValue(
          typeof col.field === 'function'
            ? col.field(row)
            : row[col.field === void 0 ? col.name : col.field],
          col.format
        )).join(','))
      ).join('\r\n')

      const status = Quasar.utils.exportFile(
        `${fileName}-export-${Date.now()}.csv`,
        content,
        'text/csv;charset=utf-8'
      )

      if (status !== true) {
        this.$q.notify({
          message: 'Browser denied file download...',
          color: 'negative',
          icon: 'warning'
        })
      }
    }
  }
}
</script>
<style lang="sass" scoped>
.sticky-hd
  position: sticky
  z-index: 1
  top: 0

.my-grid-on
  max-height: calc(100vh - 23px)
  border-radius: 0px

.my-grid-off
  max-height: calc(100vh - 73px)

.my-table
  &.q-table--loading thead tr:last-child th
    top: 48px
</style>
