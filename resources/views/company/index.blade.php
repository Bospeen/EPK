@extends('layouts.app')

@section('content')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>

 <div>
    <a style="margin: 19px;" href="{{ route('company.create')}}" class="btn btn-primary">Contact toevoegen</a>
 </div>

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contacten</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Naam</td>
          <td>Email</td>
          <td>Functie</td>
          <td>Woonplaats</td>
          <td>Land</td>
          <td colspan = 2>Acties</td>
        </tr>
    </thead>
    <tbody>
        @foreach($company as $company)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->first_name}} {{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->job_title}}</td>
            <td>{{$contact->city}}</td>
            <td>{{$contact->country}}</td>
            <td>
                <a href="{{ route('company.edit',$company->id)}}" class="btn btn-primary">Aanpassen</a>
            </td>
            <td>
                <form action="{{ route('company.destroy', $company->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Verwijderen</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
