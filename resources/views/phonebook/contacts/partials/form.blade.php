<label for="name">Name</label>
<input type="text" class="form-control" name="name" id="name" required>

<label for="phone">Phone</label>
<input class="form-control" type="text" name="phone" id="phone">

<label for="notice">Notice</label>
<input class="form-control" type="text" name="notice" id="notice">

<input type="hidden" name="user_id">

<hr />

<input class="btn btn-primary" type="submit" value="Save">
<a class="btn btn-danger" href="{{ route('contacts.index') }}" role="button">Cancel</a>
