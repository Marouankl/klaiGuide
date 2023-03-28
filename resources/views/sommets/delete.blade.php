
<form method="POST" action="{{ route('sommets.delete.destroy') }}" >
    <!-- CSRF token -->
@csrf
<!-- <input type="hidden" name="_method" value="DELETE"> -->
    @method("DELETE")
    <input type="submit" value="x Supprimer" >
</form>
