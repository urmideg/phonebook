@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <h2>Edit contact</h2>

        <form class="form-horizontal" action="{{route('contacts.update', $contact)}}" method="post">
          {{ method_field('put') }}
          {{ csrf_field() }}

          @include('phonebook.contacts.partials.form')
        </form>

      </div>
    </div>
  </div>

@endsection
