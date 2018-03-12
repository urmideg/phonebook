@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <h2>Contacts</h2>
    <div class="col-md-12">
      <table class="table table-striped">
        <thead>
          <th>#</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Notice</th>
          <th class="text-right">

            <a class="btn btn-success btn-sm" href="{{ route('contacts.create') }}">
              Create
            </a>

          </th>
        </thead>
        <tbody>
          @foreach ($contacts as $key => $contact)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->notice }}</td>
            <td class="text-right">

              <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{ route('contacts.destroy', $contact) }}" method="post">

                {{ method_field('delete') }}
                {{ csrf_field() }}

                <a class="btn btn-primary btn-sm" href="{{ route('contacts.edit', $contact->id) }}">
                  Edit
                </a>

                <button type="submit" class="btn btn-danger btn-sm">
                  Delete
                </button>

              </form>

            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5">
              <ul class="pagination">
                {{ $contacts->links() }}
              </ul>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
@endsection
