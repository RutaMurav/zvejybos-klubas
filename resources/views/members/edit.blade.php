<form method="POST" action="{{route('members.update',$members)}}">
   Name: <input type="text" name="members_name" value="{{$members->name}}">
   Surname: <input type="text" name="members_surname" value="{{$memebers->surname}}">
   @csrf
   <button type="submit">EDIT</button>
</form>
