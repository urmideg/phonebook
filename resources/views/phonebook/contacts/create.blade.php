@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h2>Create contact</h2>

        <form class="form-horizontal" action="{{route('contacts.store')}}" method="post">
          {{ csrf_field() }}

          @include('phonebook.contacts.partials.form')
        </form>

      </div>
    </div>
  </div>

@endsection
