<template>
    <div>
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          @click="leftDrawerOpen = !leftDrawerOpen"
          aria-label="Menu"
          icon="menu"
        />


          <q-icon :name="logoIcon" color="red" size="28px" />
          <q-toolbar-title shrink class="text-weight-bold">

          </q-toolbar-title>

        <q-space />

        <div class="q-gutter-sm row items-center no-wrap">

          <q-btn round flat>
            <q-avatar size="26px">
              <img src="https://cdn.quasar.dev/img/boy-avatar.png">
            </q-avatar>
            <q-tooltip>Account</q-tooltip>
          </q-btn>

          <q-btn flat style="color: red" label="Sair" />
        </div>
      </q-toolbar>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
      content-class="bg-grey-2"
      :width="240"
    >
      <q-scroll-area class="fit">
        <q-list padding>
          <q-item v-for="link in links1" :key="link.text" v-ripple clickable>

            <q-item-section avatar>
              <q-icon color="grey" :name="link.icon" />
            </q-item-section>
            <q-item-section>
              <q-item-label>{{ link.text }}</q-item-label>
            </q-item-section>

          </q-item>
        </q-list>
      </q-scroll-area>
    </q-drawer>
    </div>
</template>

<script>

export default {
  name: 'Menu',
  props: {
      logoIcon: ''
  },

  data () {
    return {
      leftDrawerOpen: false,
      search: '',
      links1: [
        { icon: 'forum', text: 'Conversas' },
        { icon: 'fact_check', text: 'Relatórios' },
        { icon: 'miscellaneous_services', text: 'Configurações' }
      ],

    }
  },
  created () {
    this.fabYoutube = null
  }
}
</script>

<style lang="sass">
.YL
  &__toolbar-input-container
    min-width: 100px
    width: 55%
  &__toolbar-input-btn
    border-radius: 0
    border-style: solid
    border-width: 1px 1px 1px 0
    border-color: rgba(0,0,0,.24)
    max-width: 60px
    width: 100%
  &__drawer-footer-link
    color: inherit
    text-decoration: none
    font-weight: 500
    font-size: .75rem
    &:hover
      color: #000
</style>
