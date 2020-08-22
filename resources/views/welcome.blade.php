@extends('layouts.app')

@section('content')
	<q-page>
		<div class="flex justify-center text-center" style="padding-top: 10vh">
      <q-card class="my-card">
        <q-card-section>
            <img src="{{ asset('img/LOGO.png') }}" style="height: 3vw; width: auto"/>
            <login route={{ route('login') }}></login>
        </q-card-section>
      </q-card>
		</div>

	</q-page>
@endsection

@section('script')
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/quasar@1.12.13/dist/quasar.umd.min.js"></script>
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
