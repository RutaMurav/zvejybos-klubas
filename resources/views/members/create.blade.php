<form method="POST" action="{{route('members.store')}}">
   Vardas: <input type="text" name="members_name">
   Pavarde: <input type="text" name="members_surname">
   Patirtis metais: <input type="text" name="members_experience">
   Miestas: <input type="text" name="members_live">
   Klube registruotas: <input type="text" name="members_registered">
   @csrf
   <button type="submit">ADD</button>
</form>
