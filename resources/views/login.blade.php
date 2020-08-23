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
  <script>
    new Vue({el: '#app'})
  </script>
@endsection
