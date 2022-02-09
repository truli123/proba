@extends('layouts.app')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodavanje novog filma</div>

                <div class="card-body">
                    <form method="POST" action="store" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ime filma:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>
												
		
                        <div class="form-group row">
                            <label for="godina" class="col-md-4 col-form-label text-md-right">Godina</label>

                            <div class="col-md-2">
                                <input id="godina" type="number" class="form-control" name="godina" min="1900" max="{{date('Y')}}" step="1"required>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="duzina" class="col-md-4 col-form-label text-md-right">duzina:(min)</label>

                            <div class="col-md-6">
                                <input id="duzina" type="number" class="form-control" name="duzina" min="0" required>
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="sl" class="col-md-4 col-form-label text-md-right">Slika </label>

                            <div class="col-md-4">
                                <input id="sl" type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="zanr" class="col-md-4 col-form-label text-md-right">žanr</label>
                            <div class="col-md-6">
                            <select id="zanr" type = "number" name="zanr" class="form-control">
                            <option value="1">SF</option>
                            <option value="2">Komedija</option>
                            <option value="3">Drama</option>
                            <option value="4">horror</option>
                            <option value="5">partizanski</option>
                            <option value="6">western</option>
                            </select>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Dodaj Film
                                </button>
                                </table>  
                                </div>                    
        
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
    <br></br>
    <br><br>                            
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
 <div class="card-header">pregled</div>
 <div class="card-body">
 Za abecedni redosljed klikni na Naziv filma
        <table class="table sortable">

           <tr><th>Naziv filma</th><th>žanr</th><th>trajanje</th><th>godina snimanja</th></tr>
           <br></br>
        
           @foreach ($film as $f ) 
       
            <tr>

     <td> {{$f->naslov}}     </td>
     <td> {{$f->ime->naziv}} </td>
     <td> {{$f->trajanje}}   </td>
     <td> {{$f->godina}}     </td>
     <td>
      <a href="delete/{{$f->id}}" class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true">obriši</a>
     </td>
            </tr>
            @endforeach
    </table>
                            </div>                    
        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

