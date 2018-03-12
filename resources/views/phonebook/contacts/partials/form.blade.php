<label for="name">Name</label>
<input type="text" class="form-control" name="name" id="name" value="{{$contact->name or ""}}" required>

<label for="phone">Phone</label>
<input class="form-control" type="text" name="phone" id="phone" value="{{$contact->phone or ""}}">

<label for="notice">Notice</label>
<input class="form-control" type="text" name="notice" id="notice" value="{{$contact->notice or ""}}">

<input type="hidden" name="user_id" value="{{$contact->user_id or ""}}">

<hr />

<input class="btn btn-primary" type="submit" value="Save">
<a class="btn btn-danger" href="{{ route('contacts.index') }}" role="button">Cancel</a>
