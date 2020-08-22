@extends('layouts.app')

@section('content')
	<q-page>
		<div class="flex justify-center text-center" style="padding-top: 10vh">
      <q-card class="my-card">
        <q-card-section>
            <img src="{{ asset('img/LOGO.png') }}" style="height: 3vw; width: auto"/>
            <login route={{ route('login') }}></login>

            <users-list :users="[ {fullName: 'Igor'}, {fullName: 'Igor'}, {fullName: 'Igor'} ]"></users-list>
        </q-card-section>
      </q-card>
		</div>

	</q-page>
@endsection

@section('script')
  <script>
    new Vue({
      el: '#app',
      data: function () {
        return {
          drawerState: false
        }
      },
      methods: {
        launch: function (url) {
          Quasar.utils.openURL(url)
        }
      }
    })
  </script>
@endsection
